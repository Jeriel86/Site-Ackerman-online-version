<?php

    if (!isset($_GET['page']) || $_GET['page'] == ''){
        header('location: .');
    }
    $page = $_GET['page'];
?>
 
<div>
    <form action="components/parts/modules/treatement/_manage_content.php" method="post">
        <div class="mt-3 d-flex justify-content-between">
            <div class=" text-primary">
                <span class="h2" id='truc'>Manage </span> <span> <?php echo $page ?> </span>
            </div>
            <div>
                <button type="sumbit" class='btn btn-primary d-none' id="saveModifs"> Save Modifications</button>
                <a href="." class="btn btn-warning"> Cancel</a>
            </div>
        </div>
        <hr>
        <div class="row mb-4">

        <?php 
            $req = $db->query("SELECT * FROM editable_section WHERE id_editable_page in  (SELECT id FROM editable_page WHERE title = '$page') ");
            $editable_sections = $req->fetchAll();
            if(count($editable_sections) >= 1 ){
        ?> 
            <p class="h6">
                Select a section (by it name) to edit it </span>
            </p>
            <div class="row mb-2">
                <?php  foreach ($editable_sections as $section){
                    
                    ?> 
                    
                    <div class="col-md-2 btn btn-success mx-2 " onclick="loadFormEditableSection('<?php echo $section['id'] ?>')" ><?php echo $section['name'] ?></div>                    
                <?php }?> 
            </div>
            <div class="text-info">
            <?php $actual_edited_section = $editable_sections[0];?>
            <div class="row p-2" id="editor">

            </div>
        <?php } else{?>
            <p>  <span class="text-danger">Ooops</span> there's not editable section yet for this page</p> 
        <?php }?> 

    </form>
</div> 
    </div>
</div>
<script>
    function loadFormEditableSection(section_id){
        url="components/parts/modules/treatement/_manage_content_Form.php"
        $("#editor").load(url,{ id_section: section_id })
        $('#saveModifs').removeClass('d-none')
    }
</script>