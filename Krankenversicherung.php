<?php 
    session_start();
    $pagename = "Krankenversicherung"; 
    $pageStyles= "<link rel='stylesheet' href='assets/css/Krankenversicherung.css'>"; //balise pour ajouter un fichier CSS propre à cette page 
     include "includes/pages/header.php" ?>
    <div class="container w-100 ">
        <h3 class="mt-5 text-center">Erstellen Sie Ihr individuelles Angebot für Ihre private
            Krankenversicherung/Anwartschaftsversicherung:</h3>
        <form action="traitements/KrankenversicherungForm.php" method="POST"  id="regForm" >
            <div class="tab"> <h4>Wer soll das Angebot erhalten ?</h4> <hr style="height: 5px; width: 30%; background-color:#ff5e14;">
                <div class="row">
                    <p>
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Vorname, Name </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" id="" value="<?php if(isset($name)){echo $name;} ?>"  required placeholder="" oninput="this.className = ''">
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <p>
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Straße, Hausnummer</label>
                            <input type="text" class="form-control"name="straBe" id="straBe"value="<?php if(isset($straBe)){echo $straBe;} ?>"  required placeholder="" oninput="this.className = ''">
                        </p>
                    </div>
                    <div class="col-md-5">
                        <p>
                            <label for="exampleFormControlInput1" class="form-label fw-bold">PLZ, Ort</label>
                            <input type="text" class="form-control" name="PLZ" id="HausNummer" value="<?php if(isset($PLZ)){echo $PLZ;} ?>"  required placeholder="" onblur="checkPLZ()" oninput="this.className = ''">
                        </p>
                    </div>
                </div>
                <div class="row">
                    <p>
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Telefonnummer</label>
                        <input type="number" class="form-control telefonnummer" name="phone" id="phone" value="<?php if(isset($phone)){echo $phone;} ?>"  placeholder="" oninput="this.className = ''" >
                    </p>
                </div>
                <div class="row">
                    <p>
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control"name="mail" id="mail" value="<?php if(isset($mail)){echo $mail;} ?>"  required placeholder="" oninput="this.className = ''">
                    </p>
                </div>
                <div class="row">
                    <p>
                        <label for="Getburtsdatum" class="form-label fw-bold">Geburtsdatum</label>
                        <input type="date"  class="form-control" name="getburtsdatum" id="getburtsdatum" value="<?php if(isset($getburtsdatum)){echo $getburtsdatum;} ?>"  required oninput="this.className = ''">
                    </p>
                </div>
            </div>

            <div class="tab"> <h4>Derzeitiger Berufstatus</h4> <hr style="height: 5px; width: 30%; background-color:#ff5e14;">
                <div class="formBloc_BTN Berufstatus" onclick="setInput('Beamte', 'Berufstatus', 'formBloc_BTN Berufstatus'), setfield('Beamte')" onmouseover="annimationFormBlocBTNOver('Beamte')" onmouseout="annimationFormBlocBTNOut('Beamte', 'Berufstatus')" id="Beamte" >Beamtin/er</div>
                <div class="formBloc_BTN Berufstatus" onclick="setInput('Beamtenanwarter', 'Berufstatus', 'formBloc_BTN Berufstatus'), setfield('Beamtenanwarter')" onmouseover="annimationFormBlocBTNOver('Beamtenanwarter')" onmouseout="annimationFormBlocBTNOut('Beamtenanwarter', 'Berufstatus')" id="Beamtenanwarter">Beamtenanwärterin/er</div>
                <div class="formBloc_BTN Berufstatus" onclick="setInput('Referendar', 'Berufstatus', 'formBloc_BTN Berufstatus'), setfield('Referendar')" onmouseover="annimationFormBlocBTNOver('Referendar')" onmouseout="annimationFormBlocBTNOut('Referendar', 'Berufstatus')" id="Referendar">Referendar</div>
                <input type="text" class="form-control" id="Berufstatus_others" placeholder="Ausgeübte Tatigkeit" onblur="copyInput('Berufstatus_others', 'Berufstatus')" style="width:97%" oninput="this.className = 'valid'"> 
                <script> function copyInput(actual, cible){
                            if(document.getElementById(actual).value != ""){
                                document.getElementById(cible).value = document.getElementById(actual).value;
                                buttons = document.getElementsByClassName("formBloc_BTN Berufstatus")
                                    for(i = 0; i<buttons.length; i++){
                                        buttons[i].style.borderRadius="10px 0px 10px 0px"
                                        buttons[i].style.color='black'
                                        buttons[i].style.backgroundColor='whitesmoke'
                                    }
                            }
                        }  
                        function setfield(value){
                            document.getElementById("Berufstatus_others").value = value
                        } 
                </script>
                <input type="hidden" name="Berufstatus" id="Berufstatus" oninput="this.className = ''">

            </div>

            <div class="tab"><h4 > Familienstand</h4> <hr style="height: 5px; width: 30%; background-color:#ff5e14;">
                <div class="formBloc_BTN Famillienstand" onclick="setInput('Ledig', 'Famillienstand', 'formBloc_BTN Famillienstand')" onmouseover="annimationFormBlocBTNOver('Ledig')" onmouseout="annimationFormBlocBTNOut('Ledig', 'Famillienstand')" id="Ledig" >Ledig</div>
                <div class="formBloc_BTN Famillienstand" data-toggle="modal" data-target="#myModal" onclick="setInput('Verheiratet', 'Famillienstand', 'formBloc_BTN Famillienstand')" onmouseover="annimationFormBlocBTNOver('Verheiratet')" onmouseout="annimationFormBlocBTNOut('Verheiratet', 'Famillienstand')" id="Verheiratet">Verheiratet</div>
                <div class="formBloc_BTN Famillienstand" onclick="setInput('Verwitwet', 'Famillienstand', 'formBloc_BTN Famillienstand')" onmouseover="annimationFormBlocBTNOver('Verwitwet')" onmouseout="annimationFormBlocBTNOut('Verwitwet', 'Famillienstand')" id="Verwitwet">Verwitwet</div>
                <div class="formBloc_BTN Famillienstand" onclick="setInput('Geschieden', 'Famillienstand', 'formBloc_BTN Famillienstand')" onmouseover="annimationFormBlocBTNOver('Geschieden')" onmouseout="annimationFormBlocBTNOut('Geschieden', 'Famillienstand')" id="Geschieden">Geschieden</div>
                <div class="formBloc_BTN Famillienstand" onclick="setInput('Eingetragene_Partnerschaft', 'Famillienstand', 'formBloc_BTN Famillienstand')" onmouseover="annimationFormBlocBTNOver('Eingetragene_Partnerschaft')" onmouseout="annimationFormBlocBTNOut('Eingetragene_Partnerschaft', 'Famillienstand')" id="Eingetragene_Partnerschaft">Eingetragene Partnerschaft</div>
                <input type="hidden" name="Famillienstand" id="Famillienstand" oninput="this.className = ''">
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-dark"> Angaben zum Partner </h4>
                        </div>
                        <div class="modal-body text-dark" >
                            <label for="partnername" class="form-label fw-bold"> Vorname, Name :</label>
                            <input class="form-control partner" type="text" name="partnername" id="partnername" value="<?php if(isset($partnername)){echo $partnername;} ?>" oninput="this.className = ''">

                            <label for="partnergetburtsdatum partner" class="form-label fw-bold"> Geburtsdatum :</label>
                            <input  class="form-control partner" type="date" name="partnergetburtsdatum" id="partnergetburtsdatum" value="<?php if(isset($partnergetburtsdatum)){echo $partnergetburtsdatum;} ?>"  oninput="this.className = ''">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="partnerstraBe" class="form-label fw-bold"> Straße :</label>
                                    <input class="form-control partner" type="text" name="partnerstraBe" id="partnerstraBe" value="<?php if(isset($partnerstraBe)){echo $partnerstraBe;} ?>"  oninput="this.className = ''">
                                </div>
                                <div class="col-md-6">
                                    <label for="partnerHausNummer" class="form-label fw-bold"> Hausnummer :</label>
                                    <input class="form-control partner" type="text" name="partnerHausNummer" id="partnerHausNummer" value="<?php if(isset($partnerHausNummer)){echo $partnerHausNummer;} ?>" oninput="this.className = ''">
                                </div>
                            </div>

                            <label for="partnermail" class="form-label fw-bold"> Email :</label>
                            <input class="form-control partner" type="text" name="partnermail" id="partnermail" value="<?php if(isset($partnermail)){echo $partnermail;} ?>"  oninput="this.className = ''">

                            <label for="partnerphone" class="form-label fw-bold"> Telefonnummer :</label>
                            <input class="form-control partner" type="tel" name="partnerphone" id="partnerphone" value="<?php if(isset($partnerphone)){echo $partnerphone;} ?>"  oninput="this.className = ''">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fortfahren</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="tab"><h4>Versicherungsstatus des Antragstellers</h4>
                <div class="formBloc_BTN versichert" onclick="setInput('gesetzlich', 'versichert', 'formBloc_BTN versichert')" onmouseover="annimationFormBlocBTNOver('gesetzlich')" onmouseout="annimationFormBlocBTNOut('gesetzlich', 'versichert')" id="gesetzlich">gesetzlich</div>
                <div class="formBloc_BTN versichert" onclick="setInput('privat', 'versichert', 'formBloc_BTN versichert')" onmouseover="annimationFormBlocBTNOver('privat')" onmouseout="annimationFormBlocBTNOut('privat', 'versichert')" id="privat">privat</div>
                <div class="formBloc_BTN versichert" onclick="setInput('nicht_versichert', 'versichert', 'formBloc_BTN versichert')" onmouseover="annimationFormBlocBTNOver('nicht_versichert')" onmouseout="annimationFormBlocBTNOut('nicht_versichert', 'versichert')" id="nicht_versichert">nicht versichert</div>
                <input type="hidden" name="versichert" id="versichert" oninput="this.className = ''">
            </div>

            <div class="tab"><h4>Anzahl der Kinder</h4> <hr style="height: 5px; width: 30%; background-color:#ff5e14;">
                <div class="formBloc_BTN Anzahl_der_kind" onclick="setInput('keine_Kinder', 'Anzahl_der_kind', 'formBloc_BTN Anzahl_der_kind')" onmouseover="annimationFormBlocBTNOver('keine_Kinder')" onmouseout="annimationFormBlocBTNOut('keine_Kinder', 'Anzahl_der_kind')" id="keine_Kinder">keine Kinder</div>
                <div class="formBloc_BTN Anzahl_der_kind" onclick="setInput('1_kind', 'Anzahl_der_kind', 'formBloc_BTN Anzahl_der_kind')" onmouseover="annimationFormBlocBTNOver('1_kind')" onmouseout="annimationFormBlocBTNOut('1_kind', 'Anzahl_der_kind')" id="1_kind">1 kind</div>
                <div class="formBloc_BTN Anzahl_der_kind" onclick="setInput('2_kind', 'Anzahl_der_kind', 'formBloc_BTN Anzahl_der_kind')" onmouseover="annimationFormBlocBTNOver('2_kind')" onmouseout="annimationFormBlocBTNOut('2_kind', 'Anzahl_der_kind')" id="2_kind">2 kind</div>
                <div class="formBloc_BTN Anzahl_der_kind" onclick="setInput('mehr_als_2_kinder', 'Anzahl_der_kind', 'formBloc_BTN Anzahl_der_kind')" onmouseover="annimationFormBlocBTNOver('mehr_als_2_kinder')" onmouseout="annimationFormBlocBTNOut('mehr_als_2_kinder', 'Anzahl_der_kind')" id="mehr_als_2_kinder">mehr als 2 kinder</div>
                <input type="hidden" name="Anzahl_der_kind" id="Anzahl_der_kind" oninput="this.className = ''" >
            </div>

            <div class="tab"><h4>Welche Leistungen sind für Sie weiterhin wichtig?</h4> <hr style="height: 5px; width: 30%; background-color:#ff5e14;">
                <input type="checkbox" name="Leistungen[]" id="Heilpraktiker_Akupunktur_input" value="Heilpraktiker Akupunktur" style="display: none;">
                <label for="Heilpraktiker_Akupunktur_input" style="width:100%">
                    <div class="formBloc_BTN Leistungen" onclick="activate('Heilpraktiker_Akupunktur')"  id="Heilpraktiker_Akupunktur">Heilpraktiker / Akupunktur</div>
                </label>
                <input type="checkbox" name="Leistungen[]" id="Sehhilfe_input" value="Sehhilfe" style="display: none;" oninput="this.className = ''">
                <label for="Sehhilfe_input" style="width:100%">
                    <div class="formBloc_BTN Leistungen" onclick="activate('Sehhilfe')" id="Sehhilfe">Sehhilfe</div>
                </label>
                <input type="checkbox" name="Leistungen[]" id="Zahnbehandlung_input" value="Zahnbehandlung" style="display: none;" oninput="this.className = ''">
                <label for="Zahnbehandlung_input" style="width:100%">
                    <div class="formBloc_BTN Leistungen" onclick="activate('Zahnbehandlung')"  id="Zahnbehandlung">Zahnbehandlung</div>
                </label>                        
                <input type="checkbox" name="Leistungen[]" id="Beitragsruckerstattung_input" value="Beitragsruckerstattung" style="display: none;" oninput="this.className = ''">
                <label for="Beitragsruckerstattung_input" style="width:100%">
                    <div class="formBloc_BTN Leistungen" onclick="activate('Beitragsruckerstattung')" id="Beitragsruckerstattung">Beitragsruckerstattung</div>
                </label>
            </div>

            <div class="tab"><h4>Wie möchten Sie im Krankenhaus untergebracht werden?</h4> <hr style="height: 5px; width: 30%; background-color:#ff5e14;">
                <div class="formBloc_BTN Krankenhaus" onclick="setInput('1_Bettzimmer', 'Krankenhaus', 'formBloc_BTN Krankenhaus')" onmouseover="annimationFormBlocBTNOver('1_Bettzimmer')" onmouseout="annimationFormBlocBTNOut('1_Bettzimmer', 'Krankenhaus')" id="1_Bettzimmer">1-Bettzimmer + Chefarzt</div>
                <div class="formBloc_BTN Krankenhaus" onclick="setInput('2_Bettzimmer', 'Krankenhaus', 'formBloc_BTN Krankenhaus')" onmouseover="annimationFormBlocBTNOver('2_Bettzimmer')" onmouseout="annimationFormBlocBTNOut('2_Bettzimmer', 'Krankenhaus')" id="2_Bettzimmer">2-Bettzimmer + Chefarzt</div>
                <div class="formBloc_BTN Krankenhaus" onclick="setInput('Mehrbettzimmer', 'Krankenhaus', 'formBloc_BTN Krankenhaus')" onmouseover="annimationFormBlocBTNOver('Mehrbettzimmer')" onmouseout="annimationFormBlocBTNOut('Mehrbettzimmer', 'Krankenhaus')" id="Mehrbettzimmer">Mehrbettzimmer + Belegarzt</div>
                <input type="hidden" name="Krankenhaus" id="Krankenhaus" oninput="this.className = ''">
            </div>
            
            <div class="tab">  <h4 class="  ">Beihilfeland </h4> <hr style="height: 5px; width: 30%; background-color:#ff5e14;">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Beihilfeland" id="Beihilfeland">
                    <option value="Bundesland" selected>Bundesland</option>
                    <option value="Baden Württemberg">Baden Württemberg</option>
                    <option value="Bayern"> Bayern</option>
                    <option value="Berlin"> Berlin</option>
                    <option value="Brandenburg">Brandenburg </option>
                    <option value="Bremen">Bremen</option>
                    <option value="Hamburg">Hamburg</option>
                    <option value="Hessen">Hessen</option>
                    <option value="Mecklenburg-Vorpommern">Mecklenburg-Vorpommern</option>
                    <option value="Niedersachsen">Niedersachsen</option>
                    <option value="Nordrhein Westfalen">Nordrhein Westfalen</option>
                    <option value="Rheinland-Pfalz">Rheinland-Pfalz</option>
                    <option value="Saarland">Saarland</option>
                    <option value="Sachsen">Sachsen</option>
                    <option value="Schleswig-Holstein">Schleswig-Holstein</option>
                    <option value="Thüringen">Thüringen</option>
                </select> <br><br>
                <h4 class="">Gesundheitscheck</h4><hr style="height: 5px; width: 30%; background-color:#ff5e14;"> <br>
                <div class="container text-center">
                    <a class="btn btn-primary mb-3" href="pdf/Gesundheitsfragen.pdf" role="button" download="Gesundheitsfragen.pdf">durchführen</a>
                    <br> 
                    <div class="row">
                        <div class="col-md-1 m-1">
                            <input type="checkbox" class="f" name="datenschutz" id="datenschutz" style="width: auto; margin-bottom: 0px;" required='required'>    
                        </div>
                        <div class="col-md-10 m-1">
                            <label for="datenschutz">Ich habe die <a href="datenschutz.php">Datenschutzerklärung</a> gelesen und bin damit einverstanden</label>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col-md-1 m-1">
                            <input type="checkbox" name="newsletter" id="newsletter" style="width: auto; margin-bottom: 0px;" oninput="this.className = ''">
                        </div>
                        <div class="col-md-10 m-1">
                            <label for="newsletter">Ich möchte Informationen und Neuerungen über die Newsletter erhalten </label>
                        </div>
                    </div>
                   <!-- <input type="submit" class=" btn btn-primary mb-5 " href="#" role="button" value="Angebot einholen"> <br> -->
                </div>
            </div>

            <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-default btn-dark m-2">letzte Seite</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn btn-warning m-2">nächste Seite</button>
            </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            </div>
        </form>
    </div>


    <!-- Footer -->
    <?php include "traitements/compteur_visites.php" ?>
    <?php include "includes/pages/footer.php" ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/traitementForm2.js"></script>
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form ...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Einreichen";
            } else {
                document.getElementById("nextBtn").innerHTML = "nächste Seite";
            }
            // ... and run a function that displays the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                if(y[i].className != "form-control partner" && y[i].id != "phone"){    
                    // If a field is empty...
                    if (y[i].value == "") {
                        // add an "invalid" class to the field:
                        y[i].className += " invalid";
                        // and set the current valid status to false:
                        valid = false;
                    }
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class to the current step:
            x[n].className += " active";
        }
    </script>
</body>

</html>