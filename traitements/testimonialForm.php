<?php

if (isset($_POST) && !empty($_POST) ) {
    # code... dans le cas où on accede à cette page par soumission d'un formlaire
    //connection à la base de donnée
    extract($_POST);
    include ("functions.php");
    $db = db_connection("secure/DataBaseCredentials.php");
    $req = $db->prepare('INSERT INTO testimonial (pseudo, content) VALUES(?, ?)');
    $req ->execute([$name, $message]);
    header('Location: ../index.php#testimonial');
}
else{
    // dans le cas contraire (dans ce cas, c'est que la page sera inclue dans une autre)
    if(isset($testimonials)){
        //connection à la base de donnée
        include ("functions.php");
        $db = db_connection("secure/DataBaseCredentials.php");
        $responce = $db->query('SELECT * FROM  testimonial WHERE approved = 1 ORDER BY id DESC LIMIT 9');
        $Fetch_testimonials = $responce->fetchAll();
        $i = 0; $compt1 = 0; $compt2 = 0;
        while($i< count($Fetch_testimonials)){
            for($j=0; $j<3; $j++){
                $testimonials[$compt1][$j] = $Fetch_testimonials[$compt2];
                $compt2++;
            }
            $i = $i+3; $compt1++;
        }
    }
}