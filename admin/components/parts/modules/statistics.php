<?php  
    $req = $db->prepare("SELECT COUNT(id) as nb FROM visits where date >= ? ");
    $week = date("Y-m-d H:i:s",time()-604800);
    $req ->execute([ $week]);
    $nbVisits = $req->fetch()["nb"];

    $req = $db->prepare("SELECT COUNT(id) as nb FROM mails_sent where sent_at >= ? AND source_form = ? ");
    $req ->execute([ $week, "Contact Us" ] );
    $nbKontakt = $req->fetch()["nb"];
    
    $req = $db->prepare("SELECT COUNT(id) as nb FROM mails_sent where sent_at >= ? AND source_form = ? ");
    $req ->execute([ $week, "KrankenversicherungForm" ] );
    $nbKrankenversicherungForm = $req->fetch()["nb"];

    $req = $db->prepare("SELECT COUNT(id) as nb FROM mails_sent where sent_at >= ? AND source_form = ? ");
    $req ->execute([ $week, "WunscheForm" ] );
    $WunscheForm = $req->fetch()["nb"];

    $req = $db->query("SELECT SUM(nb) as nbVisit, pageName FROM visits GROUP BY pageName ORDER BY nbVisit DESC LIMIT 5" );
    $topVisited = $req->fetchAll();

    //on récupere les 5 dernieres personnes à s'etre abonné à la nwesletter
    $req = $db->prepare("SELECT source as email, sent_at as date FROM mails_sent WHERE source_form = ? AND source IS NOT NULL  ORDER BY date DESC LIMIT 5");
    $req ->execute(["News Letter" ] );
    $latestsSuscribers = $req->fetchAll();

    $responce = $db->query('SELECT * FROM  testimonial ORDER BY added_at  DESC LIMIT 9');
    $testimonials = $responce->fetchAll();
    
    //la requette et le script pour récuperer et organiser les données pour le graphe... on pourra ptetre optimiser ca plus tards
    $req = $db->query("SELECT SUM(nb) as nb, date FROM visits GROUP BY date ");
    $Visits4graph = $req->fetchAll();
    $visitsPerMonths = [];
    $visitMonths = [];
    $effectifsPerMoths = [];
    foreach ($Visits4graph as $index => $Visit4graph){
        $this_month = date("M Y", strtotime($Visit4graph['date']));
        $visitsPerMonths[$this_month] = 0;
    }   

    foreach ($Visits4graph as $index => $Visit4graph){
        $this_month = date("M Y", strtotime($Visit4graph['date']));
        $visitsPerMonths[$this_month] += $Visit4graph['nb'];
    }   
    foreach ($visitsPerMonths as $index => $nb){
        array_push($visitMonths, $index);
        array_push($effectifsPerMoths, $nb);
    }
?>

