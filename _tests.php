<?php
session_start();
$pagename = "Home";
$pageStyles= "<link rel='stylesheet' href='assets/css/index.css'>"; //balise pour ajouter un fichier CSS propre à cette page
include "includes/pages/header.php" ;
$testimonials = [];
include "traitements/testimonialForm.php";
?>
<link rel="shortcut icon" href="assets/logo/favicon.png" type="image/x-icon">
  <!-- Créer un carousel -->


    <!--Section 2: Berufsstatus-------------------------------------------------------->

    <section style="background-color:rgb(166,166,166);">
        <p>
        <h5 class="text-center mt-5">Bitte wählen Sie Ihren Berufsstatus und erstellen Sie Ihr eigenes Angebot</h5>
        </p>
        <div class="container">
            <div class="ligne px-5 px-sm-1">
                <div class="colone">
                    <div class="col-md-4 mb-2 align-self-start text-center">
                        <a role="button" type="button" class="button-beruf text-dark text-center text-decoration-none"
                        href="Krankenversicherung.php">
                            <br> Beamtenanwärter/Referendar
                        </a>
                    </div>
                    <div class=" dropdown col-md-4  align-self-center text-center">
                        <button type="button" class="button-beruf  text-light  fst-bold bt2 dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-expanded="false" id="check" style="height: 30px;width: 230px;">
                            <span class="text-dark">Ihre Checkliste</span>
                        </button>
                        <ul class="dropdown-menu  text-start" aria-labbeledby="check">
                             <li><span class="dropdown-item" href="#"  data-toggle="tooltip"  title="Haben Sie vor zu einem späteren Zeitpunkt sich privat zu versichern? Dann können Sie bereits jetzt schon Ihren Gesundheitszustand für einen späteren Zeitpunkt für die Aufnahme in die private Krankenversicherung sichern. Sobald Sie dies in Anspruch nehmen möchten und können, ist der Weg in die private Krankenversicherung für Sie frei.">▪ Anwartschaftsversicherung für die private Krankenversicherung </span></li>
                             <li><span class="dropdown-item" href="#"  data-toggle="tooltip"  title="Eine kleine Unaufmerksamkeit und der Schaden ist bereits passiert. Man ist gesetzlich verpflichtet der Schaden zu ersetzen. Ihre private Haftpflichtversicherung schützt Sie und Ihr Vermögen vor hohen Entschädigungskosten. Dabei wird die Haftungsfrage geprüft, ob der „Beschädigter“ überhaut einen Anspruch auf Schadenersatz hat. Wir regulieren den Schaden und den Schadenersatz. Ebenfalls wehren wir unberechtigte Forderungen ab.">▪ Private Haftpflichtversicherung </span></li>
                             <li class="dropdown-item" href="#"  data-toggle="tooltip"  title="f f f f f ff sEin Dienstherr möchte langfristig, am besten bis zum Rentenalter die Beamten beschäftigen. Dabei spielt die Gesundheit eine  wichtige Rolle. Chronische oder psychische Erkrankungen, sowie das Übergewicht und Ihr allgemeines Gesundheitszustand werden von einem Amtsarzt überprüft.undheitszustand werden von einem Amtsarzt überprüft.">▪ Gesundheitsprüfung </li>
                             <li><span class="dropdown-item" href="#"  data-toggle="tooltip"  title="">▪ Prüfung anstehender Versicherungen</span></li>
                            <div class="dropdown-divider"></div>
                            <li><span class="dropdown-item" href="#"  data-toggle="tooltip"  title="Beihilfe ist die Leistung des Dienstherrn. Dabei werden die Kosten für Krankheits-, Geburts-, Pflege- und Todesfall übernommen. Beamten und Ihre Angehörige haben Anspruch auf Beihilfe. Die Kostenerstattung berechnet sich anhand dem persönlichen Bemessungssatz (50,70 oder 80%).  Der restliche Anteil (50,30 oder 20%)  werden durch die private Krankenversicherung abgedeckt. z.B. die Leistungen eines (Zahn-) Arztes oder eines Psychotherapeuten sind beihilfefähig.">▪  Beihilfe und private Krankenversicherung</span></li>
                            <li><span class="dropdown-item" href="#"  data-toggle="tooltip"  title="Jeder vierte wird in Deutschland berufsunfähig. Die häufigste Ursache dafür sind die psychischen Erkrankungen. Wenn Sie ihr aktuell ausgeübte Tätigkeit für 6 Monate nicht ausüben können und der Grund dafür lieg in Ihrer gesundheitlichen Verfassung, dann bekommen Sie die vereinbarte Rente für die Dauer der Berufsunfähigkeit ausgezahlt. Dienstunfähigkeitsklausel Die vereinbarte Rente erhalten Sie, wenn Sie berufsunfähig oder dienstunfähig werden. Die Dienstunfähigkeitsversicherung dient dazu, wenn Sie aus gesundheitlichen Gründen ihrer Diensttätigkeit aufgrund Ihres Gesundheitszustandes nicht mehr ausüben können und somit in den Ruhestand versetzt oder aus dem Beamtenverhältnis entlassen werden">▪  Berufsunfähigkeitsversicherung mit Dienstunfähigkeitsklausel</span></li>
                            <li><span class="dropdown-item" href="#"  data-toggle="tooltip"  title="Dies ist eine wichtige Ergänzung für die private Haftpflichtversicherung.Dabei werden berechtigte Schadenersatzansprüche, die aufgrund eines Schadens während Ihrer beruflichen Tätigkeit  passiert sind, abgedeckt.">▪  Amts- und Diensthaftpflichtversicherung</span></li>
                            <li><span class="dropdown-item" href="#"  data-toggle="tooltip"  title="">▪  Schlüsselverlustversicherung</span></li>
                        </ul>
                    </div>
                </div>
                <div class="colone">
                    <div  class="col-md-4 mb-2 align-self-center text-center">
                    <a role="button" type="button" class="button-beruf-1 text-dark text-center text-decoration-none" href="Krankenversicherung.php">
                       <br>Beamte
                    </a>
                    </div>
                    <div class=" dropdown col-md-4  align-self-center text-center align-items-center">
                    <button button type="button" class="button-beruf-1  text-light  fst-bold bt2  dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown" id="check" style="height:30px;width: 230px;">
                        <span class="text-dark">Ihre Checkliste</span>
                    </button>
                    <ul class="dropdown-menu  text-start " aria-labbeledby="check">
                        <li><span class="dropdown-item" href="#"  data-toggle="tooltip"  title="#">▪ Prüfung Ihres aktuellen Versicherungsstatus</span></li>
                        <li><span class="dropdown-item" href="#" data-toggle="tooltip"  title="#">▪  Anpassung der Höhe Ihrer Dienstunfähigkeitsversicherung</span></li>
                        <li><span class="dropdown-item" href="#" data-toggle="tooltip"  title="Die private Unfallversicherung zahlt bei Unfällen, die nicht nur auf der Arbeit passieren, sondern wir bieten einen weltweiten Schutz, der 24h gilt, die auch in Ihrer Freizeit passieren können.Unfallschutz mit Beitragrückzahlung Sie haben die Möglichkeit einen zuverlässigen Unfallschutz mit Geld-Zurück-Garantie für Sie und Ihre Familie, Kinder oder Angehörige zu sichern. Am Ende der Laufzeit erhalten Sie die vereinbarte Summe garantiert. Außerdem haben Sie die Möglichkeit auf Überschussbeteiligung.">▪ private Unfallversicherung</span></li>
                        <li><span class="dropdown-item" href="#" data-toggle="tooltip"  title="Lebensstandard Gibt es etwas, worauf Sie in der Zukunft verzichten würden? Ohne Schutz z.B. Dienstunfähigkeits- oder Unfallversicherung würden Sie als Beamter aufgrund eines Freizeitunfalls oder einer Erkrankung keine finanzielle Unterstützung vom Staat erhalten.">▪ Lebensstandard</span></li>
                        <li><span class="dropdown-item" href="#" data-toggle="tooltip"  title="#">▪  Vermögen</span></li>
                        <li><span class="dropdown-item" href="#" data-toggle="tooltip"> ▪  Ihre Checkliste zum <a href="pdf/Checkliste%20Beamte.pdf" download="Gesundheitsfragen.pdf">Download</a></span></li>
                    </ul>
                    </div>
                </div>
                <div class="colone1">
                    <div class="col-md-4 mb-2 align-self-end">
                        <a role="button" type="button" class="button-beruf-2 text-dark text-center text-decoration-none "
                        href="Wunsche.php?source=index_Angestellter">
                            <br>Angestellter
                        </a>
                    </div>
                </div>
            </div>
    </section>




    <div>
    <!-- Footer -->
    <?php // include "includes/pages/footer.php" ?>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });
  </script>
  <script>
//     var slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("mySlides");
//   var dots = document.getElementsByClassName("dot");
//   if (n > slides.length) {slideIndex = 1}
//     if (n < 1) {slideIndex = slides.length}
//     for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";
//     }
//     for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" active", "");
//     }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";
// }
  </script>
</body>

</html>