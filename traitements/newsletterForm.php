<?php 
session_start();
if (isset($_POST) && !empty($_POST)) { //si la variable $_POST existe et n'est pas vide (ca permet de s'assurer que le formulaire a bien été envoyé et recu par le serveur avant de faire tout calculs)
    
    extract($_POST);  //extraction de la variable $_POST ( ca créé des variables de meme nom que le nom des champs du formulaire (l'atribut 'name') et ca leur affecteur la valeur des ces champs ! c'est chouette non ! :-) c'est automatique ! )
                      //de plus ca "echappe"(blocue certaines intrusions de codes que l'utilisateur pourrait faire (par exemple envoyer du javascript/PHP sur le serveur))  
  
   // on définit l'E-Mail de l'entreprise
    $enterpriseMail = "info@ackermann.vkb.de"; //jai mis ca juste pour les testes, à la fin il faut remplacer par : " info@ackermann.vkb.de "
    // on définit l'E-Mail à partir de laquelle les infos seront envoyées
    $senderMail = "info@ackermann.vkb.de"; // j'ai mis ca juste pour les testes; il faut remplacer par l'EMail que leur hébergeur leur a fourni, ou à defaut, tu mets toujours l'EMAIL de l'entreprise
    
    // *********** On prépare les paramettres de la fonction d'envois d'email *****************
    $to = $enterpriseMail; //qui va recevoir le mail ? hop on met ca dans la variable $to 
    $subject ="Hallo ! Ein neuer Benutzer möchte den Newsletter abonnieren!"; // de quoi parle l'email envoyé? hop on met ca dans $subject
   
    //le contenu de l'email 
    //tu peut faire la mise en forme comme tu veux hein, mais en suivant la meme logique  de concatenation successive ci.
    $message = "<center><h2>Ein Besucher hat seine E-Mail gesendet, um Ihren Newsletter zu abonnieren</h2></center> <br>"; //on met un titre
    $message .= "<p> Hier ist seine E-Mail-Adresse: <a href='mailto:".$mail."'>".$mail." </a> <br> Kontaktieren Sie ihn, um sein Abonnement zu bestätigen </p> "; //le titre su premier tableau

    //définition de l'entête du méssage qui sera trasmit entre les serveurs 
    $header ="From:".$senderMail."\r\n";
    $header .="Cc:".$senderMail."\r\n";
    $header .="MIME-Version: 1.0\r\n";
    $header .="Content-type: text/html\r\n";
    //envoit du mail proprement dit
    $retVal = mail($to, $subject, $message, $header); //on envoit le mail et on stoque la valeur de retour dans la variable $retval
    $_SESSION['submitedData'] = $_POST;
    if($retVal == true){ // si l'envoit a réussi
        include ("functions.php");
        save_mail_sent(Null, $to, $subject, $message,  "News Letter");
        $messageFlash['type'] = "success";
        $messageFlash['message'] = "Success, your message have been sent ! you will be redirected to the home page soon..."; //on définit le message d'alerte
        $_SESSION['messageFlash'] = $messageFlash;
        header('location: ../index.php');

    }else{ //si l'envoit a échoué 
        $messageFlash['message'] = "Beim Senden der E-Mail ist ein Problem aufgetreten."; //on définit le message d'alerte
        $messageFlash['type'] = "danger";
        $_SESSION['messageFlash'] = $messageFlash;
        header('location: ../index.php#footer');
        
    }
}