<div>
    <div class="d-flex justify-content-between align-items-center mt-3 mb-0">
        <H2 class=" text-primary fixed">Statistics</H2>
        <span> <span class="text-primary h5"><?php echo $nbVisits; ?></span> <small class="text-secondary">Visits this Week !</small></span>
    </div>
    <hr>

    <div class="row" id="visitsDetails">
        <div class="col-md-8 p-2">
            <div class=" bg-light p-0 rounded card" >
                <div class="card-body bg-white relative">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class=" bg-white p-0 rounded card" >
                <div class="card-title  p-2 m-1 bg-white mb-0">
                    <span class="h6 mt-3">Top visited pages</span>
                </div>
                <div class="card-body bg-white m-0 py-2 pb-3">
                    <div class="">
                        <ul class="list-group m-0 p-0">
                        <?php foreach ($topVisited as $index => $topPage) {?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="d-flex align-items-center">
                                    <div class="badge bg-primary rounded-circle d-flex justify-content-center align-items-center px-3 "> <h5> <?php echo $index+1 ?></h5> </div>
                                    <span class="mx-3 capitalize h6"> 
                                        <?php
                                            $urlExploded = explode("/", trim($topPage['pageName'], '/'));
                                            $fileName = explode(".", trim(end($urlExploded), '.'))[0];
                                            if($fileName == "index"){
                                                echo "Home";
                                            }else{
                                                echo $fileName;
                                            }
                                        ?>
                                    </span>
                                </span>
                                <span class="text-secondary">
                                 <?php echo $topPage['nbVisit'] ?> <small>visits</small>
                                </span>      
      
                            </li>
                        <?php  }?>
                          <?php ?> 
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="mt-5">

    <div>
        <h5 class="text-center"> Submited Forms  this week (<?php echo $nbKontakt+$nbKrankenversicherungForm+$WunscheForm; ?>)</h5>
    </div>
    <div class="row mb-4 justify-content-center">
        <div class="col-md-4 col-lg-3 p-2 mx-4">
            <div class=" bg-info p-0 rounded card" >
                <div class="card-title d-flex justify-content-between m-0  p-2 pb-0 rounded-top text-white ">
                    <h6>Kontakt:</h6>
                    <span class="h6"><?php echo $nbKontakt; ?></span>
                </div>
                <div class="card-body bg-white d-flex justify-content-between">
                    <a href="?cible=stats_details&details=Kontakt" class="btn-info btn text-white"><small>details...</small></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 p-2 mx-4">
            <div class=" bg-primary p-0 rounded card" >
                <div class="card-title d-flex justify-content-between m-0  p-2 pb-0 rounded-top text-white">
                    <h6>Krankenversicherung:</h6>
                    <span class="h6"><?php echo $nbKrankenversicherungForm; ?></span>
                </div>
                <div class="card-body bg-white d-flex justify-content-between">
                    <a href="?cible=stats_details&details=Krankenversicherung" class="btn-primary btn text-white"><small>details...</small></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 p-2 mx-4">
            <div class=" bg-info p-0 rounded card" >
                <div class="card-title d-flex justify-content-between m-0  p-2 pb-0 rounded-top text-white">
                    <h6>Wunshe:</h6>
                    <span class="h6"><?php echo $WunscheForm; ?></span>
                </div>
                <div class="card-body bg-white d-flex justify-content-between">
                    <a href="?cible=stats_details&details=Wunshe" class="btn-info btn text-white"><small>details...</small></a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section class="bg-light m-0 p-4">
    <div class="row mb-4 justify-content-center   align-items-start">
        <div class="col-md-6 col-lg-6 p-2 mx-4 bg-white border border-primary">
            <div class="d-flex justify-content-between">
                <h5>Latests Testimonials</h5>
                <span><a href=".?cible=testimonials">show all</a></span>
            </div>
            <div>
                <ul class="list-group m-0 p-0">
                <?php foreach ($testimonials as $testimonial) {?>
                    <li class="list-group-item d-flex justify-content-between align-items-center <?php if ($testimonial['approved'] == 1) {echo 'border border-success rounded';}?>">
                        <span class="d-flex align-items-center"> <?php echo $testimonial['content']?> - <?php echo $testimonial['pseudo']?> </a> </span>
                        </span>
                        <span class="text-secondary" style="font-size:13px">
                            <small><?php echo $testimonial['added_at']?> </small>
                        </span>      

                    </li>
                <?php  }?>
                </ul>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 p-2 mx-5 bg-white border  border-primary">
            <div class="d-flex justify-content-between">
                <h5>Latest Suscribers</h5>
                <span><a href=".?cible=suscribers">show all</a></span>
            </div>
            <div>
                <ul class="list-group m-0 p-0">
                <?php foreach ($latestsSuscribers as $suscriber) {?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="d-flex align-items-center">  <a href="mailto:<?php echo $suscriber['email'] ?>"><?php echo $suscriber['email'] ?></a> </span>
                        </span>
                        <span class="text-secondary" style="font-size:13px">
                            <small><?php echo $suscriber['date']?> </small>
                        </span>      

                    </li>
                <?php  }?>
                </ul>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>
<script>
    const labels = <?php  echo json_encode($visitMonths)?>;
    const data = {
    labels: labels,
    datasets: [{
        label: 'Visits By Months',
        data:<?php  echo json_encode($effectifsPerMoths)?>,
        fill: false,
        borderColor: 'rgb(33, 150, 243)',
        tension: 0.3,              
        fill: {
                target: 'origin',
                above: 'rgba(33, 149, 243, 0.3)',   // Area will be red above the origin
              }
    }]
    };

    var ctx = $('#myChart');
    const myChart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: {
        plugins: {
            title: {
                display: false,
                text: 'Custom Chart Title'
            },
            legend: {
                display: true,
                labels: {
                    color: 'rgb(0, 0, 0)',
                    font: {
                        size: 16,
                        weight:"bold"
                    }
                },
                align:"end",
            }, 
            
        },
        scales: {
            y: {
                suggestedMin: 00,
               // suggestedMax: 100
            }
        }
    }
    })
</script>