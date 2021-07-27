<?php
    /*page pour la confirmation de comptes */
    $user_id = $_GET['id'];
    $token = $_GET['token'];
    
    // On se connecte à la base de donnée.
    try {
        include('../../traitements/secure/DataBaseCredentials.php'); //vu qu'on y accede depuis l'emplacement cette page
        $db = new PDO('mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8', $db_user , $db_pwd);
    } catch (Exception $e) {
        die("Erreur : ".$e->getMessage());
    }

    $req = $db->prepare('SELECT * FROM superusers WHERE id = ?');
    $req->execute([$user_id]);
    $user = $req->fetch();
    session_start();

    if($user && $user["validation_token"] == $token ){
        $db->prepare('UPDATE superusers SET validation_token = NULL, account_validated = 1 WHERE id = ?')
            ->execute([$user_id]);
        $usermail = $user['mail'];
        $messageFlash['message'] = "The account has been successfully validated, a mail will be sent to $usermail, inviting him to login."; 
        $messageFlash['type'] = "success";
        $_SESSION['messageFlash'] = $messageFlash;
        $retval = mail(
            $user['mail'],
            "Your SuperUser Account has been confirmated",
            "You can now log in and enjoy all our new features: <a href='beamtenversicherung-vkb.de/admin/auth/'> click here to access the login page</a>"
        );
        header('Location: index.php');
    }else{
        $messageFlash['message'] = "This tokken is not valid"; 
        $messageFlash['type'] = "danger";
        $_SESSION['messageFlash'] = $messageFlash;
        header('Location: index.php');
    }


?>