<?php 
    // On se connecte à la base de donnée.
    if(!isset($db)){
        if(isset($_GET['gewinnspiel'])){
            include ("functions.php");
            $db = db_connection("secure/DataBaseCredentials.php");
        }else{
            include ("functions.php");
            $db = db_connection("traitements/secure/DataBaseCredentials.php");
        }
        
    }
if(isset($_GET['gewinnspiel'])){
    $page = $_GET['gewinnspiel'];
    $ip = $_SERVER['REMOTE_ADDR']; // l'addresse du client qui charge la page
    $req = $db->query("UPDATE visits  SET gewinnspiel = 1 WHERE pageName= '$page' AND ip ='$ip' " );
}else{
    
    // on défini quelques variables :
    $page = $_SERVER['SCRIPT_NAME']; // l'url de la page qui est chargée sur le serveur ( la page dont on veut le nombre de visites)
    $ip = $_SERVER['REMOTE_ADDR']; // l'addresse du client qui charge la page
    $delais =  21600;  // (maintenant moins 6heures) la date minimale à partir de la quelle un client recidiviste est considéré comme nouveau visiteur
                                                             // ici , si il recharge la page plusieurs fois en moisn de   heures, ca n'affecte pas le nombre de visites
                                                             // si il la recharge apres 6h on le considère comme un nouveau visiteur
    $responce = $db->query("SELECT * FROM visits WHERE pageName= '$page' AND ip ='$ip' ");
    $ancien_visite = $responce->fetch();
    if($ancien_visite != false ){ // si il y a eu une ancienne visite (si on a trouvé les trace du client sur cette page)        
        if(( time() - strtotime($ancien_visite['date'])) < $delais ){ //si le client a visité la page il y a moins de 6h
            // mise à jour de la date
            $req = $db->prepare('UPDATE visits SET date = ? WHERE id = ?');
            $req ->execute([date('Y-m-d H:i:s', time()), $ancien_visite['id']]);
            if($ancien_visite['gewinnspiel'] == 0){
                $premiereVisite = true;
            }
        }else{ //si il a visité il y a plus de 6h (on le considere comme un nouveau visiteur)
            // incrémentation du nombre de visite  et la date (elle se faiti automatiquement)
            $req = $db->prepare('UPDATE visits SET nb = ? WHERE id = ?');
            $req ->execute([$ancien_visite['nb']+1, $ancien_visite['id']]);            
            $premiereVisite = true;
        }
    }else{ //si le client n'est jamais venu sur cette page
        $req = $db->prepare('INSERT INTO visits (pagename, ip) VALUES(?, ?)');
        $req ->execute([$page, $ip]);
        $premiereVisite = true;
    }
    $responce = $db->query("SELECT * FROM visits WHERE pageName= '$page' ");
    $visites = $responce->fetchAll();
    $nbVisites = 0;
    // on compte le nombre de visites pour chaque IPs
    if($visites != false && $visites != [] ){
        for($i = 0; $i< count($visites); $i++){
            $nbVisites = $nbVisites + $visites[$i]['nb']; 
        }
    }
}


?>
