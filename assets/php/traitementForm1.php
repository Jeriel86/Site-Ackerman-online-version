<?php 

if (isset($_POST) && !empty($_POST)) { //si la variable $_POST existe et n'est pas vide (ca permet de s'assurer que le formulaire a bien été envoyé et recu par le serveur avant de faire tout calculs)
    
    extract($_POST);  //extraction de la variable $_POST ( ca créé des variables de meme nom que le nom des champs du formulaire (l'atribut 'name') et ca leur affecteur la valeur des ces champs ! c'est chouette non ! :-) c'est automatique ! )
                      //de plus ca "echappe"(blocue certaines intrusions de codes que l'utilisateur pourrait faire (par exemple envoyer du javascript/PHP sur le serveur))  
    //on a confiance à l'utilisateur, n'empche, on fait quelques testes
    if(empty($message)){ //si le champ "méssage" est vide
        //on définit la variable mésaage comme suit, pour dire que l'utilisateur n'a pas laissé de méssage
        $message = "<i>no message leaved</i>" ;
    }
    if(!isset($game) || $game!="on") {$game = "No";} //si l'utilisateur n'a pas coché la case où on l'ivite a particuper au jeu, on met "No" dans la variable correspondante
    else{$game="Yes"; } //si il a coché, alors on met "Yes"
    if(!isset($consultation)) {$consultation = "<i>No consultation choosed</i>";} //si il n'a pas choisit quel type de consultation il veut, on met "No consultation choosed"
    // j'ai mis ça car je  ne savais pas si l'utilisateur etait aubligé de choisir une consultation.
    //s'il est aubligé, alors c'est simple, vas sur chaque input type radio dont le name est "consultation" et ajoute l'attribut required                                        
    
    //on écrit les tableaux qui seront envoyés à l'entreprise (tu peut modifier leur design hein , comme en HTML tu viens modifier ici):
     $table1 = "    <center> 
                        <table border='1'>
                            <tr>
                                <td><b>Name and VonName :</b></td>
                                <td> ".$name."</td>
                            </tr>
                            <tr>
                                <td><b>Getburtsdatum :</b></td>
                                <td> ".$getburtsdatum."</td>
                            </tr>
                            <tr>
                                <td><b>StraBe :</b></td>
                                <td> ".$straBe."</td>
                            </tr>
                            <tr>
                                <td><b>HausNr :</b></td>
                                <td> ".$hausNr."</td>
                            </tr>
                            <tr>
                                <td><b>PLZ :</b></td>
                                <td> ".$PLZ."</td>
                            </tr>
                            <tr>
                                <td><b>ORT :</b></td>
                                <td> ".$ort."</td>
                            </tr>
                            <tr>
                                <td><b>Telephone :</b></td>
                                <td> <a href='mailtotel:".$phone."'>".$phone."</a></td>
                            </tr>
                            <tr>
                                <td><b>Email :</b></td>
                                <td> <a href='mailto:".$mail."'>".$mail."</a></td>
                            </tr>
                            <tr>
                                <td><b>Consultation :</b></td>
                                <td> ".$consultation."</td>
                            </tr>
                            <tr>
                                <td><b>whant to participate in the game ? :</b></td>
                                <td> ".$game."</td>
                            </tr>
                            <tr>
                                <td><b>Message leaved :</b></td>
                                <td> ". $message ."</td>
                            </tr>
                        </table>
                    </center>
                    ";
    //le deuxieme tableau, qui contient la liste des utilisateurs à ajouter     
    $table2 = "<center> 
                    <table border='1'>
                        <tr>
                            <td><b>N<sup><i>o</i> </sup></b></td>
                            <td><b>Name and VonName </b></td>
                            <td><b>Getburtsdatum </b></td>
                        </tr>";
            //on ajoute le champ qui est la par défaut quand la page est chargée            
            $table2.= " <tr>                        
                            <td> 1 </td>
                            <td> ".$nameAdd."</td>
                            <td> ".$getburtsdatumAdd."</td>
                        </tr>";
            //on ajoute les blocs qu'on a crée avec javascript là. tu vois, l'importance des 'name' différents et unniques
            for($i=1; $i<=((count($_POST)-13)/2) ; $i++){
                //le petit calcul que t'as vu la c'est pour déterminer exactement le nombre de bloc qu'on a ajouté
                // 13 c'est le nmbre de champs par défaut du formulaire, don si tu supprimes ou ajoute un champ en dur labas, penses à venir modifier ici
                $variName = "nameAdd".$i; //on génere le nom des champs (comme en JS)
                $variGetburtsdatum = "getburtsdatumAdd".$i; //pareil ici
            //on ajoute tout ca dans le tableau        
            $table2.= " <tr>
                            <td> ". (1+$i) ." </td>
                            <td> ".$_POST[$variName]."</td>
                            <td> ".$_POST[$variGetburtsdatum]."</td>
                        </tr>";
            }
    //on ferme le tablau
    $table2.= "    </table>
            </center>";

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
    $message .= "<br> <caption> <center> USER(S) ADDED FOR ENSURANCE </center> </caption>"; //titre du second tableau
    $message .= $table2; //meme chose, on insere le tableau2 
    
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
        header('location: ../index.php?messageflash="'.$messageFlash.'"');

    }else{ //si l'envoit a échoué 
        $messageFlash = "We have encountered a problem while sending the mail."; //on définit le message d'alerte
        echo $messageFlash; //on affiche le message sur cette page
        
        //on redirige l'utilisateur vers une autre page (ici c'est "form.html" )
        //et trasmet le méssage d'ereeur pour pouvoir l'afficher si nécéssaire pour cela, décommente la ligne d'ne bas ci
        // header('location: ../form.html?messageflash="'.$messageFlash.'"');
    }
    header('refresh:15;url=../Index.php');
    echo'<br><br><br><br> <marquee direction="up"><center><b><H1>vous  allez etre redirrigé dans 15 secondes...</H1></b></center></marquee><br><br><br>';
    echo $message; //on affiche les tableauc la (il faut supprimer la ligne ci apres hein, c'est juste pour l'exemple)

}