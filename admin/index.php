<?php
session_start();
    if (!isset($_SESSION['auth']) || empty($_SESSION['auth']) || $_SESSION['auth'] == NULL ){
        header("location: auth/");
    }
    $pageStyles= "<link rel='stylesheet' href='../assets/css/about.css'>"; //balise pour ajouter un fichier CSS propre à cette page 
    include "components/parts/header.php";
?>
    <?php ?>
    Bienvenue <?php echo $_SESSION['auth']['name'] ?> la page ci n'est que pour les teste pour le moment, <a href="auth/logout/">déconnectez vous ici voir</a>.
    
</body>
    <?php
    include "components/parts/footer.php";
    
    ?>
</html>