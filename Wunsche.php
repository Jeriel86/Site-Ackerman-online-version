<?php 
    session_start();
    $pagename = "Wünsche"; 
    $pageStyles= "<link rel='stylesheet' href='assets/css/wunsche.css'>"; //balise pour ajouter un fichier CSS propre à cette page 
     include "includes/pages/header.php" ?>



<section class="leistung">
    <h3 class="text-center  fw-bol mt-3">Wir empfehlen</h3>
    <div class="container contain">
                <div class="ligne" style="display: flex;flex-direction: row;flex-wrap: wrap;justify-content: space-between;">
                <div class="colone" style="margin: auto;margin-top: 30px;">
                    <div class="col-md-4 mb-2 align-self-end text-center border border-2 border-secondary rounded rounded-5 order-md-4 block">
                         <button type="button" class="btn" style="background-color:rgb(162,196,229); color:rgb(1,0,0)">1. Schritt: Sie während des <strong>Studiums</strong></button>
                    </div>
                    <div class="col-md-4 mb-2 mt-2 block align-self-end p-2" style="height: 168px;color:rgb(1,0,0)">
                        ▪ Anwartschaftsversicherung für die private Krankenversicherung<br>
                        ▪ Private Haftpflichtversicherung

                    </div>
                </div>
                <div class="colone" style="margin: auto;margin-top: 30px;">
                    <div class="col-md-4 mb-2 align-self-end text-center border border-2 border-secondary rounded rounded-5 order-md-4 block">
                         <button type="button" class="btn"style="background-color:rgb(152,170,216); color:rgb(1,0,0)">2. Schritt: Sie vor Ihrem <strong>ersten Arbeitstag</strong></button>
                    </div>
                    <div class="col-md-4 mb-2 mt-2 block align-self-end px-2">
                        
                        <span style="color: rgb(196,78,20);">▪ Berufsunfähigkeitsversicherung</span> <br>
                        <span style="color: rgb(102,43,149);">▪ Dienstunfähigkeitsversicherung</span> <br>
                        <span style="color: rgb(102,43,149);">▪ Private Krankenversicherung<span><br>
                        <span style="color: rgb(196,78,20);">▪ Krankenzusatzversicherung</span> <br>
                        <span style="color: rgb(1,0, 0);">▪ Diensthaftpflichtversicherung</span> <br>
                        <span style="color: rgb(1,0,0);">▪ Schlüsselverlustversicherung</span> <br>
                        <span style="color: rgb(1,0,0);">▪ Absicherung der Familie<span><br>
                    </div>
                </div>
                <div class="colone" style="margin: auto;margin-top: 30px;">
                    <div class="col-md-4 mb-2 align-self-end text-center border border-2 border-secondary rounded rounded-5 order-md-4 block">
                         <button type="button" class="btn"style="background-color:rgb(159,200,145); color:rgb(1,0,0)">3. Schritt: Sie und <strong>Ihre Absicherung</strong></button>
                    </div>
                    <div class="col-md-4 mb-2 mt-2 block align-self-end px-2"style="height:168px;color:rgb(1,0,0)">
                    ▪ Lebensqualität im Ruhestand<br>
                    ▪ Steuern sparen<br>

                    ▪ Sparen und Rendite<br>

                    ▪ Rechtsschutz<br>

                    ▪ Immobilienwunsch

                    </div>
                </div>
                </div>
              
            </div>
    </div>
    </section>
        <div class="section-container" style="display: flex;flex-direction: row;flex-wrap: wrap;margin: 15px auto;justify-content: space-around;">
            <div class="section-container-block" style = "display: flex;flex-direction: row;justify-content: space-around;margin-top: 15px;align-items:center;margin-right:176px ">
                <div style="width: 40px; height: 40px; background: rgb(255, 115, 0);margin-right:15px;margin-left:15px;"></div>
                <div class=""> Für Angestellte(Einkommen < BBG) </div>
            </div>
            <div class="section-container-block" style = "display: flex;flex-direction: row;justify-content: space-between;margin-top: 15px; align-items:center;">
                <div style="width: 40px; height: 40px; background: rgb(115, 10, 156);margin-right:15px;margin-left:15px;"></div>
                <div class=""> für Beamte, Beamtenanwärter, Angestellte (Einkommen > BBG)</div>
            </div>
           
            
        </div>

        <div class="container">
            <div class="p-3" style="background-color: rgb(222,237,249);">    
                <p class="fw-bold text-center mt-3">Für die bestmögliche und optimale Beratung beantworten Sie bitte die
                folgenden Fragen:</p>
                <h3 class=" mt-5 text-center fw-bold fst-italic">Wie wichtig sind die folgenden Aspekte für Sie beruflich und privat ?</h3>    
                <form action="traitements/WunscheForm.php" method="post">
                    <diV class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <fieldset class="p-3">
                                        <div class="row mb-1">
                                            <div class='col-md-7'><label class="form-label fw-bold" for=""> Füllen Sie bitte aus<br>z.B. schönes Wetter</label></div>
                                            <div class='col-md-5 mt-3'>
                                                <input type="hidden" name="Beispiel" id="Beispiel" value="3">
                                                <img src="assets/icon/stars/star.svg" id='Beispiel_1' alt="" class="star">
                                                <img src="assets/icon/stars/star.svg" id='Beispiel_2' alt="" class="star">
                                                <img src="assets/icon/stars/star.svg" id='Beispiel_3' alt="" class="star">
                                            </div>
                                        </div>
                                    
                                    <div class="row mb-1">
                                        <div class='col-md-7'><label class="form-label fw-bold" for="" style="word-wrap: break-word; width: 80%"><?php if(isset($sourcepagename) && $sourcepagename=="index_Angestellter"){ echo "Berufsunfähigkeitsabsicherung"; } else {echo "Dienstunfähigkeitsabsicherung";} ?> :</label></div>
                                        <div class="col-md-5">
                                            <input type="hidden" name="Dienstunfahigkeitsasicherung" id="Dienstunfahigkeitsasicherung" value="0">
                                            <img src="assets/icon/stars/star-empty.svg" id='Dienstunfahigkeitsasicherung_1' alt="" class="star">
                                            <img src="assets/icon/stars/star-empty.svg" id='Dienstunfahigkeitsasicherung_2' alt="" class="star">
                                            <img src="assets/icon/stars/star-empty.svg" id='Dienstunfahigkeitsasicherung_3' alt="" class="star">
                                        </div>
                                    </div>

                                    <?php if(isset($sourcepagename) && $sourcepagename=="index_Angestellter"){ ?>
                                    <div class="row mb-1">
                                        <div class='col-md-7'><label class="form-label fw-bold" for=""> Krankenzusatzversicherung :</label></div>
                                        <div class='col-md-5'>
                                            <input type="hidden" name="Krankenzusatzversicherung" id="Krankenzusatzversicherung" value="0">
                                            <img src="assets/icon/stars/star-empty.svg" id='Krankenzusatzversicherung_1' alt="" class="star">
                                            <img src="assets/icon/stars/star-empty.svg" id='Krankenzusatzversicherung_2' alt="" class="star">
                                            <img src="assets/icon/stars/star-empty.svg" id='Krankenzusatzversicherung_3' alt="" class="star">
                                        </div>
                                    </div>
                                    <?php } else {?>
                                    <div class="row mb-1">
                                        <div class='col-md-7'><label class="form-label fw-bold  mt-0" for=""> private Krankenversicherung :</label></div>
                                        <div class='col-md-5'>
                                            <input type="hidden" name="private_Krankenversiherung" id="private_Krankenversiherung" value="0">
                                            <img src="assets/icon/stars/star-empty.svg" id='private_Krankenversiherung_1' alt="" class="star">
                                            <img src="assets/icon/stars/star-empty.svg" id='private_Krankenversiherung_2' alt="" class="star">
                                            <img src="assets/icon/stars/star-empty.svg" id='private_Krankenversiherung_3' alt="" class="star">
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <div class="row">
                                        <div class='col-md-7'><label class="form-label fw-bold" for=""> Lebensqualität im Ruhestand :</label></div>
                                        <div class='col-md-5'>
                                            <input type="hidden" name="Lebensqualitat_im_Rushestand" id="Lebensqualitat_im_Rushestand" value="0">
                                            <img src="assets/icon/stars/star-empty.svg" id='Lebensqualitat_im_Rushestand_1' alt="" class="star">
                                            <img src="assets/icon/stars/star-empty.svg" id='Lebensqualitat_im_Rushestand_2' alt="" class="star">
                                            <img src="assets/icon/stars/star-empty.svg" id='Lebensqualitat_im_Rushestand_3' alt="" class="star">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class='col-md-7'><label class="form-label fw-bold" for=""> Absicherung der Familie :</label></div>
                                        <div class='col-md-5'>
                                            <input type="hidden" name="Absicherung_der_Familie" id="Absicherung_der_Familie" value="0">
                                            <img src="assets/icon/stars/star-empty.svg" id='Absicherung_der_Familie_1' alt="" class="star">
                                            <img src="assets/icon/stars/star-empty.svg" id='Absicherung_der_Familie_2' alt="" class="star">
                                            <img src="assets/icon/stars/star-empty.svg" id='Absicherung_der_Familie_3' alt="" class="star">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class='col-md-7'><label class="form-label fw-bold" for=""> Steuern sparen :</label></div>
                                        <div class='col-md-5'>
                                            <input type="hidden" name="Steuer_Sparen" id="Steuer_Sparen" value="0">
                                            <img src="assets/icon/stars/star-empty.svg" id='Steuer_Sparen_1' alt="" class="star">
                                            <img src="assets/icon/stars/star-empty.svg" id='Steuer_Sparen_2' alt="" class="star">
                                            <img src="assets/icon/stars/star-empty.svg" id='Steuer_Sparen_3' alt="" class="star">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class='col-md-7'><label class="form-label fw-bold" for=""> Sparen und Rendite :</label></div>
                                        <div class='col-md-5'>
                                            <input type="hidden" name="Sparen" id="Sparen" value="0">
                                            <img src="assets/icon/stars/star-empty.svg" id='Sparen_1' alt="" class="star">
                                            <img src="assets/icon/stars/star-empty.svg" id='Sparen_2' alt="" class="star">
                                            <img src="assets/icon/stars/star-empty.svg" id='Sparen_3' alt="" class="star">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class='col-md-7'><label class="form-label fw-bold" for=""> Rechtsschutz :</label></div>
                                        <div class='col-md-5'>
                                            <input type="hidden" name="Rechtsschutz" id="Rechtsschutz" value="0">
                                            <img src="assets/icon/stars/star-empty.svg" id='Rechtsschutz_1' alt="" class="star">
                                            <img src="assets/icon/stars/star-empty.svg" id='Rechtsschutz_2' alt="" class="star">
                                            <img src="assets/icon/stars/star-empty.svg" id='Rechtsschutz_3' alt="" class="star">
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class='col-md-7'><label class="form-label fw-bold" for=""> Immobilienwunsch :</label></div>
                                        <div class='col-md-5'>
                                            <input type="hidden" name="Immobilienwunsch" id="Immobilienwunsch" value="0">
                                            <img src="assets/icon/stars/star-empty.svg" id='Immobilienwunsch_1' alt="" class="star">
                                            <img src="assets/icon/stars/star-empty.svg" id='Immobilienwunsch_2' alt="" class="star">
                                            <img src="assets/icon/stars/star-empty.svg" id='Immobilienwunsch_3' alt="" class="star">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="form-label fw-bold" for="sonstiges"> Sonstiges :</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input class="form-control" type="text" name="sonstiges" id="sonstiges" value="<?php if(isset($sonstiges)){echo $sonstiges;} ?>" >
                                        </div>
                                    </div>
                                
                            </fieldset>
                        </div>
                    </diV> <br>
                    <h2 class='text-center m-4'> Ihre Daten </h2>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-7">
                                    <fieldset class="p-3">
                                        <div class=" p-1">
                                            <label class="form-label fw-bold" for="name"> Vorname, Name :</label>
                                            <input  class="form-control" type="text" name="name" id="name" value="<?php if(isset($name)){echo $name;} ?>" required>
                                        </div>
                                        <div class=" p-1">
                                            <label class="form-label fw-bold" for="getburtsdatum"> Geburtsdatum :</label>
                                            <input  class="form-control" type="date" name="getburtsdatum" id="getburtsdatum" value="<?php if(isset($getburtsdatum)){echo $getburtsdatum;} ?>" required>
                                        </div>
                                        <div class=" p-1">
                                            <label class="form-label fw-bold" for="straBe"> Straße, Hausnummer :</label>
                                            <input class="form-control" type="text" name="straBe" id="straBe" value="<?php if(isset($straBe)){echo $straBe;} ?>" required>
                                        </div>
                                        <div class=" p-1">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label fw-bold" for="PLZ"> PLZ :</label>
                                                    <input class="form-control" type="number" name="PLZ" id="PLZ" value="<?php if(isset($PLZ)){echo $PLZ;} ?>" required onblur="checkPLZ(), checkPLZinit()">    
                                                </div>
                                                <div class="col-md-6">
                                                <label class="form-label fw-bold" for="ORT"> ORT :</label>
                                                <input class="form-control" type="text" name="ORT" id="ORT" value="<?php if(isset($ORT)){echo $ORT;} ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" p-1">
                                            <label class="form-label fw-bold" for="mail"> Email :</label>
                                            <input class="form-control" type="text" name="mail" id="mail" value="<?php if(isset($mail)){echo $mail;} ?>" required>
                                        </div>
                                        <div class=" p-1">
                                            <label class="form-label fw-bold" for="phone"> Telefonnummer :</label>
                                            <input class="form-control" type="tel" name="phone" id="phone" value="<?php if(isset($phone)){echo $phone;} ?>"  required>
                                        </div>

                                        <div class="row">
                                            <span>Ihre Beratungsmöglichkeiten: </span>
                                        </div>
                                        <div class="row  w-100 px-2">
                                            <div class='col btn-sm mx-2 btn gy-2 ' style="background-color: rgb(218, 167, 27);"> Telefonische Beratung </div>
                                            <div class='col btn btn-sm mx-2 gy-2' style="background-color: rgb(218, 167, 27);"> Digitale Beratung</div>
                                            <div class='col btn btn-sm gy-2' style="background-color: rgb(218, 167, 27);" id='consultPersonalBtn'> Persönliche Beratung </div>
                                        </div>
                                    

                                        <label for="consultation"> Ich wünsche mir eine : </label><br>
                                            
                                        <div class="row  w-100 px-1">    
                                            <div class="col btn-sm mx-1 btn gy-2"id="consltPhone">
                                                <input type="radio" name="consultation" id='consultationPhoneR' value="Phone"> <label for="consultationPhoneR">telefonische Beratung </label>
                                            </div><br>
                                            <div class="col btn-sm mx-1 btn gy-2"id="consltDigital">
                                                <input type="radio" name="consultation" id='consultationDigitalR' value="Digital"> <label for="consultationDigitalR">Digitale-Beratung  </label>
                                            </div> <br>
                                            <div class="col btn-sm mx-1 btn gy-2"id="consltPersonal">
                                                <input type="radio" name="consultation" id='consultationPersonalR' value="Personal"><label for="consultationPersonalR" style="margin-left:4px;">persönliche Beratung </label>
                                            </div>
                                        </div>    
                                           
                                        <div class="row mt-1">
                                            <div class="">
                                                <input type="checkbox" name="wettbewerb" id="wettbewerb" style="width: auto; margin-bottom: 0px;">
                                                <label for="wettbewerb">Ja, ich möchte an dem <strong>Gewinnspiel</strong> teilnehmen.</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="">
                                                <input type="checkbox" class="f" name="datenschutz" id="datenschutz" style="width: auto; margin-bottom: 0px;" required='required'>    
                                                <label for="datenschutz">Ich habe die <a href="datenschutz.php">Datenschutzerklärung</a> gelesen und bin damit einverstanden.</label>
                                            </div>  
                                        </div>
                                        <div class="row">
                                            <div class="">
                                                <input type="checkbox" name="newsletter" id="newsletter" style="width: auto; margin-bottom: 0px;">
                                                <label for="newsletter">Ich möchte Informationen und Neuerungen über die Newsletter erhalten.</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12"> 
                                            <textarea name="message" id="message" cols="30" rows="7" placeholder="Ihre persönliche Nachricht/ Anmerkungen " style="margin-top: 20px;"  class="form-control"></textarea>
                                        </div>
                        



                                    </fieldset>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-4">
                                    <fieldset class="p-3">
                                    <center>
                                        <button type="button" onclick="addUser()" class="btn btn-primary"> <b style="font-height:40px">+ </b>Weitere versicherte Person hinzufügen</button> <br>
                                    </center> <br>
                                    <div id="adduser">
                                        <label for="nameAdd"> Name :</label>
                                        <input type="text" name="nameAdd[]" id="nameAdd0" class="form-control">
                                        <label for="getburtsdatumAdd"> Geburtsdatum :</label>
                                        <input type="date" name="getburtsdatumAdd[]" id="getburtsdatumAdd0" class="form-control">
                                    </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-2 mt-3 ">
                        <div class="col-md-12 text-center">
                            <div class="row mt-3">
                                <div class="col-md-4"></div>
                                <a class="btn btn-lg btn-success p-3 col-md-2 mx-4" href="pdf/Handout.pdf" role="button" download="Handout.pdf" >Handout Downloaden</a>
                                <input type="submit" value="Einreichen"  class="btn btn-lg btn-primary p-3 col-md-2 mx-4">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include "traitements/compteur_visites.php" ?>
    <?php include "includes/pages/footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/traitementForm1.js"></script>
    <script src="assets/js/traitementForm2.js"></script>
</body>

</html>