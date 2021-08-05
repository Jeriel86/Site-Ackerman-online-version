<?php
    if (!isset($_GET['page']) || $_GET['page'] == ''){
        header('location: .');
    }
?>
 
<div>
    <div class="mt-3 d-flex justify-content-between">
        <div class=" text-primary">
            <span class="h2">Manage </span> <span> <?php echo $_GET['page'] ?> </span>
        </div>
        <div>
            <a href="" class='btn btn-primary'> Save Modifications</a>
            <a href="" class="btn btn-warning"> Cancel</a>
        </div>
    </div>
    <hr>
    <div class="row mb-4">
    <p class="h6">
        Here you'll have forms to redefine content of the page   <span class="text-info"> <?php echo $_GET['page'] ?> </span>
    </p>
    </div>
</div>