<?php 
session_start();
if (isset($_POST) && !empty($_POST)) { //si la variable $_POST existe et n'est pas vide (ca permet de s'assurer que le formulaire a bien été envoyé et recu par le serveur avant de faire tout calculs)
    
    extract($_POST);  //extraction de la variable $_POST ( ca créé des variables de meme nom que le nom des champs du formulaire (l'atribut 'name') et ca leur affecteur la valeur des ces champs ! c'est chouette non ! :-) c'est automatique ! )
                      //de plus ca "echappe"(blocue certaines intrusions de codes que l'utilisateur pourrait faire (par exemple envoyer du javascript/PHP sur le serveur))  
    //on écrit les tableaux qui seront envoyés à l'entreprise (tu peut modifier leur design hein , comme en HTML tu viens modifier ici):
    $table1 = "";
    if(isset($_POST['name'])){
        $table1 = "    <center> 
                        <table border='1'>

                            <tr>
                                <td><b>Name and Vorname :</b></td>
                                <td> ".$name."</td>
                            </tr>
                            <tr>
                                <td><b>Straße, Hausnummer :</b></td>
                                <td> ".$straBe."</td>
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
                                <td><b>Telefonnummer :</b></td>
                                <td> <a href='mailtotel:".$phone."'>".$phone."</a></td>
                            </tr>
                            <tr>
                                <td><b>Geburtsdatum :</b></td>
                                <td> ".$getburtsdatum."</td>
                            </tr>
                            <tr>
                                <td><b>Beratung :</b></td>
                                <td> ".$consultation."</td>
                            </tr>
                            <td><b> am Wettbewerb teilnehmen ? :</b></td>
                                <td> ".$wettbewerb."</td>
                            </tr>
                            <td><b> genehmigte Datenschutzrichtlinien ? :</b></td>
                                <td> ".$datenschutz."</td>
                            </tr>
                            <td><b> Newsletter erhalten : </b></td>
                                <td> ".$newsletter."</td>
                            </tr>
                            <tr>
                                <td><b> Kommentare :</b></td>
                                <td> ". $message ."</td>
                            </tr>
                        </table>

                    </center>
                    ";
     
    }
        $table2 = "    <center> 
                        <table border='1'>
                            <tr>
                                <td><b>Labels</b></td>
                                <td><b>Anzahl von Sternen</b></td>
                            </tr>
                            <tr>
                                <td><b>Dienstunfahigkeitsasicherung :</b></td>
                                <td> <center>".$Dienstunfahigkeitsasicherung."</center></td>
                            </tr>";
                            if(isset($private_Krankenversiherung)){
                                $table2 .=" <tr>
                                                <td><b>private Krankenversicherung :</b></td>
                                                <td><center> ".$private_Krankenversiherung."</center></td>
                                            </tr>";
                            }
                            if(isset($Krankenzusatzversicherung)){
                                $table2 .=" <td><b>Krankenzusatzversicherung  :</b></td>
                                                <td><center> ".$Krankenzusatzversicherung."</center></td>
                                            </tr>";
                            }
        $table2 .=          "<tr>
                                <td><b>Lebensqualitat im Rushestand :</b></td>
                                <td> <center>".$Lebensqualitat_im_Rushestand."</center></td>
                            </tr>
                            <tr>
                                <td><b>Absicherung der Familie :</b></td>
                                <td> <center>".$Absicherung_der_Familie."</center></td>
                            </tr>
                            <tr>
                                <td><b>Steuer Sparen und Vorsrge furs Alter  :</b></td>
                                <td><center> ".$Steuer_Sparen."</center></td>
                            </tr>
                            <tr>
                                <td><b>Sparen und Rendite :</b></td>
                                <td><center> ".$Sparen."</center></td>
                            </tr>
                            <tr>
                                <td><b>Rechtsschutz :</b></td>
                                <td><center>".$Rechtsschutz."</center></td>
                            </tr>
                            <tr>
                                <td><b>Immobilienwunsch  :</b></td>
                                <td><center>".$Immobilienwunsch."</center></td>
                            </tr>
                            <tr>
                                <td><b>Sonstiges :</b></td>
                                <td> ".$sonstiges."</td>
                            </tr>
                        </table>
                    </center>
                ";
                $table3 = "<center> 
                                <table border='1'>
                                    <tr>
                                        <td><b>N<sup><i>o</i> </sup></b></td>
                                        <td><b>Name and VonName </b></td>
                                        <td><b>Getburtsdatum </b></td>
                                    </tr>";

                        //on ajoute les blocs qu'on a crée avec javascript là. tu vois, l'importance des 'name' différents et unniques
                        for($i=0; $i<= count($nameAdd)-1 ; $i++){
                            //le petit calcul que t'as vu la c'est pour déterminer exactement le nombre de bloc qu'on a ajouté
                            // 13 c'est le nmbre de champs par défaut du formulaire, don si tu supprimes ou ajoute un champ en dur labas, penses à venir modifier ici
                            $variName = "nameAdd".$i; //on génere le nom des champs (comme en JS)
                            $variGetburtsdatum = "getburtsdatumAdd".$i; //pareil ici
                        //on ajoute tout ca dans le tableau      

                        $table3.= " <tr>
                                        <td> ". $i ." </td>
                                        <td> ".$nameAdd[$i]."</td>
                                        <td> ".$getburtsdatumAdd[$i]."</td>
                                    </tr>";
                        }
                //on ferme le tablau
                $table3.= "    </table>
                        </center>";
    // on définit l'E-Mail de l'entreprise
    $enterpriseMail = "info@ackermann.vkb.de"; //jai mis ca juste pour les testes, à la fin il faut remplacer par : " info@ackermann.vkb.de "
    // on définit l'E-Mail à partir de laquelle les infos seront envoyées
    $senderMail = "info@ackermann.vkb.de"; // j'ai mis ca juste pour les testes; il faut remplacer par l'EMail que leur hébergeur leur a fourni, ou à defaut, tu mets toujours l'EMAIL de l'entreprise
    
    // *********** On prépare les paramettres de la fonction d'envois d'email *****************
    $to = $enterpriseMail; //qui va recevoir le mail ? hop on met ca dans la variable $to 
    $subject ="Neue Mail von der Webseite"; // de quoi parle l'email envoyé? hop on met ca dans $subject
   
    //le contenu de l'email 
    //tu peut faire la mise en forme comme tu veux hein, mais en suivant la meme logique  de concatenation successive ci.
    $message = "<center><h2> Hallo ! Ein neuer Benutzer hat das Formular gesendet! Hier sind seine Informationen </h2></center> <br>"; //on met un titre
    $message .= "<br> <caption> <center>INFORMATIONS FILLED IN THE FORM </center> </caption>"; //le titre su premier tableau
    $message .= $table1; // on insere alors le tableau qu'on a défini en haut là
    $message .= "<br> <caption> <center>Benutzerwahl </center> </caption>"; //le titre su premier tableau
    $message .= $table2; // on insere alors le tableau qu'on a défini en haut là
    $message .= "<br> <caption> <center> Benutzer zur Versicherung hinzugefügt </center> </caption>"; //le titre su premier tableau
    $message .= $table3; // on insere alors le tableau qu'on a défini en haut là

    //définition de l'entête du méssage qui sera trasmit entre les serveurs 
    $header ="From:".$senderMail."\r\n";
    $header .="Cc:".$senderMail."\r\n";
    $header .="MIME-Version: 1.0\r\n";
    $header .="Content-type: text/html\r\n";
    //envoit du mail proprement dit
    $retVal = mail($to, $subject, $message, $header); //on envoit le mail et on stoque la valeur de retour dans la variable $retval
    $_SESSION['submitedData'] = $_POST;

    if($retVal == true){ // si l'envoit a réussi
        $messageFlash['type'] = "success";
        $messageFlash['message'] = "Ihre Nachricht wurde gesendet! Sie werden bald auf die Homepage weitergeleitet ..."; //on définit le message d'alerte
        $_SESSION['messageFlash'] = $messageFlash;
        header('location: ../index.php');

    }else{ //si l'envoit a échoué 
        $messageFlash['message'] = "Beim Senden der E-Mail ist ein Problem aufgetreten."; //on définit le message d'alerte
        $messageFlash['type'] = "danger";
        $_SESSION['messageFlash'] = $messageFlash;
        header('location: ../index.php');
    }

}