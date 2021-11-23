<?php 
    var_dump($_GET);
    if(isset($_GET['id']) && isset($_GET['action']) && !empty($_GET['id']) && !empty($_GET['action']) && is_numeric($_GET['id'])   ){
        include "functions.php";
        $db = db_connection(PATH_TO_CREDENTIALS);
        extract($_GET);
        if($action == "aprouve"){
            $req = $db->query("UPDATE testimonial SET approved = 1 WHERE id=$id");
            
        }elseif($action == 'disaprouve'){
            $req = $db->query("UPDATE testimonial SET approved = 0 WHERE id=$id");

        }elseif($action == 'delete'){
            $req = $db->query("DELETE FROM testimonial WHERE id = $id ");

        }else{
            //message flash
            //redirection à la page d'aceuil
            header('location: ../../../../');
        }
        //redirection à la page de testimonials
        header('location: ../../../../?cible=testimonials');
    }else{
        //redirection à la page d'acceuil de l'admin
        header('location: ../../../../');
    }
?>