<?php 
    $source_form = "default"; 
    if($_GET['details'] == "Kontakt"){
        $source_form = "Contact Us"; 
    }elseif($_GET['details'] == "Krankenversicherung") {
        $source_form = "KrankenversicherungForm"; 
    }elseif ($_GET['details'] == "Wunshe") {
        $source_form = "WunsheForm";
    }
    if($source_form == "default"){
        header('location: ?cible=stats');
    }
    if(isset($_GET['slice']) && $_GET['slice'] == "all"){ // si il faut afficher toutes les valeurs
        $req = $db->prepare("SELECT * FROM mails_sent where source_form = ? ");
        $req ->execute([ $source_form] );
        $details = $req->fetchAll();
        $by_week = false; 
    } else{ // si il ne faut que les valeurs de cette semaine
        $req = $db->prepare("SELECT * FROM mails_sent where sent_at >= ? AND source_form = ? ");
        $week = date("Y-m-d H:i:s",time()-604800);
        $req ->execute([ $week, $source_form] );
        $details = $req->fetchAll();
        $by_week = true;
    }
?>

<div>
    <div class="mt-3 d-flex justify-content-between">
        <div class=" text-primary d-flex ">
            <H2 class=""><?php echo $_GET['details'] ?></H2><small class="align-middle">(<?php echo count($details); if ($by_week){ echo " This week";  }else{echo " Since the first one";} ?>)</small>
        </div>
        <div class="mt-">
            <a href="<?php echo str_replace('&slice=all', '', $_SERVER['REQUEST_URI']) ?>" class="btn btn-primary <?php if ($by_week){ echo " disabled"; }?>"> this Week</a> |
            <a href="<?php echo $_SERVER['REQUEST_URI'] . "&slice=all" ?>" class="btn btn-primary <?php if (!$by_week){ echo " disabled"; } ?> ">show all</a>
        </div>
    </div>
        <hr>
    <div class='row'>
        <?php if($details){ 
            ?>
        
        <div class="col-md-12 ">
            <table  class="border table-responsive w-100" >
                <tr class="border">
                    <th>From</th>
                    <th>To</th>
                    <th>Subject</th>
                </tr>
                <tr>
                    <td><?php if($details[0]['source']!=Null){echo $details[0]['source'];}else{ echo "This Website";} ?></td>
                    <td><?php echo $details[0]['destination']; ?></td>
                    <td><?php echo $details[0]['subject']; ?></td>
                </tr>
            </table>
        </div>
        <div class="col-md-12 mt-3">
            <table>
                <thead>
                    <tr class="text-center">
                        <th>Date</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                <?php for ($i = 0; $i<count($details); $i++){ ?>
                    <tr class="border">
                        <td class="col-3 text-center"><?php  echo $details[$i]["sent_at"] ?></td>
                        <td class="col-9 overflow-auto border p-3"><?php  echo str_replace('caption', 'i', $details[$i]["message"]) ?></td>
                    </tr>
                <?php  } ?> 
                </tbody>

            </table>
        </div>
        <?php } else { ?>
            <p>There is no information about <span class="text-info"><?php echo $_GET['details'] ?></span> in database</p>
        <?php  } ?>
    </div>
</div>