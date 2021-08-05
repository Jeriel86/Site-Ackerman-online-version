<?php  
    $req = $db->prepare("SELECT COUNT(id) as nb FROM visits where date >= ? ");
    $week = date("Y-m-d H:i:s",time()-604800);
    $req ->execute([ $week]);
    $nbVisits = $req->fetch()["nb"];

    $req = $db->prepare("SELECT COUNT(id) as nb FROM mails_sent where sent_at >= ? AND source_form = ? ");
    $week = date("Y-m-d H:i:s",time()-604800);
    $req ->execute([ $week, "Contact Us" ] );
    $nbKontakt = $req->fetch()["nb"];
    
    $req = $db->prepare("SELECT COUNT(id) as nb FROM mails_sent where sent_at >= ? AND source_form = ? ");
    $week = date("Y-m-d H:i:s",time()-604800);
    $req ->execute([ $week, "KrankenversicherungForm" ] );
    $nbKrankenversicherungForm = $req->fetch()["nb"];

    $req = $db->prepare("SELECT COUNT(id) as nb FROM mails_sent where sent_at >= ? AND source_form = ? ");
    $week = date("Y-m-d H:i:s",time()-604800);
    $req ->execute([ $week, "WunscheForm" ] );
    $WunscheForm = $req->fetch()["nb"];

?>

<div>
    <H2 class="mt-3 text-primary">Statistics</H2>
    <hr>
    <div class="row mb-4">
        <div class="col-md-6 col-lg-3 p-2">
            <div class=" bg-primary p-0 rounded card" >
                <div class="card-title d-flex justify-content-between m-0  p-2 pb-0 rounded-top text-white">
                    <h5>Visits (this week):</h5>
                    <span class="h5"><?php echo $nbVisits; ?></span>
                </div>
                <div class="card-body bg-white d-flex justify-content-between">
                    <a href="#visitsDetails" class="btn-primary btn text-white">details...</a>
                    <button data-toggle="modal" data-target="#resetModal" class="btn-secondary btn text-white">Reset</button>
                </div>
            </div>
        </div>
        <!-- modal pour réinitialiser les valeurs (il va etre dynamique en fonction des valeurs qu'il recevra en paramettre) -->
        <div class="modal" id="resetModal">
            <div class="modal-dialog">
            </div>
        </div>
        <div class="col-md-6 col-lg-3 p-2">
            <div class=" bg-info p-0 rounded card" >
                <div class="card-title d-flex justify-content-between m-0  p-2 pb-0 rounded-top text-white ">
                    <h5>Kontakt (this week):</h5>
                    <span class="h5"><?php echo $nbKontakt; ?></span>
                </div>
                <div class="card-body bg-white d-flex justify-content-between">
                    <a href="?cible=stats_details&details=Kontakt" class="btn-info btn text-white">details...</a>
                    <form action="" method="post" class="p-0 m-0">
                        <button  class="btn-secondary btn text-white">Reset</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 p-2">
            <div class=" bg-primary p-0 rounded card" >
                <div class="card-title d-flex justify-content-between m-0  p-2 pb-0 rounded-top text-white">
                    <h5>Krankenversicherung (sent):</h5>
                    <span class="h5"><?php echo $nbKrankenversicherungForm; ?></span>
                </div>
                <div class="card-body bg-white d-flex justify-content-between">
                    <a href="?cible=stats_details&details=Krankenversicherung" class="btn-primary btn text-white">details...</a>
                    <form action="" method="post" class="p-0 m-0">
                        <button  class="btn-secondary btn text-white">Reset</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 p-2">
            <div class=" bg-info p-0 rounded card" >
                <div class="card-title d-flex justify-content-between m-0  p-2 pb-0 rounded-top text-white">
                    <h5>Wunshe (sent):</h5>
                    <span class="h5"><?php echo $WunscheForm; ?></span>
                </div>
                <div class="card-body bg-white d-flex justify-content-between">
                    <a href="?cible=stats_details&details=Wunshe" class="btn-info btn text-white">details...</a>
                    <form action="" method="post" class="p-0 m-0">
                        <button  class="btn-secondary btn text-white">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="visitsDetails">
        <div class="col-md-8 p-2">
            <div class=" bg-light p-0 rounded card" >
                <div class="card-title  p-2 m-1  mb-0">
                    <span class="h5">Nombres de visites mensuelles</span>
                </div>
                <div class="card-body bg-white">
                    <canvas></canvas> <br>
                    ici on va tracer la courbe 
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class=" bg-light p-0 rounded card" >
                <div class="card-title  p-2 m-1  mb-0">
                    <span class="h5">Pages les plus visitées</span>
                </div>
                <div class="card-body bg-white">
                    <canvas></canvas> <br>
                    ici représenter l'histograme
                </div>
            </div>
        </div>
    </div>
</div>