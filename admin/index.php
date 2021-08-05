<?php
session_start();
    if (!isset($_SESSION['auth']) || empty($_SESSION['auth']) || $_SESSION['auth'] == NULL ){
        header("location: auth/");
    }
    $pageStyles= "<link rel='stylesheet' href='../assets/css/admin/index.css'>"; //balise pour ajouter un fichier CSS propre à cette page 
    include "components/parts/header.php";
    try {
        include('../traitements/secure/DataBaseCredentials.php'); //vu qu'on y accede depuis l'emplacement cette page
        $db = new PDO('mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8', $db_user , $db_pwd);
    } catch (Exception $e) {
        die("Erreur : ".$e->getMessage());
    }
?>
    <?php ?>
<body id="top" class="p-0 m-0">
<div>
    <div class="row  m-0" style="height:100vh">
        <div class="col-2  bg-primary overflow-auto" >
         
            <?php 
                include 'components/parts/sideBar.php';
            ?>
        </div>
        <div class="col-10  p-0 overflow-auto">
            <div class="nav  bg-light d-flex justify-content-between px-4 py-1">
                <div clas="nav-item p-auto m-auto">
                    <form action="" method="get" class="p-auto m-auto d-flex p-0 m-0">
                        <input type="search" name="search" id="searchinput" placeholder="type something here..." class=" p-auto m-auto nav-link ">
                        <button type="submit" class="rounded-0 btn btn-primary">search</button>
                    </form>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="auth/?display" class="circle rounded-circle bg-success text-white nav-link mx-3 h4"><?php echo substr($_SESSION['auth']['name'], 0, 1) ?></a>
                    <a href="auth/logout" class="circle rounded-circle bg-danger text-white bold  nav-link h4"><b> &cross;</b> </a>
                </div>
            </div>
            <div class="container">
                <?php  
                    if (!isset($_GET['cible']) || $_GET['cible'] == 'stats' ){
                        include 'components/parts/modules/statistics.php'; 
                    }else{
                        if( $_GET['cible'] == 'stats_details'){ //si il veut les details des stats
                            if(isset($_GET['details'])){ // est ce qu'il a précisé le detail qu'il veut ?
                                include 'components/parts/modules/stat_details.php';
                            }else{
                                //si il n'a pas précisié quel details il veut on ne fait rien, il reste où il etait
                            }
                        }elseif( $_GET['cible'] == 'suscribers' ){ // si il veut voir les abonnés    
                            include 'components/parts/modules/suscribers.php';
                        }elseif( $_GET['cible'] == 'manage_content' ){ // si il veut gerer les contenus des pages du site    
                            include 'components/parts/modules/manage_content.php';
                        }elseif( $_GET['cible'] == 'manage_admins' ){ // si il veut gerer les administrateurs du site    
                            include 'components/parts/modules/manage_admins.php';
                        }else { //dans le cas où on recontre quelque chose qu'on a pas prévu ici, on le redirige vers la page d'acceuil de l'administration
                            header("location: ."); // hop comme un pro !
                        }

                    }
                ?>
            </div>      
        </div>
        
    </div>
</div>
</body>
<?php    ?>
</html>