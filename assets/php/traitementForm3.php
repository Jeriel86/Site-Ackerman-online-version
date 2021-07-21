<?php 

if (isset($_POST) && !empty($_POST)) { //si la variable $_POST existe et n'est pas vide (ca permet de s'assurer que le formulaire a bien été envoyé et recu par le serveur avant de faire tout calculs)
    
    extract($_POST);  //extraction de la variable $_POST ( ca créé des variables de meme nom que le nom des champs du formulaire (l'atribut 'name') et ca leur affecteur la valeur des ces champs ! c'est chouette non ! :-) c'est automatique ! )
                      //de plus ca "echappe"(blocue certaines intrusions de codes que l'utilisateur pourrait faire (par exemple envoyer du javascript/PHP sur le serveur))  
  
    //on écrit les tableaux qui seront envoyés à l'entreprise (tu peut modifier leur design hein , comme en HTML tu viens modifier ici):
     $table1 = "    <center> 
                        <table border='1'>
                            <tr>
                                <td><b>Name and VonName :</b></td>
                                <td> ".$name."</td>
                            </tr>
                            <tr>
                                <td><b>StraBe :</b></td>
                                <td> ".$straBe."</td>
                            </tr>                            <tr>
                                <td><b>HausNummer : :</b></td>
                                <td> ".$HausNummer."</td>
                            </tr>
                            <tr>
                                <td><b>PLZ :</b></td>
                                <td> ".$PLZ."</td>
                            </tr>
                            <tr>
                                <td><b>ORT :</b></td>
                                <td> ".$ORT."</td>
                            </tr>
                            <tr>
                                <td><b>Email :</b></td>
                                <td> <a href='mailto:".$mail."'>".$mail."</a></td>
                            </tr>
                            <tr>
                                <td><b>Telephone :</b></td>
                                <td> <a href='mailtotel:".$phone."'>".$phone."</a></td>
                            </tr>
                            <tr>
                                <td><b>Getburtsdatum :</b></td>
                                <td> ".$getburtsdatum."</td>
                            </tr>
                        </table>
                    </center>
                    ";
            //le deuxieme tableau, qui contient la liste des utilisateurs à ajouter    
        if(isset($Leistungen) && !empty($Leistungen)){
            $formatedLeistungen = "";
            foreach ($Leistungen as $option) {
                $formatedLeistungen .= $option."; ";
            }
        }
    $table2 = "<center> 
    <table border='1'>
        ";
        if(isset($Berufstatus) && !empty($Berufstatus)){
         $table2.=   "
        <tr>
            <td><b>Derzeitiger Berufstatus<sup> </sup></b></td>
            <td>".$Berufstatus."</td>
        </tr>
        "; }
        if(isset($Famillienstand) && !empty($Famillienstand)){
        $table2.=    "
        <tr>
            <td><b>Famillienstand : <sup> </sup></b></td>
            <td>".$Famillienstand."</td>
        </tr>
        "; }
        if(isset($versichert) && !empty($versichert)){
        $table2.=    "
        <tr>
            <td><b>Wie sind Sie derzeit versichert ?<sup> </sup></b></td>
            <td>".$versichert."</td>
        </tr>
        "; }
        if(isset($Beihilfeland) && !empty($Beihilfeland)){
        $table2.="
        <tr>
            <td><b>Beihilfeland : <sup></sup></b></td>
            <td>".$Beihilfeland."</td>
        </tr>
        "; }
        if(isset($Anzahl_der_kind) && !empty($Anzahl_der_kind)){
        $table2.="
        <tr>
            <td><b>Anzahl der kinder : <sup></sup></b></td>
            <td>".$Anzahl_der_kind."</td>
        </tr>
        "; }
        if(isset($Leistungen) && !empty($Leistungen)){
        $table2.=    "
        <tr>
            <td><b>Wunschen Sie sich zusatzliche Leistungen ?<sup> </sup></b></td>
            <td>".$formatedLeistungen."</td>
        </tr>
        "; }
        if(isset($Krankenhaus) && !empty($Krankenhaus)){
        $table2.="
        <tr>
            <td><b>Wie mochte Sie im Krankenhaus untergebracht werden ?<sup> </sup></b></td>
            <td>".$Krankenhaus."</td>
        </tr>
        "; } 
     
            //on ferme le tablau
            $table2.= "    </table>
            </center>";
        if(isset($Famillienstand) && !empty($Famillienstand)){
            if ($Famillienstand == "Verheiratet") {
                $table3 = "    <center> 
                        <table border='1'>
                            <tr>
                                <td><b>Name and VonName :</b></td>
                                <td> ".$partnername."</td>
                            </tr>
                            <tr>
                                <td><b>StraBe :</b></td>
                                <td> ".$partnerstraBe."</td>
                            </tr>
                            <tr>
                                <td><b> HausNummer :</b></td>
                                <td> ".$partnerHausNummer."</td>
                            </tr>
                            <tr>
                                <td><b>Email :</b></td>
                                <td> <a href='mailto:".$partnermail."'>".$partnermail."</a></td>
                            </tr>
                            <tr>
                                <td><b>Telephone :</b></td>
                                <td> <a href='mailtotel:".$partnerphone."'>".$partnerphone."</a></td>
                            </tr>
                            <tr>
                                <td><b>Getburtsdatum :</b></td>
                                <td> ".$partnergetburtsdatum."</td>
                            </tr>
                            <tr>
                                <td><b>PartnerField :</b></td>
                                <td> ".$partnerfield."</td>
                            </tr>
                        </table>
                    </center>
                    ";
            }
            ; }

    // on définit l'E-Mail de l'entreprise
    $enterpriseMail = "hermann18pavel@gmail.com"; //jai mis ca juste pour les testes, à la fin il faut remplacer par : " info@ackermann.vkb.de "
    // on définit l'E-Mail à partir de laquelle les infos seront envoyées
    $senderMail = "hermann18pavel@gmail.com"; // j'ai mis ca juste pour les testes; il faut remplacer par l'EMail que leur hébergeur leur a fourni, ou à defaut, tu mets toujours l'EMAIL de l'entreprise 
    
    // *********** On prépare les paramettres de la fonction d'envois d'email *****************
    $to = $enterpriseMail; //qui va recevoir le mail ? hop on met ca dans la variable $to 
    $subject ="New mail, sent from the home page"; // de quoi parle l'email envoyé? hop on met ca dans $subject
   
    //le contenu de l'email 
    //tu peut faire la mise en forme comme tu veux hein, mais en suivant la meme logique  de concatenation successive ci.
    $message = "<center><h2> hey ! a new user has submited the form ! here are his informations </h2></center> <br>"; //on met un titre
    $message .= "<br> <caption> <center>INFORMATIONS FILLEDS IN THE FORM </center> </caption>"; //le titre su premier tableau
    $message .= $table1; // on insere alors le tableau qu'on a défini en haut là
    $message .= "<br> <caption> <center>USER CHOICES </center> </caption>"; //le titre su premier tableau
    $message .= $table2; // on insere alors le tableau qu'on a défini en haut là
    if(isset($Famillienstand) && !empty($Famillienstand && $Famillienstand == "Verheiratet")){
        $message .= "<br> <caption> <center>PARTNER'S INFORMATIONS </center> </caption>"; //le titre su premier tableau
        $message .= $table3; // on insere alors le tableau qu'on a défini en haut là
    }
    //définition de l'entête du méssage qui sera trasmit entre les serveurs 
    $header ="From:".$senderMail."\r\n";
    $header .="Cc:".$senderMail."\r\n";
    $header .="MIME-Version: 1.0\r\n";
    $header .="Content-type: text/html\r\n";
    //envoit du mail proprement dit
    $retVal = mail($to, $subject, $message, $header); //on envoit le mail et on stoque la valeur de retour dans la variable $retval

    if($retVal == true){ // si l'envoit a réussi
        $messageFlash = "Succes, your message have been sent ! you will be redirected to the home page soon..."; //on définit le message d'alerte
        echo $messageFlash; //on affiche le message sur cette page
        
        //on redirige l'utilisateur vers une autre page (ici c'est "index.php" //la page d'acceuil )
        //et trasmet le méssage d'ereeur pour pouvoir l'afficher si nécéssaire 
        header('location: ../Form4.php?messageflash="'.$messageFlash.'"');

    }else{ //si l'envoit a échoué 
        $messageFlash = "We have encountered a problem while sending the mail."; //on définit le message d'alerte
        echo $messageFlash; //on affiche le message sur cette page
        
        //on redirige l'utilisateur vers une autre page (ici c'est "form.html" )
        //et trasmet le méssage d'ereeur pour pouvoir l'afficher si nécéssaire pour cela, décommente la ligne d'ne bas ci
        // header('location: ../form.html?messageflash="'.$messageFlash.'"');
    }
    
    // présent juste pour les testes; au péloiement il va faloir l'enlever et le recopier plus haut; 
    $posted = serialize($_POST);
    header('refresh:10;url=../WünscheundZiele.php?lastForm='.$posted.'');
    echo'<br><br><br><br> <marquee direction="up"><center><b><H1>vous  allez etre redirrigé dans 15 secondes...</H1></b></center></marquee><br><br><br>';
    echo $message; //on affiche les tableauc la (il faut supprimer la ligne ci apres hein, c'est juste pour l'exemple)
}