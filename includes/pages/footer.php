<footer class=" mt-5 footer-section bg-light text-dark" id="footer">
    <div class="container">
      <div class="footer-content pt-5 pb-5">
        <div class="row">
          <div class="col-xl-2 col-lg-2 mb-50">
            <div class="footer-widget">
              <div class="footer-logo">
                <a href="index.php"><img src="assets/bilder/logo.png" class="img-fluid" alt="logo"></a>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-2 mb-30">
            <div class="footer-widget">
              <?php if(isset($nbVisites) && $nbVisites > 10000){ ?>
               <b><i style="font-size : 25px;font-family= Calibri;"><span style="font-size : 25px"> <?php echo $nbVisites; ?> </span> Besucher </i></b> haben diese Seite gelesen! !  
              <?php } ?>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
            <div class="footer-widget">
              <div class="footer-widget-heading ">
                <h3 class="text-dark text-sm-center text-center">Nützliche Links</h3>
              </div>
              <ul>
                <li>
                  <h5 class="text-dark">Navigation</h5>
                </li>
                <li>
                  <h5 class="text-dark">Rechtliches</h5>
                </li>
                <li><a href="index.php">Home</a></li>
                <li><a href="datenschutz.php">Datenschutz</a></li>
                <li><a href="about.php">Über Uns</a></li>
                <li><a href="impressum.php">Impressum</a></li>
                <li><a href="about.php#kontakt">Kontakt</a></li>
                <li><a href="gewinnspiel.php">Gewinnspiel </a></li>

              </ul>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
            <div class="footer-widget">
              <div class="footer-widget-heading align-self-center">
                <h3 class="text-dark text-sm-center">Newsletter</h3>
              </div>
              <div class="footer-text mb-25">
                <p>Verpassen Sie nicht, unsere neuen Feeds zu abonnieren. Füllen Sie bitte das folgende Formular aus</p>
              </div>
              <div class="subscribe-form h-25">
                <form action="traitements/newsletterForm.php" method="post" style="position:relative;">
                  <input type="email" name ="mail" placeholder="Email Adresse" class="text-dark" value="<?php if(isset($mail)){echo $mail;} ?>" required=required>
                  <button type="submit" class=""><i class="fab fa-telegram-plane"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-social-icon text-center mb-4">
      <span class="text-dark">Follow us</span>
      <a href="https://www.instagram.com/agentur_ackermann/"><i class="fab fa-instagram instagram-bg"></i></a>

    </div>
    <div class="copyright-area mt-2">
      <div class="container">

        <div class="text-center text-lg-center">
          <div class="copyright-text">
            <p class="text-white">Copyright &copy; Generalagentur Sascha Ackermann 2021</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <?php 
  ///vidange des variables sessions
  if (isset($_SESSION['messageFlash']) && !empty($_SESSION['messageFlash'])) { 
    $_SESSION['messageFlash'] = null ;
  }
  if (isset($_SESSION['submitedData']) && !empty($_SESSION['submitedData'])){
    $_SESSION['submitedData'] = null ;
}
  ?>
