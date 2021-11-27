<?php
include "functions.php";

if (isset($_POST) && !empty($_POST) ) {
    # code... dans le cas où on accede à cette page par soumission d'un formlaire
    //connection à la base de donnée
    $db = db_connection(PATH_TO_CREDENTIALS);
    $section_id = $_POST['id_section']; 
    $req = $db->query("SELECT * FROM editable_section WHERE id = $section_id ");
    $actual_edited_section = $req->fetch();
?>
<?php  ?> 
<div class="col-md-12 bg-primary text-light p-2">
    <span class="d-flex justify-content-center h5 ">
        You are editing section > <b><?php echo $actual_edited_section["name"] ?> </b>
    </span>
    <div class="row justify-content-between pb-3">
        <input type="hidden" name="id" value="<?php echo $actual_edited_section["id"] ?>">
        <div class="col-md-3 d-flex align-items-center ">
            Order in page  : <input type="number" class="form-control w-25" name="rank_in_page" min = "1" id="" value="<?php echo $actual_edited_section["rank_in_page"]  ?>"> <br/>
        </div>
        <div class="col-md-4 d-flex align-items-center justify-content-arround">
            Name  : <input type="text" class="form-control w-75" name="name" min = "1" id="name" value="<?php echo $actual_edited_section["name"]  ?>"> <br/>
        </div>
        <div class="col-md-4 d-flex justify-content-end">
            <button type="button" class="btn btn-dark mx-2" id='setOldCode'>Version précedente</button>
            <button type="button" class="btn btn-dark mx-2 d-none" id='setActualCode'>Version Actuelle</button>
            <input type="button" class="btn btn-success" value="Prévisualiser" onclick="preview()">
        </div>
    </div>
    <textarea name="source_code" id="sourceCode" class="form-control small bg-dark text-light" rows="12" aria-valux=""><?php echo htmlspecialchars($actual_edited_section["source_code"])  ?></textarea>
    <textarea name="next_old_source_code"id="actualsourceCode" class="form-control small bg-dark text-light d-none " rows="12"><?php echo htmlspecialchars($actual_edited_section["source_code"])  ?></textarea>
    <textarea id="oldsourceCode" class="form-control small bg-dark text-light d-none " rows="12"><?php echo htmlspecialchars($actual_edited_section["old_source_code"]) ?></textarea>
</div>

<div>
<!--Section 5 : modal de prévisualisation-->
  <section>
    <div class="modal fade text-dark " id="previsualisation" data-backdrop="static" data-keyboard="false" tabindex="-1"  aria-hidden="true">
      <div class="modal-dialog modal-fullscreen modal-dialog-centered modal  modal-dialog-scrollable">
        <div class="modal-content  " style="overflow: visible;">
          <div class="modal-header py-1 bg-primary text-white border-0">
              <h5 class="modal-title text-center ">Preview of "<small><span id="previewTitle"></span></small>"</h5>
              <div>
              </div>

            <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close" onclick="updateVisit()"></button>
          </div>
          <div class="modal-body p-0" >
            <div class="bg-secondary text-white p-2">
                <small>
                    IMPORTANT NOTES:  the preview is firstly <span class="text-info">to display the HTML structure of the section</span>, so:
                    <ul class="mx-4">
                        <li> <span class="text-warning">Images wouldn't been displayed</span> on prevew mode, due to path differences </li>
                        <li>there could be some litle sytles diferences on preview</li>
                        <li>if your code has some variable printing that are not declared on the code, <span class="text-warning">the display will throw errors</span> </li>
                    </ul>  
                </small>
            </div>
            <div id="previewCible" class="text-dark">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
<script >

    $("#setOldCode").click(function(){
        $('#sourceCode').html($('#oldsourceCode').html())
        $("#setActualCode").removeClass("d-none")
        $("#setOldCode").addClass("d-none")
        confirm("You are lost all modification and load the old version of the code")
    })
    $("#setActualCode").click(function(){
        $('#sourceCode').html($('#actualsourceCode').html())
        $("#setActualCode").addClass("d-none")
        $("#setOldCode").removeClass("d-none")
        confirm('You are lost all modification and load the actual version of the Code')
    })
</script>
<script>
    function  preview(){
        $('#previewTitle').html(document.getElementById('name').value )
        url="components/parts/modules/treatement/_manage_content_previewer.php"
        $("#previewCible").load(url,{ source: document.getElementById('sourceCode').value })
        var myModal = new bootstrap.Modal(document.getElementById('previsualisation'))
            myModal.show()
    }
</script>
<?php } ?> 