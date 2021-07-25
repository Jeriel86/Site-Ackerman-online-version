<?php
session_start();
if (isset($_SESSION['auth']) && !empty($_SESSION['auth']) && $_SESSION['auth'] != NULL ){
    header("location: ..");
}


// si un formumaire est sousmis :
    // s'il s'agissait du form de login  
if (isset($_POST))
    // On se connecte à la base de donnée.
    try {
        include('../../traitements/secure/DataBaseCredentials.php'); //vu qu'on y accede depuis l'emplacement cette page
        $db = new PDO('mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8', $db_user , $db_pwd);
    } catch (Exception $e) {
        die("Erreur : ".$e->getMessage());
    }
    if( isset($_POST['Login']) ){
        extract($_POST);
        //on fait les test en base de données
        // ...

        $hashed_password = $password; // ici on va hasher
        $req = $db->prepare("SELECT * FROM superusers where password = ? and mail = ? ");
        $req ->execute([
            $hashed_password,
            $mail,
        ]);
        $user = $req->fetch();
        if($user){
            $_SESSION['auth'] = $user;
            header('location: ..');
        }else{
            $message_error = "INVALIDS CREDENTIALS : either your mail or your password is incorrect .";
        }
    }
    elseif (isset($_POST['Register'])) {
        extract($_POST);
        $req = $db->prepare('INSERT INTO superusers (name, surname, mail, password, account_validated, validation_token) VALUES(?, ?, ?, ?, ?, ?)');
        $req ->execute([
            $name,
            $surname,
            $mail,
            $password,
            1,
            "dfkdfvdfFFRJZhjDjdsAPd65DSDkqss5"
        ]);
        //on envois un mail à beamteversimpsfcfcdfcd pour qu'il confirme qyue ce superUser est reconnu,
         // puis un mail sera envoyé à l'utilsateur pour lui dire que son compte à été confirmé et là il sera invité à se connecter pour travailler
            
         $message_success = "REGISTER SUCCESSFULL: an email has been sent to the main admin to confirm that y're recognised. y'll soon recive a mail to confirm y've been recognised";
    }

?>
<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/logo/favicon.png" type="image/x-icon">
  <title>Authentification - </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class=" d-flex justify-content-center align-middle 100vh bg-light" style="min-height: 100vh;">
        <div class="col-10 col-md-4  m-auto" style="min-height: 100px; ">
            <small>
            <div class="text-success text-sm" style="font-size: 12px">
                <?php if(isset($message_success)){echo  $message_success  ;} ?>
            </div>
            <div class="text-danger text-sm" style="font-size: 12px">
                <?php if(isset($message_error)){echo  $message_error  ;} ?>
            </div>
            </small>
            <form action="" method="post" id="loginFrom" class="<?php if(isset($_GET['register'])){echo 'd-none';} ?>" >
                <div class="d-flex justify-content-between text-primary">
                    <h2> Login  </h2><small class="align-bottom mt-3">'asuming that y're a recognised admin'</small>
                </div>
                <div class=" p-2" style=" background-color: #bcbfc0">
                    <input class="form-control mb-1" type="email" placeholder="Email" name="mail" id="userMail" value="<?php if(isset($_POST['mail'])){echo $_POST['mail'];  } ?>">
                    <input class="form-control " type="password" placeholder="Paswword" name="password" id="userPwd" required>
                    <input class="form-control mt-3 btn btn-sm btn-primary" type="submit" value="login" name="Login" required>
                    <span class="mt-1"><small>Not registered yet, <a href="?register">try to get an account here</a></small></span>
                </div> 
            </form>
            <form action="" method="post" id="loginFrom" class="<?php if(!isset($_GET['register'])){echo 'd-none';} ?>" >
                <div class="d-flex justify-content-between text-primary">
                    <h2> Register  </h2><small class="align-bottom mt-3">'asuming that y're a recognised admin'</small>
                </div>
                <div class=" p-2" style=" background-color: #bcbfc0">
                    <div class="row">
                        <div class="col-md-6">
                            <input class="form-control mb-1" type="text" placeholder="Name" name="name" id="userName" required>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control mb-1" type="text" placeholder="surname" name="surname" id="userSurname" required>
                        </div>
                    </div>
                    <input class="form-control mb-1" type="email" placeholder="Email" name="mail" id="userMail" required>
                    <input class="form-control mb-1" type="password" placeholder="Paswword" name="password" id="userPwd" required>
                    <input class="form-control " type="password" placeholder="Confirm paswword" name="password_confirm" id="userPwd2" required>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="checkBox" id="confirmAuth" required> <label for="confirmAuth"> <small>i confirm that i'm a admin from beamtenversicherung-vkb</small></label>
                        </div>
                    </div>
                    <input class="form-control mt-3 btn btn-sm btn-primary" type="submit" value="register" name="Register">
                    <span class="mt-1"><small>Already have an acocunt ? <a href=".">just sign in here</a></small></span>
                </div> 
            </form>
        </div>

    </div>

</body>
</html>
