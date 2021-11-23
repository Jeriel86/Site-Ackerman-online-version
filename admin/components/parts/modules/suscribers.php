<?php  

    $req = $db->prepare("SELECT id, source as email, sent_at as  date FROM mails_sent WHERE source_form = ? AND source IS NOT NULL ");
    $req ->execute(["News Letter" ] );
    $Suscribers = $req->fetchAll();
?>

<div>
    <H2 class="mt-3 text-primary">Suscribers</H2>
    <hr>
    <div class="row mb-4">
    <p class="h6">
        Here you have the list of who suscribed to the NewsLetter 
    </p>
    <Table>
        <thead>
            <tr>
                <th>Date of Subscription</th>
                <th>E-Mail</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Suscribers as $suscriber) {  ?>
            <tr>
                    <td> <?php echo $suscriber['date'] ?> </td>
                    <td> <a href="mailto:<?php echo $suscriber['email'] ?>"><?php echo $suscriber['email'] ?></a> </td>
                    <td> 
                    <button class="btn btn-sm btn-outline-danger" onclick="deleter(<?php echo $suscriber['id']?>)" data-bs-toggle="modal" data-bs-target="#descriptionBloc1">Delete</button>
                    </td>
            </tr>
            <?php  }  ?>
        </tbody>
    </Table>
    <!-- Modal pour Confirmer la suppression -->
<script>  
 function deleter(id){
    $('#btnDeleteContainer').html("<a href='components/parts/modules/treatement/_manage_users.php?id="+id+"&action=delete&cible=suscribers' class='btn btn-danger'>Confirm</a>")
 }
</script>  

<div class="modal fade text-dark "   id="descriptionBloc1" data-backdrop="static" data-keyboard="false" tabindex="-1"  aria-hidden="true">
<div class="modal-dialog  modal-dialog-centered modal  modal-dialog-scrollable">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title"> 
            Are You sure you want to <span class="text-danger">delete</span> this user ?
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
    </div>
</div>