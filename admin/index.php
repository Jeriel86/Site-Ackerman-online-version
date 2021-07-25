<?php
session_start();
    if (!isset($_SESSION['auth']) || empty($_SESSION['auth']) || $_SESSION['auth'] == NULL ){
        header("location: auth/");
    }
?>
    <?php ?>
Bienvenue <?php echo $_SESSION['auth']['name'] ?> la page ci n'est que pour les teste pour le moment, <a href="logout/">déconnectez vous ici voir</a>.