<?php
session_start();
$pagename = "Home";
$pageStyles= "<link rel='stylesheet' href='assets/css/index.css'>"; //balise pour ajouter un fichier CSS propre à cette page
$pageStyles.= "<link href='https://unpkg.com/aos@2.3.1/dist/aos.css' rel='stylesheet'>"; //balise pour ajouter un fichier CSS propre à cette page
include "includes/pages/header.php" ;
$testimonials = [];
include "traitements/testimonialForm.php";
?>
<link rel="shortcut icon" href="assets/logo/favicon.png" type="image/x-icon">
  <!-- Créer un carousel -->
  <?php 
        $req = $db->query("SELECT * FROM editable_section WHERE id_editable_page in  (SELECT id FROM editable_page WHERE title = '$pagename') ORDER BY rank_in_page");
        $editable_sections = $req->fetchAll();
        foreach ($editable_sections as $section){?> 
            <section class="" id="<?php echo $section["name"] ?>">
              <?php echo eval("?>".$section['source_code']."<?") ?>
            </section>
    <?php } ?> 

    <!--Section 5 : popup-->
  <section>
    <div class="modal fade text-dark " id="homePopUp" data-backdrop="static" data-keyboard="false" tabindex="-1"  aria-hidden="true">
      <div class="modal-dialog modal-dialog  modal-dialog-centered modal  modal-dialog-scrollable">
        <div class="modal-content bg-transparent border-0 " style="overflow: visible;">
          <div class="modal-header border-0 p-1  bg-info">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="updateVisit()"></button>
          </div>
          <div class="modal-body pt-0  bg-info">
            <h3 class="modal-title text-center">Gute Gründe für uns</h3>
            <ul class="p-4">
              <li class="p-1">Kompetente, individuelle und persönliche Beratung</li>
              <DIV class="mx-4">
                <li class="p-1 mx-5">Bundesweite, langfristige Betreuung</li>
              </DIV>
              <li class="p-1">Hoher Qualitäts- und Serviceanspruch</li>
            </ul>
          </div>
          <div class="modal-footer py-5 p-0 border-0  bg-info" style="overflow: visible;">
            <a href="" class=" p-0 position-absolute btn-gewinnspiel text-dark " style="z-index: 80;" onclick="updateVisit()"> 
              <div class="position-relative" style="width: 350px;">
                <div class="position-absolute " style="top:-50px; left: -30px" >
                  <img src="assets/bilder/bg-alert2.png" alt="" width="400px" height="280px">
                </div>
                <div class="  px-4 p-5 position-relative d-flex justify-content-center">
                  <div class="position-absolute " style="z-index: 100; width:230px">
                    
                  <small>
                      <h5 class=" text-center m-0">Gewinnspiel</h5>
                      Klicke dich durch die Homepage
                      und nehme am Gewinnspiel teil.
                      Sichere dir die Chance 
                      auf einen <b>E-Bike!</b>
                    </small>
                  </div>
                </div>
                
              </div>
            </a>
          </div>
          <br> <br>  <br> <br>  <br> <br> 
        </div>
      </div>
    </div>
  </section>



  <div>
    <!-- Footer -->
    
    <?php
    $premiereVisite = false;
    include "traitements/compteur_visites.php" ?>
    <?php include "includes/pages/footer.php" ?>
  </div>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });
  </script>
    <?php 
    if($premiereVisite == true){?>
      <script type="text/javascript">
          $(document).ready(function(){
            var myModal = new bootstrap.Modal(document.getElementById('homePopUp'))
            myModal.show();
          });
      </script>
    <?php } ?>
    <script>
      function updateVisit(){
        $.ajax({
          url: "traitements/compteur_visites.php?gewinnspiel=<?php echo $_SERVER['SCRIPT_NAME'] ?>",
          method: 'GET'
        })
      }

      $( window ).scroll(function() {
        $("#listItem5").fadeIn('slow')
      });
    </script>
    <script>
//     initinialisation de l'animation Onscroll;
      AOS.init();
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