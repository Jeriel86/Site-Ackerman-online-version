<?php
session_start();
/*délcaration de quelques constantes : */
$ENTERPRISE_MAIL = "hermann18pavel@gmail.com"; //l'email de l'entreprise (j'ai mise la miene pour les tests)


include "functions.php";
//si il est deja connecté et qu'il tente de se connecter ou s'inscrire le redirige à la page d'acceuil de l'administration
if (isset($_SESSION['auth']) && !empty($_SESSION['auth']) && $_SESSION['auth'] != NULL ){
    if(!isset($_GET['edit']) && !isset($_GET['display']) ) {
        header("location: ..");
    }
}
if(isset($_GET['edit']) || isset($_GET['display']) && (!isset($_SESSION['auth']) || empty($_SESSION['auth']) || $_SESSION['auth'] == NULL )) {
    header("location: .");
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
        if (!empty($mail && !empty($password))){
            $req = $db->prepare("SELECT * FROM superusers where mail = ? AND account_validated = 1  ");
            $req ->execute([ $mail, ]);
            $user = $req->fetch();
            if($user){
                if(password_verify($password, $user['password'])){
                    $_SESSION['auth'] = $user;
                    header('location: ..');
                }else{
                    $message_error = "INVALIDS CREDENTIALS : your password is incorrect .";
                }
            }else{
                $message_error = "INVALIDS CREDENTIALS : either your mail is incorrect, or Your account is not validated Yet, please contact the admin for more informations .";
            }
        }else{
            $message_error = "EMPTY FIELDS: some of your fields are empty, please fill them and try again";
        }

    }
    elseif (isset($_POST['Register'])) {

        extract($_POST);
        if (!empty($name) && !empty($surname) && !empty($mail) && !empty($password) && !empty($password_confirm)){
            if (strlen($password)>=8 && strlen($password_confirm)>=8){
                if($password==$password_confirm){
                    $req = $db->prepare("SELECT * FROM superusers where mail = ? AND account_validated = 1  ");
                    $req ->execute([ $mail, ]);
                    $user = $req->fetch();
                    if(!$user){
                        $token = str_random(60);
                        $req = $db->prepare('INSERT INTO superusers (name, surname, mail, password, validation_token) VALUES(?, ?, ?, ?, ?)');
                        $req ->execute([
                            $name,
                            $surname,
                            $mail,
                            password_hash($password, PASSWORD_BCRYPT),
                            $token
                        ]);
                        $user_id = $db->lastInsertId();
                        //on envois un mail à beamteversimpsfcfcdfcd pour qu'il confirme qyue ce superUser est reconnu,
                        $mailMessage =  "in order to confirm that you recognise the user named $surname $name (with mail : $mail) as a super user, just click on the folowing link:  
                        \n\n http://beamtenversicherung-vkb.de/admin/auth/confirm.php?id=$user_id&token=$token";
                        $retVal = mail(
                            $ENTERPRISE_MAIL,
                            'Confirmation of a new superAdmin account',
                            $mailMessage
                        );
                        echo $mailMessage;
                        if ($retVal == true){
                            $message_success = "REGISTER SUCCESSFULL: an email has been sent to the main admin to confirm that y're recognised. y'll soon recive a mail to confirm y've been recognised";
                            // puis un mail sera envoyé à l'utilsateur pour lui dire que son compte à été confirmé et là il sera invité à se connecter pour travailler
                        }else{
                            $message_error = "<p> Beim Senden der E-Mail ist ein Problem aufgetreten. </p>";
                            //et on supprime l'entrée qui a échouée
                            // ISSUE :  ça marche pas trop faut revoir ca
                            $req = $db->prepare(" DELETE superusers WHERE id= ? ");
                            $req ->execute([ $user_id]);
                        }
                    }else{
                        $message_error = "ALREADY USED : This mail is already used.";
                    }
                }else{
                    $message_error = "PASSWORD ERROR: your passwords are not matching";
                }
            }else{
                $message_error = "PASSWORD ERROR: Your password should have at least 8 charaters";
            }

        }else{
            $message_error = "EMPTY FIELDS: some of your fields are empty, please fill them and try again";
        }  
    }
    elseif (isset($_POST['Edit'])){
        
        extract($_POST);
        if (!empty($name) && !empty($surname) && !empty($mail) && !empty($actual_password) && !empty($password) && !empty($password_confirm)){
            if (strlen($password)>=8 && strlen($password_confirm)>=8){
                if (password_verify($actual_password, $_SESSION['auth']['password'])) {
                    if($password==$password_confirm){
                        $db->prepare('UPDATE superusers SET name = ? , surname = ? , mail = ? , password = ?  WHERE id = ?')
                        ->execute([
                            $name,
                            $surname, 
                            $mail,
                            password_hash($password, PASSWORD_BCRYPT),
                            $_SESSION['auth']['id']
                        ]);
                        $messageFlash['message'] = "accout updated successfuly."; 
                        $messageFlash['type'] = "success";
                        $_SESSION['messageFlash'] = $messageFlash;
                        header("location: ?display");
                    }else{
                        $message_error = "PASSWORD ERROR: your passwords are not matching";
                    }
                }else{
                    $message_error = "PASSWORD ERROR: the 'actual pasword' you entered is wrong";
                }
            }else{
                $message_error = "PASSWORD ERROR: Your password should have at least 8 charaters";
            }

        }else{
            $message_error = "EMPTY FIELDS: some of your fields are empty, please fill them and try again";
        }  
    }
    elseif (isset($_POST['resetPassword'])){
        
        extract($_POST);
        if (!empty($mail)){
            $req = $db->prepare("SELECT * FROM superusers where mail = ? AND account_validated = 1  ");
            $req ->execute([ $mail, ]);
            $user = $req->fetch();
            if ($user){
                // on envoi le mail de récupération de mot de passe
                $newPass = str_random(10);
                $db->prepare('UPDATE superusers SET password = ?  WHERE id = ?')
                ->execute([
                    password_hash($newPass, PASSWORD_BCRYPT),
                    $user['id']
                ]);

                $mailMessage =  "While trying to reset your password, a default passsword  have been generated to permite you to log in.
                                <br> Your New passWord : <strong> $newPass </strong>  
                                <br> Note that you can change it in your profile";
                $retVal = mail(
                    $mail,
                    'Reseting Your Password to default !',
                    $mailMessage
                );
                if ($retVal == true){
                    $message_success = "REGISTER SUCCESSFULL: an email has been sent with your new password ! ";
                    // puis un mail sera envoyé à l'utilsateur pour lui dire que son compte à été confirmé et là il sera invité à se connecter pour travailler
                }else{
                    $message_error = "<p> Beim Senden der E-Mail ist ein Problem aufgetreten. </p>";
                }
            }else{
                $message_error = "Your mail is not in our data base; please contact an admin for more details.";
            }
        }else{
            $message_error = "EMPTY FIELDS: some of your fields are empty, please fill them and try again";
        }  
    }

