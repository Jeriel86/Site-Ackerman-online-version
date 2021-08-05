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
                    <td> <a href="" class ='btn btn-danger'>delete suscriber</a>
                    </td>
            </tr>
            <?php  }  ?>
        </tbody>
    </Table>
    </div>
</div>