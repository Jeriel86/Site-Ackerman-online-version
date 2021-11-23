<div class=" position-fixed text-white side-nav">
    <div class="d-flex justify-content-center align-items-center bg-light mt-1">
        <a href="." class="text-secondary  flex justify-content-center p-1 align-items-center">
            <span ><img class="logo" src="../assets/bilder/logo.png " style="width: 50px; height: auto;"></span>
            <span class="h4">
                Admin
            </span>
        </a>
    </div>
    <hr>
    <div class ="">
        <a href=".?cible=stats" class='nav-link  text-light <?php if (!isset($_GET['cible']) || $_GET['cible'] == 'stats'){echo 'active rounded';} ?>  '>
         <small> <i class="fas fa-chart-line"></i>  Statistics</small>
        </a>
    </div>
    <div class ="">
        <a href=".?cible=suscribers" class="nav-link text-light <?php if (isset($_GET['cible']) && $_GET['cible'] == 'suscribers'){echo 'active rounded';} ?>">
           <small>
               <i class="fas fa-users-cog"></i> Suscribers
           </small>
        </a>
    </div>
    <div>
        <a href="javascript:void(0)" class="nav-link text-white <?php if (isset($_GET['cible']) && $_GET['cible'] == 'manage_content'){echo 'active rounded';} ?>" onclick="My_toggle('manageSiteSubMenu')">
            <small>
                <i class="fas fa-cogs"></i> Manage Site Content
            </small>   
        </a>
        <div class="bg-dark px-2 p-1 rounded-bottom overflow-hidden" id='manageSiteSubMenu'>
        <?php 
        $req = $db->query("SELECT id, title FROM editable_page ");
        $editable_pages = $req->fetchAll();
        foreach ($editable_pages as $page){ ?> 
            <a href=".?cible=manage_content&page=<?php echo $page['title'] ?>" class=" nav-link text-light py-1 <?php if (isset($_GET['cible']) && $_GET['cible'] == 'manage_content' && $_GET['page'] == $page['title'] ){echo 'active';} ?>"><small><i class="fas fa-file-signature"></i> <?php echo $page["title"] ?></small> </a>
        <?php } ?> 
        
        </div>
    </div>
    <div class ="">
        <a href=".?cible=manage_admins" class="nav-link text-light mt-1 <?php if (isset($_GET['cible']) && $_GET['cible'] == 'manage_admins'){echo 'active rounded';} ?> ">
       <small> <i class="fas fa-users-cog"></i> Manage admins</small>
        </a>
    </div>
    <div class ="">
        <a href=".?cible=testimonials" class="nav-link text-light mt-1 <?php if (isset($_GET['cible']) && $_GET['cible'] == 'testimonials'){echo 'active rounded';} ?> ">
       <small> <i class="fas fa-users-cog"></i> Testimonials</small>
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