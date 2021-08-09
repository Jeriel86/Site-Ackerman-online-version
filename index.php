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

  <section class="bg-light">
    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner slider justify-content-center">
        <div style="position: absolute;height:92px;top:0px;" class="m-carousel bg-light">
        </div>
        <div class="carousel-item active">
          <div class="responsive-bg w-100 h-100"
            style="background: url('assets/bilder/image1.jpg') no-repeat; background-size: cover; background-position:center center ;">
          </div>
          <div class="overlay"></div>
          <div class="carousel-item-description justify-content-center carou w-100 p-0 m-0">
            <div class="mt-4 p-0">
              <ul class="txt  p-0  w-75 m-auto">
              <h4 class="">Willkommen bei der Generalagentur Sascha Ackermann</h4>
                <li>Wir möchten Sie als <span class="fst-italic fw-bold">Menschen kennenlernen.</span></li>
                <li>Wir <span class="fst-italic fw-bold">helfen</span> Ihnen bei den
                  ersten Schritten als Beamter.</li>
                <li>Wir <span class="fst-italic fw-bold">betreuen</span></betreuen> Sie <span
                    class="fst-italic fw-bold">deutschlandweit</span> und während Ihrer ganzen Laufbahn.</li>
                <li>In jedem <span class="fst-italic fw-bold">Versicherungsaspekt</span> sind wir für Sie da !</li>
              </ul>
            </div>
          </div>

        </div>
        <div class="carousel-item">
          <div class="responsive-bg w-100 h-100"
            style="background-image: url('assets/bilder/image2.jpg'); background-size: cover; background-position:center center;">
          </div>
          <div class="overlay"></div>
          <div class="carousel-item-description justify-content-center w-100 p-0 m-0">
            <div class="mt-4 p-0">
              <ul class="txt p-0 w-75 m-auto">
                <h4 class="fw-bold"> Ihr Online-Versicherungsbüro</h4>
                <li>mit Erfahrung und Kompetenz</li>
                <li>Versicherungsexperten für Beamte</li>
                <li>in jeder Lebensphase und für jede Lebenslage</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="responsive-bg w-100 h-100 img-fluid"
            style="background-image: url('assets/bilder/image3.jpg'); background-size: cover; background-position:center center;">
          </div>
          <div class="overlay"></div>
          <div class="carousel-item-description justify-content-center p-0 m-0 w-100 ">
            <div class="mt-4 p-0 ">
              <ul class="txt p-0 w-75 m-auto"style="">
                <h4>Die ersten Schritte in die Zukunft als Student, Lehrer oder Beamter</h4>
                <li class="mt-2">Wählen Sie Ihren Berufsstatus und </li>
                <li>erhalten Sie alle notwendigen Informationen.</li>
                <li>Vereinbaren Sie jetzt einen Termin mit uns.</li>
                <li>Wir sind persönlich, digital oder telefonisch für Sie da !</li>

              </ul>
            </div>
          </div>

        </div>
        <div class="carousel-item">
          <div class="responsive-bg w-100 h-100"
            style="background-image: url('assets/bilder/image4.jpg'); background-size: cover; background-position:center center;">
          </div>
          <div class="overlay"></div>
          <div class="carousel-item-description justify-content-center p-0 m-0 w-100">
            <div class="mt-4 p-0">
              <ul class="txt p-0 w-75 m-auto">
                <h4>Du bist noch ein/e Student/in?</h4>
                <span>Dann informiere dich jetzt schon über die notwendige Absicherung für heute und morgen</span>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

        <!------------------------------------------------------------------ Section 1: Leistungen -------------------------------------------------------->
    <section class="leistung">
      <h1 class="text-center fw-bold mt-5">Ihr Online-Versicherungsbüro</h1>
      <p>
        <h5 class="text-center mt-5">Unsere Leistungen für Sie</h5>
      </p>
      <div class="container contain">
        <div class="ligne">
          <div class="colone">
              <div class="col-md-4 mb-2  align-self-start text-center">
                  <button type="button" class="button text-light">
                      Gesundheit und <br> Freizeit
                  </button>
              </div>
              <div class="col-md-4 mb-2 mt-2 align-self-start  text-center">
                  <button type="button" class="bt text-light bt1 p-4">
                      Wir bieten <span class="text-warning"> Sonderkonditionen </span> für Beamte und öffentlichen
                      Dienst-Mitarbeiter in allen privaten Absicherungsformen

                  </button>
              </div> 
          </div>
          <div class="colone">
              <div class="col-md-4 mb-2  align-self-center text-center">
                  <button type="button" class="button text-light">
                      Vorsorge und<br> Vermögen
                  </button>
              </div>
              <div class="col-md-4 mb-2 mt-2  align-self-center text-center">
                  <button type="button" class="bt text-light bt2 p-3">
                      Wir begleiten Sie <span class="text-warning"> langfristig</span> und erstellen ein Angebot für Ihre
                      Dienstunfähigkeitsversicherung, Diensthaftpflichtversicherung, sowie Ihre Altersvorsorge
                  </button>
              </div>
          </div>
          <div class="colone">
              <div class="col-md-4 mb-2 align-self-end text-center">
                  <button type="button" class="button text-light">
                      KFZ, Haftpflicht<br> und Recht
                  </button>
              </div>
              <div class="col-md-4 mb-2 mt-2 align-self-end text-center">
                  <button type="button" class="bt text-light bt3 p-3">
                      Wir erstellen für Sie ein <span class="text-Warning">individuelles</span> und auf Sie zugeschnittenes <span
                              class="text-Warning">Angebot </span> für die private Krankenversicherung und private Unfallversicherung
                  </button>
              </div>
          </div>
          </div>
          <p class="text-center">
              Individuelle Beratung<span class="text-secondary"> ●</span> auf Ihre Bedürfnisse angepasst <span
                      class="text-secondary"> ●</span>für Beamtenanwärter und Beamte
          </p>
        </div>
      </div>
    </section>
    <!------------------------------------------------------->

    <!--Section 2: Berufsstatus-------------------------------------------------------->

    <section style="background-color:rgb(166,166,166);">
        <p>
        <h5 class="text-center mt-5">Wählen Sie Ihren Berufsstatus
        </h5>
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
                             <li><span class="dropdown-item" href="#"  data-toggle="tooltip"  title="Ein Dienstherr möchte langfristig, am besten bis zum Rentenalter die Beamten beschäftigen. Dabei spielt die Gesundheit eine  wichtige Rolle. Chronische oder psychische Erkrankungen, sowie das Übergewicht und Ihr allgemeines Gesundheitszustand werden von einem Amtsarzt überprüft.">▪ Gesundheitsprüfung </span></li>
                             <li><span class="dropdown-item" href="#"  data-toggle="tooltip"  title="">▪ Prüfung anstehender Versicherungen</span></li>
                            <div class="dropdown-divider"></div>
                            <li><span class="dropdown-item" href="#"  data-toggle="tooltip"  title="Beihilfe ist die Leistung des Dienstherrn. Dabei werden die Kosten für Krankheits-, Geburts-, Pflege- und Todesfall übernommen. Beamten und Ihre Angehörige haben Anspruch auf Beihilfe. Die Kostenerstattung berechnet sich anhand dem persönlichen Bemessungssatz (50,70 oder 80%).  Der restliche Anteil (50,30 oder 20%)  werden durch die private Krankenversicherung abgedeckt. z.B. die Leistungen eines (Zahn-) Arztes oder eines Psychotherapeuten sind beihilfefähig.">▪  Beihilfe und private Krankenversicherung</span></li>
                            <li><span class="dropdown-item" href="#"  data-toggle="tooltip"  title="Jeder vierte wird in Deutschland berufsunfähig. Die häufigste Ursache dafür sind die psychischen Erkrankungen. Wenn Sie ihr aktuell ausgeübte Tätigkeit für 6 Monate nicht ausüben können und der Grund dafür lieg in Ihrer gesundheitlichen Verfassung, dann bekommen Sie die vereinbarte Rente für die Dauer der Berufsunfähigkeit ausgezahlt. Dienstunfähigkeitsklausel Die vereinbarte Rente erhalten Sie, wenn Sie berufsunfähig oder dienstunfähig werden. Die Dienstunfähigkeitsversicherung dient dazu, wenn Sie aus gesundheitlichen Gründen ihrer Diensttätigkeit aufgrund Ihres Gesundheitszustandes nicht mehr ausüben können und somit in den Ruhestand versetzt oder aus dem Beamtenverhältnis entlassen werden">▪  Berufsunfähigkeitsversicherung mit Dienstunfähigkeitsklausel</span></li>
                            <li><span class="dropdown-item" href="#"  data-toggle="tooltip"  title="Dies ist eine wichtige Ergänzung für die private Haftpflichtversicherung.Dabei werden berechtigte Schadenersatzansprüche, die aufgrund eines Schadens während Ihrer beruflichen Tätigkeit  passiert sind, abgedeckt.">▪  Amts- und Diensthaftpflichtversicherung</span></li>
                            <li><span class="dropdown-item" href="#"  data-toggle="tooltip"  title="Dies gehört ebenfalls als eine wichtige Ergänzung zur privaten Haftpflichtversicherung und hat hohe Priorität, z.B. bei Lehrer und Richter">▪  Schlüsselverlustversicherung</span></li>
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
                        <li><span class="dropdown-item" href="#" data-toggle="tooltip"  title="#">▪  Anpassung der Höhe Ihrer Dienstunfähigkeitsversicherung</a></li>
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

    <!----------------------------------------------------------------Section 3: Gute Gründe -->
    <section class="gründe" >
        <p>
        <h5 class="text-center mt-5">Gute Gründe für Agentur Sascha Ackermann </h5>
        </p>
        <div class="container">
            <div class="ligne">
                <div class="colone">
                    <div class="col-md-4 mb-2 align-self-start text-center">
                        <button type="button" class="button text-light">
                        Kostenlose kompetente Beratung & unverbindliches Angebot
                        </button>
                  </div>
                  <div class="col-md-4 mb-2 align-self-start text-center">
                    <button type="button" class="bt text-light bt1 p-4">
                        Profitieren Sie von <span class="text-warning fst-italic">bundesweiter</span> Betreuung in jeder Lebenslage
                        sowie einer <span class="text-warning fst-italic">persönlichen</span> und <span
                                class="text-warning fst-italic">individuellen</span> Beratung

                    </button>
                </div>
            </div>
            <div class="colone">
                <div class="col-md-4 mb-2 align-self-center text-center">
                    <button type="button" class="button text-light">
                        Langjährige Erfahrung
                    </button>
                </div>
                <div class="col-md-4 mb-2 align-self-center text-center">
                    <button type="button" class="bt text-light bt2 p-3">
                        Im Bereich individueller Beratung, Service und Unterstützung
                    </button>
                </div>
            
            </div>
            <div class="colone">
                <div class="col-md-4 mb-2 align-self-end text-center">
                    <button type="button" class="button text-light">
                        Hoher Qualitäts-&
                        Serviceanspruch
                    </button>
                </div>
                <div class="col-md-4 mb-2 align-self-end text-center">
                    <button type="button" class="bt text-light bt3 p-2">
                        Das Angebot wird <span class="text-Warning fst-italic">nach Ihren Wünschen und Bedürfnissen</span> für Sie
                        erstellt. Dadurch lernen wir unsere Kunden und deren Ansprüche kennen!
                    </button>
                </div>
                
            </div>   
                
            </div>

        </div>
        </div>
    </section>

    <!--Section 4 : Sie über uns-->

    <section id="testimonal">
        <p> 
        <h5 class="text-center mt-5">Sie über uns </h5>
        </p>
        <div class="container">
          <section class="bg-secondary center">
              <div class=" col-md-12 m-auto">
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                      <?php for($i=0; $i < count($testimonials); $i++ ){ ?>
                      <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="<?php echo $i ; ?>" aria-label="Slide <?php echo ($i + 1) ; ?>" class="<?php if ($i == 0){echo'active'; } ?> " ></button>
                        <?php } ?>
                  </div>
                  <div class="carousel-inner slider justify-content-center h-50 w-100 p-auto  ">
                    <?php for($i=0; $i < count($testimonials); $i++ ){ ?>
                    <div class="carousel-item <?php if ($i == 0){echo'active'; } ?>">
                      <div class="responsive-bg w-100 h-100"> 
                      </div>
                      <!-- <div class="overlay"></div> -->
                      <div class="carousel-item-description w-100">
                        <div class="w-100 row h-100">
                        <?php for($j=0; $j<3; $j++){ 
                              if($testimonials[$i][$j] == []){
                              continue;
                              } ?>
                            <div class="col-10 col-md-6 col-lg-6 col-xl-4  text-center m-auto p-4 h-100  ">
                                <button class="bt text-light bt1 p-2 h-75 w-100 " style="overflow:hidden;">
                                    <span class="h1">“</span> <?php  if (strlen($testimonials[$i][$j]["content"]) <= 200  ) {
                                                echo nl2br($testimonials[$i][$j]["content"]);
                                              }else{
                                                echo substr($testimonials[$i][$j]["content"], 0, 200);
                                                echo "...";
                                              }  ?> <br> 
                                    <span class="h1">„</span> 
                                </button>
                                <div class="col-md-12 text-center">
                                    <span class="kunde"><?php echo $testimonials[$i][$j]["pseudo"] ; ?></span>
                                </div>
                            </div>
                        <?php }  ?>
                        </div>
                      </div>

                    </div>
                    <?php } ?>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
          </section>
        </div>
        <div class="container mt-5">
                <h5 class="text-center">Ihre Meinung ist uns wichtig !</h5>
                <form class="my-form border border-2 border-secondary p-4 mt-2 rounded rounded-5 shadow shadow-lg" action="traitements/testimonialForm.php" method="POST">
                    <div class="form-group fw-bold">
                        <label for="form-name">Name:</label>
                        <input type="text" class="form-control" id="form-name" name="name" pseudoceholder="Name" value="<?php if(isset($name)){echo $name;} ?>" required="required">
                    </div><div class="form-group fw-bold">
                        <label for="form-message">Rezension </label>
                        <textarea class="form-control" id="form-message" name="message"  value="<?php if(isset($message)){echo $message;} ?>"  required="required"></textarea>
                    </div>
                    <button class="btn btn-primary mt-1 btn-lg" type="submit">Senden</button>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
    </section>





  <div>
    <!-- Footer -->
    <?php include "traitements/compteur_visites.php" ?>
    <?php include "includes/pages/footer.php" ?>
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