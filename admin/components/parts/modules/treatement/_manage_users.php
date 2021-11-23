<?php 
    var_dump($_GET);
    if(isset($_GET['id']) && isset($_GET['action']) && !empty($_GET['id']) && !empty($_GET['action']) && is_numeric($_GET['id'])   ){
        include "functions.php";
        $db = db_connection(PATH_TO_CREDENTIALS);
        extract($_GET);
        if($action == 'delete'){
            if($cible == "manage_admins"){
                $req = $db->query("DELETE FROM superusers WHERE id = $id ");
            }
            if($cible == "suscribers"){
                $req = $db->query("DELETE FROM mails_sent WHERE id = $id ");
                
            }

        }else{
            //message flash
            //redirection à la page d'aceuil
            header('location: ../../../../');
        }
        //redirection à la page de testimonials
        header("location: ../../../../?cible=".$_GET['cible']);
    }else{
        //redirection à la page d'acceuil de l'admin
        header('location: ../../../../');
    }
?>