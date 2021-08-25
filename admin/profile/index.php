<?php 
    session_start();
    if (!isset($_SESSION['auth']) || empty($_SESSION['auth']) || $_SESSION['auth'] == NULL ){
        header("location: ../auth/");
    }
    echo 'vous etes sur la page de votre profil : voilà j\'ai rien à ajouter pour l\'instant !';
?>