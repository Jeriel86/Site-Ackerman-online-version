<?php
include "functions.php";
if (isset($_POST) && !empty($_POST) ) {
    # code... dans le cas où on accede à cette page par soumission d'un formlaire
    //connection à la base de donnée
    extract($_POST);
    $db = db_connection(PATH_TO_CREDENTIALS);
    $req = $db->prepare("UPDATE editable_section SET source_code = ?, rank_in_page = ?, edited_at=?, name=?, old_source_code=? WHERE id=$id");
    $req ->execute([$source_code, $rank_in_page, date("y-m-d h-i-s"), $name, $next_old_source_code ]);
   //hop ici on met le méssage flash
   //puis on redirige vers la page d'acceuil
   header('location: ../../../../');
}
if(empty($_POST) ){
    var_dump($_SERVER);
}
?>