?>
<?php ?>
<!DOCTYPE html> 
<html lang="en">
    <style>
        input{
            font-size: 20px !important;
        }
        input[type="submit"]{
            font-size: 12px !important;
        }
        button[type="submit"]{
            font-size: 12px !important;
        }
    </style>
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
    <div class=" d-flex justify-content-center align-middle 100vh" style="min-height: 100vh; background-color:#ededed">
        <div class="col-10 col-md-3  m-auto" style="min-height: 100px; ">

                <div class="d-flex justify-content-center text-secondary">
                    <div class="">
                        <div class="d-flex justify-content-center"> 
                            <div style="width:120px; height:120px" class=" bg-white border border-secondary rounded-circle">
                                <img src="../../assets/bilder/logo.png" class="w-100 h-100" alt="logo">
                            </div>
                        </div>
                        <h2 class="text-center">
                        <?php if(isset($_GET['register']) || isset($_GET['edit']) || isset($_GET['display']) || isset($_GET['resetPassword']))
                                {
                                    if( isset($_GET['resetPassword'])){ 
                                        echo "Reset Password";
                                    }
                                    if(isset($_GET['register'])){
                                        echo"Register";
                                    }
                                    if(isset($_GET['edit'])){
                                        echo "Edit Account";
                                    }
                                    if(isset($_GET['display'])){
                                        if(isset($_SESSION['auth'])){
                                            echo $_SESSION['auth']['surname']; echo " "; echo $_SESSION['auth']['name']; 
                                        }
                                    }
                                }else{
                                    echo 'Login';
                                }
                         ?>
                        </h2>
                    </div>
                </div>
                <div class=" mb-2"> 
                    <small>
                        <?php if(isset($message_success) && $message_success != ""){ ?>
                        <div class="text-success bg-white p-2 border-top border-left border-success text-sm" style="font-size: 12px">
                            <?php echo  $message_success ?>
                        </div>
                        <?php }
                        if(isset($message_error) && $message_error != ""){   ?>
                        <div class="text-danger bg-white p-2 border-top border-left border-danger text-sm" style="font-size: 12px">
                            <?php include "../../includes/pages/alert.php" ?>
                            <?php echo  $message_error ?>
                        </div>
                        <?php }?>
                    </small>
                </div>
                <form action="" method="post" id="loginFrom" class="" >
                    <?php if(isset($_GET['register']) || isset($_GET['edit']) || isset($_GET['display']) || isset($_GET['resetPassword'])){}else{  ?>
                        <div>
                            <div class=" p-3 bg-white border border-secondary">
                                <input class="form-control mb-1 p-1 border border-secondary" type="email" placeholder="Email" name="mail" id="userMail" value="<?php if(isset($_POST['mail'])){echo $_POST['mail'];  } ?>">
                                <input class="form-control mt-3 p-1 border border-secondary" type="password" placeholder="Paswword" name="password" id="userPwd" required>
                                <div class="mt-3 d-flex justify-content-end">
                                    <input type="hidden" name="Login">
                                    <button class="btn btn-sm btn-primary p-2 px-3"><i class="fas fa-sign-in-alt"></i> Sign In</button>
                                </div> 
                            </div> 
                            <div class="mt-3">
                                <ul class="text-primary">
                                    <li>
                                        <span class="mt-1 text-secondary"><small>Not registered yet, <a href="?register">try to get an account here</a></small></span> <br>
                                    </li>
                                    <li>
                                        <span class="mt-1 text-secondary"><small>You forgot your password ? <a href="?resetPassword" class="text-success">get a new one</a></small></span>
                                    </li>
                                </ul>  
                            </div>
                        </div>
                    <?php }?>
                    <?php if(isset($_GET['register'])){?>
                        <div class=" p-3 bg-white border border-secondary">
                            <div class="row">
                                <div class="col-md-6 mx-0 ">
                                    <input class="form-control mb-1 p-1 border border-secondary" type="text" placeholder="Name" name="name" id="userName"  value="<?php if(isset($_POST['name'])){echo $_POST['name'];  } ?>" required>
                                </div>
                                <div class="col-md-6 mx-0 ">
                                    <input class="form-control mb-1 p-1 border border-secondary" type="text" placeholder="surname" name="surname" id="userSurname"  value="<?php if(isset($_POST['surname'])){echo $_POST['surname'];  } ?>" required>
                                </div>
                            </div>
                            <input class="form-control mb-1 p-1 border border-secondary" type="email" placeholder="Email" name="mail" id="userMail" value="<?php if(isset($_POST['mail'])){echo $_POST['mail'];  } ?>" required>
                            <input class="form-control mb-1 p-1 border border-secondary" type="password" placeholder="Paswword" name="password" id="userPwd" required>
                            <input class="form-control mb-1 p-1 border border-secondary " type="password" placeholder="Confirm paswword" name="password_confirm" id="userPwd2" required>
                            <div class="d-flex text-secondary" >
                                 <label for="confirmAuth"> <input type="checkBox" id="confirmAuth" required> <small>i confirm that i'm a admin from beamtenversicherung-vkb</small></label>
                            </div>
                            <div class="mt-3 d-flex justify-content-end">
                                <button class="btn btn-sm btn-primary p-2 px-3" name="Register" type="submit"><i class="fas fa-sign-in-alt"></i> Register</button>
                            </div>
                        </div> 
                        <div class="mt-3">
                            <ul class="text-primary">
                                <li>
                                    <input type="hidden" name="Register">
                                    <span class="mt-1 text-secondary"><small>Already have an acocunt ? <a href=".">just sign in here</a></small></span>
                                </li>
                            </ul>  
                        </div>
                    <?php } ?>
                    <?php if(isset($_GET['edit'])){ ?>
                        <div class=" p-3 bg-white border border-secondary">
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control mb-1 p-1 border border-secondary " type="text" placeholder="Name" name="name" id="userName"  value="<?php if(isset($_POST['name'])){echo $_POST['name'];  }else{ echo $_SESSION['auth']['name']; } ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control mb-1 p-1 border border-secondary " type="text" placeholder="surname" name="surname" id="userSurname"  value="<?php if(isset($_POST['surname'])){echo $_POST['surname'];  }else{ echo $_SESSION['auth']['surname']; } ?>" required>
                                </div>
                            </div>
                            <input class="form-control mb-1 p-1 border border-secondary " type="email" placeholder="Email" name="mail" id="userMail" value="<?php if(isset($_POST['mail'])){echo $_POST['mail'];  }else{ echo $_SESSION['auth']['mail']; } ?>" required>
                            <input class="form-control mb-1 p-1 border border-secondary " type="password" placeholder="actual Paswword" name="actual_password" id="acutal_userPwd" required>
                            <input class="form-control mb-1 p-1 border border-secondary " type="password" placeholder="new Paswword" name="password" id="userPwd" required>
                            <input class="form-control mb-1 p-1 border border-secondary " type="password" placeholder="Confirm new paswword" name="password_confirm" id="userPwd2" required>
                            <div class="mt-3 d-flex justify-content-end">
                                <input class="" type="hidden" value="Save" name="Edit">
                                <button class="btn btn-sm btn-primary p-2 px-3"> <i class="fas fa-save"></i> Save</button>
                            </div>
                        </div> 
                        <div class="mt-3">
                            <ul class="text-primary">
                                <li>
                                    <span class="mt-1 text-secondary"><small> <a href="../">Back to Home</a></small></span>
                                </li>
                            </ul>  
                        </div>
                    <?php } ?>
                    <?php if( isset($_GET['resetPassword'])){ ?>
                        <div class="p-3 bg-white border border-secondary">
                            <p class="mb-0 text-secondary">
                                <small>Enter the your  email:</small>
                            </p>
                            <input class="form-control mb-1 p-1 border border-secondary" type="email" placeholder="Email" name="mail" id="userMail" value="<?php if(isset($_POST['mail'])){echo $_POST['mail'];  } ?>">
                            <div class="mt-3 d-flex justify-content-end">
                                <input class="" type="hidden" value="" name="resetPassword" required>
                                <button type="submit" class="btn btn-sm btn-primary p-2 px-3"><i class="fas fa-paper-plane"></i> Send Confirmation mail</button>
                            </div>
                        </div> 
                        <div class="mt-3">
                            <ul class="text-primary">
                                <li>
                                    <span class="mt-1 "><small> <a href="." class="text-primary">Go to Login</a></small></span>
                                </li>
                            </ul>  
                        </div>
                    <?php }?>
                </form>
            <?php if(isset($_GET['display'])){ ?>
            <div class="">
                <p class="text-center">
                    <?php  echo $_SESSION['auth']['mail']; ?>
                </p>
                <div class="p-4">
                    <div class="d-flex justify-content-between "> 
                            <a href="?edit" class="btn btn-primary"><small><i class="fas fa-edit"></i> Edit</small> </a>
                            <a href="../"  class="btn btn-primary"> <small><i class="fas fa-home"></i> Go Home</small></a>
                        </div>
                </div>
            </div>
            <?php }?>
        </div>

    </div>
    <?php include "../../includes/pages/clearMessageFlash.php" ?>

</body>
</html>
