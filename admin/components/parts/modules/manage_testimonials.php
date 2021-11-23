<?php  
    $req = $db->prepare("SELECT * FROM testimonial ");
    $req ->execute( );
    $testimonials = $req->fetchAll();
    $approveds = [];
    $not_approveds = [];
    foreach ($testimonials as $testimonial) {
        if($testimonial['approved'] == 1){
            array_push($approveds, $testimonial);
        }else{
            array_push($not_approveds, $testimonial);
        }
    }
?>

<div>
    <H2 class="mt-3 text-primary">Manage Testimonials</H2>
    <hr>
</div>
<section class="bg-light m-0 p-0">
    <div class="row mb-4 justify-content-center   align-items-start">
        <div class="col-12 p-2 mx-3 bg-white border border-primary">
            <div class="d-flex justify-content-between">
                <h5>APPROVED</h5>
            </div>
            <div>
                <ul class="list-group m-0 p-0">
                <?php foreach ($approveds as $testimonial) {?>
                    <li class="list-group-item d-flex justify-content-between align-items-center ">
                        <span class="">" <?php  if (strlen($testimonial["content"]) <= 50  ) {
                                                echo nl2br($testimonial["content"]);
                                              }else{
                                                echo substr($testimonial["content"], 0, 50);
                                                echo "...";
                                              }  ?>" <br><i> by <b><?php echo $testimonial['pseudo']?></b></i> </span>
                        </span>
                        <span class="text-secondary" style="font-size:13px">
                            <button class="btn btn-outline-success btn-sm" onclick="show( '<?php echo $testimonial['content']?>',  '<?php echo $testimonial['pseudo']?>',  '<?php echo $testimonial['added_at']?>', <?php echo $testimonial['id']?>)"  data-bs-toggle="modal" data-bs-target="#Modalaffichage" >show</button>
                            <a href="components/parts/modules/treatement/_manage_testimonial.php?id=<?php echo $testimonial['id']?>&action=disaprouve" class="btn btn-outline-primary btn-sm">Disaprouve</a>
                            <button class="btn btn-sm btn-outline-danger" onclick="deleter(<?php echo $testimonial['id']?>)" data-bs-toggle="modal" data-bs-target="#descriptionBloc1">Delete</button>
                        </span>  
                    </li>
                <?php  }?>
                </ul>
            </div>
        </div>
        <div class="col-12 p-2 mx-3 bg-white border mt-4 border-primary">
        <div class="d-flex justify-content-between">
                <h5>NOT APPROVED</h5>
            </div>
            <div>
                <ul class="list-group m-0 p-0">
                <?php foreach ($not_approveds as $testimonial) {?>
                    <li class="list-group-item d-flex justify-content-between align-items-center ">
                    <span class="">" <?php  if (strlen($testimonial["content"]) <= 50  ) {
                                                echo nl2br($testimonial["content"]);
                                              }else{
                                                echo substr($testimonial["content"], 0, 50);
                                                echo "...";
                                              }  ?>" <br><i> by <b><?php echo $testimonial['pseudo']?></b></i> </span>
                        <span class="text-secondary" style="font-size:13px">
                            <button class="btn btn-outline-success btn-sm" onclick="show( '<?php echo htmlspecialchars_decode($testimonial['content'])?>',  '<?php echo $testimonial['pseudo']?>',  '<?php echo $testimonial['added_at']?>', '<?php echo $testimonial['id']?>')"  data-bs-toggle="modal" data-bs-target="#Modalaffichage" >show</button>
                            <a href="components/parts/modules/treatement/_manage_testimonial.php?id=<?php echo $testimonial['id']?>&action=aprouve" class="btn btn-outline-primary btn-sm">aprouve</a>
                            <button class="btn btn-sm btn-outline-danger" onclick="deleter(<?php echo $testimonial['id']?>)" data-bs-toggle="modal" data-bs-target="#descriptionBloc1">Delete</button>
                        </span>      

                    </li>
                <?php  }?>
                </ul>
            </div>
        </div>
    </div>
</section>
<script>  
 function deleter(id){
    $('#btnDeleteContainer').html("<a href='components/parts/modules/treatement/_manage_testimonial.php?id="+id+"&action=delete' class='btn btn-danger'>Confirm</a>")
 }
 function show(content, by, at,id){
     $('#saidBy').html(by)
    $('#showContent').html(content)
    $('#saidAt').html(at)
   // $('#showBtnContainers').html("<a href='components/parts/modules/treatement/_manage_testimonial.php?id="+id+"&action=aprouve' class='btn btn-outline-primary btn-sm'>aprouve</a>  <button class='btn btn-sm btn-outline-danger' onclick='deleter('"+id+"') data-bs-toggle='modal' data-bs-target='#descriptionBloc1' data-bs-dismiss='modal'>Delete</button> <button class='btn btn-sm btn-secondary ' data-bs-dismiss='modal'>Cancel</button>")
    $('#showBtnContainers').html(" <button class='btn btn-sm btn-secondary ' data-bs-dismiss='modal'>Cancel</button>")

 }
</script>
<section>
    <!-- Modal pour Confirmer la suppression -->
    <div class="modal fade text-dark "   id="descriptionBloc1" data-backdrop="static" data-keyboard="false" tabindex="-1"  aria-hidden="true">
<div class="modal-dialog  modal-dialog-centered modal  modal-dialog-scrollable">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title"> 
            Are You sure you want to <span class="text-danger">delete</span> this item ?
        </h5>
    </div>
    <div class="modal-body">
        <div class="d-flex justify-content-between">
            <button class="btn btn-secondary " data-bs-dismiss='modal'>Cancel</button>
            <span id="btnDeleteContainer"></span>
            
        </div>
    </div>
    </div>
</div>
</div>

<!-- Modal pour Afficher le contenu du Testimonial-->
<div class="modal fade text-dark "   id="Modalaffichage" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
<div class="modal-dialog  modal-dialog-centered modal  modal-dialog-scrollable">
    <div class="modal-content">
    <div class="modal-body">
        <div class="d-flex justify-content-center">

            <div>
                <div class="d-flex justify-content-center align-items-end">
                    <img src="../assets/bilder/unknown.png" alt=""  style="height: 50px; width:auto">
                </div>
                <h6 class="text-center" id='saidBy'></h6>
            </div>
        </div>
        <div>
            <span>"
                <span id="showContent">

                </span>
            "
            </span>
        </div>
        <div class="mt-4">
            <span class="text-secondary" style="font-size:13px" id="saidAt"></span>
        </div>
    </div>
    <div class=" modal-footer" id="showBtnContainers">
        <button class="btn btn-sm btn-secondary " data-bs-dismiss='modal'>Cancel</button>
    </div>
    </div>
</div>
</div>
</section>