<?php

/* Connection à la base de données */
function db_connection($credential_path)
{
    try {
        include($credential_path); //vu qu'on y accede depuis l'emplacement la page qui appelle la fonction
        $db = new PDO('mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8', $db_user , $db_pwd);
    } catch (Exception $e) {
        die("Erreur : ".$e->getMessage());
    }
    return $db;
}

/**/ 
function save_mail_sent( $dest, $subject, $message, $source_form, $source = Null)
{
    $db = db_connection('../traitements/secure/DataBaseCredentials.php');
    $req = $db->prepare('INSERT INTO mails_sent (source, destination, subject, message, source_form) VALUES(?, ?, ?, ?, ?)');
    $req ->execute([
        $source,
        $dest,
        $subject,
        $message,
        $source_form
    ]);
}

?>
