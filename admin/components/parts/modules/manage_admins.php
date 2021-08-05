<?php  

    $req = $db->prepare("SELECT * FROM superusers WHERE account_validated = 1 ");
    $req ->execute( );
    $superusers = $req->fetchAll();
?>

<div>
    <H2 class="mt-3 text-primary">Manage Admins</H2>
    <hr>
    <div class="row mb-4">
    <p class="h6">
        Here you have the list of who have access to the administration side .  <small> (Your own account will not be displayed)</small>
    </p>
    <Table>
        <thead>
            <tr>
                <th>Date of Subscription</th>
                <th>E-Mail</th>
                <th>Full Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($superusers as $user) { 
                if($user['mail'] != $_SESSION['auth']['mail']){
                ?>
            <tr>
                    <td> <?php echo $user['joined_at'] ?> </td>
                    <td> <a href="mailto:<?php echo $user['mail'] ?>"><?php echo $user['mail'] ?></a> </td>
                    <td> <span ><?php echo $user['surname'] ?> <?php echo $user['name'] ?></span> </td>
                    <td> <a href="" class ='btn btn-danger'>delete admin</a>
                    </td>
            </tr>
            <?php } }  ?>
        </tbody>
    </Table>
    </div>
</div>