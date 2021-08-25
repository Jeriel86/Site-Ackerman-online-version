<div class="text-white side-nav">
    <div class="d-flex justify-content-center bg-light mt-1">
        <a href="." class="text-secondary p-1">
            <span ><img class="logo" src="../assets/bilder/logo.png " style="width: 50px; height: auto;"></span>
            <span class="h4 pt-2 pl-2" style="">
                Admin
            </span>
        </a>
    </div>
    <hr>
    <div class ="">
        <a href=".?cible=stats" class='nav-link  text-light <?php if (!isset($_GET['cible']) || $_GET['cible'] == 'stats'){echo 'active rounded';} ?>  '>
            Statistics
        </a>
    </div>
    <div class ="">
        <a href=".?cible=suscribers" class="nav-link text-light <?php if (isset($_GET['cible']) && $_GET['cible'] == 'suscribers'){echo 'active rounded';} ?>">
            Suscribers
        </a>
    </div>
    <div>
        <a href="javascript:void(0)" class="nav-link text-white <?php if (isset($_GET['cible']) && $_GET['cible'] == 'manage_content'){echo 'active rounded';} ?>" onclick="My_toggle('manageSiteSubMenu')">
            Manage Site Content
        </a>
        <div class="bg-dark px-2 p-1 rounded-bottom overflow-hidden" id='manageSiteSubMenu'>
            <a href=".?cible=manage_content&page=home" class=" nav-link text-light py-1 <?php if (isset($_GET['cible']) && $_GET['cible'] == 'manage_content' && $_GET['page'] == "home"){echo 'active';} ?>">home</a>
            <a href=".?cible=manage_content&page=Krankenversicherung" class=" nav-link text-light py-1 <?php if (isset($_GET['cible']) && $_GET['cible'] == 'manage_content' && $_GET['page'] == "Krankenversicherung"){echo 'active';} ?>">Krankenversicherung</a>
            <a href=".?cible=manage_content&page=Wunche" class=" nav-link text-light py-1 <?php if (isset($_GET['cible']) && $_GET['cible'] == 'manage_content' && $_GET['page'] == "Wunche"){echo 'active';} ?>">Wunche</a>
            <a href=".?cible=manage_content&page=About" class=" nav-link text-light py-1 <?php if (isset($_GET['cible']) && $_GET['cible'] == 'manage_content' && $_GET['page'] == "About"){echo 'active';} ?>">About</a>
        </div>
    </div>
    <div class ="">
        <a href=".?cible=manage_admins" class="nav-link text-light mt-1 <?php if (isset($_GET['cible']) && $_GET['cible'] == 'manage_admins'){echo 'active rounded';} ?> ">
            Manage admins
        </a>
    </div>
</div>

<script lang='text/javascript'> 
    function My_toggle(cible_id) {
        cible= document.getElementById(cible_id)
        if(cible.style.height=='0px'){
            alert("c'est deja court")
        }
        
        alert($("#"+cible_id))

        
}
</script>