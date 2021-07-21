<?php 

if (isset($_POST) && !empty($_POST) ) {
    # code... dans le cas où on accede à cette page par soumission d'un formlaire
    
    //connection à la base de donnée
    extract($_POST);
    try {
        include('../secure/DataBaseCredentials.php'); //vu qu'on y accede depuis l'zmplacement cette page  
        $db = new PDO('mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8', $db_user , $db_pwd);
        
    } catch (Exception $e) {
        die("Erreur : ".$e->getMessage());
    }
    $req = $db->prepare('INSERT INTO testimonial (mail , pseudo, content) VALUES(?, ?, ?)');
    $req ->execute([$mail, $name, $content]);
    header('Location: ../index.php#testimonial');
}
else{
   // dans le cas contraire (dans ce cas, c'est que la page sera inclue dans une autre)
    if(isset($testimonials)){
        //connection à la base de donnée
            try {
                include('secure/DataBaseCredentials.php'); //vu qu'on y accede depuis index et non cette page  
                $db = new PDO('mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8', $db_user , $db_pwd);
                
            } catch (Exception $e) {
                die("Erreur : ".$e->getMessage());
            }
        $responce = $db->query('SELECT * FROM  testimonial  ORDER BY id DESC LIMIT 5');
        $testimonials = $responce->fetchAll();
    } 
}