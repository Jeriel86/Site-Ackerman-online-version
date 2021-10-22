<?php
    session_start();
    $pagename = "about";
    $pageStyles= "<link rel='stylesheet' href='assets/css/about.css'>"; //balise pour ajouter un fichier CSS propre à cette page 
     include "includes/pages/header.php" ?>
    </div>

    <div class="container">
    <section>
      <div class="container">
        <h2 class="mt-5 text-center fw-bold">Generalagentur Sascha Ackermann</h2>
        <div class=" p-3 mt-5 float-end">
          <img width="400px" height="auto" class="img-fluid img-thumbnail" src="assets/bilder/Team.jpg">
        </div>
        <div class="container mt-5 float-sart">
          <p> Wir sind das Team der Generalagentur Sascha Ackermann und sind seit Jahren der Ansprechpartner vieler Kunden, wenn es um den Versicherungsbereich geht.</p>
          <p>Die Versicherungskammer Bayern Versicherungsanstalt des öffentlichen Rechts ist ein Personen- und
              Sachversicherer. Wir betreuen Privatkunden, Landwirte, Firmen, kommunale Gebietskörperschaften sowie
              öffentlich-rechtliche Institutionen und bieten ein umfangreiches Angebot an unseren Dienstleistungen und
              Versicherungsprodukten, z.B. Lebensversicherung, private Kranken- und Pflegeversicherung sowie Unfall- und
              Schadenversicherung.</p>
          <p> Wir sind auf unterschiedliche Berufsbranchen spezialisiert. Auch für nicht berufsspezifische Versicherung, wie
              Kraftfahrtversicherung, Rechtsschutz und Wohngebäudeversicherung sind wir ein professioneller
              Ansprechpartner.</p>
          <p>Auch in schwierigen Zeiten unserer Kunden sind wir für sie da. Wir begleiten unsere Kunden bei ihrer
              persönlichen sowie beruflichen Entwicklung und beraten unsere Kunden in jeder Lebensphase und passen die
              Produkte dem Wunsch und der Lebensphase des Kunden an.</p>
          <p>Wir freuen uns Sie kennenzulernen. Bei uns sind Sie keine Kundennummer, wir lernen unsere Kunden und ihre kennen. Lassen Sie sich davon überzeugen! Wir freuen uns auf Sie!</p>
        </div>









      </div>
    </section>
    
    <section>
      <div class="container text-center">
        <h3 class="mt-2 fw-bold">Für Sie zertifiziert und ausgezeichnet </h3>
        <img src="assets/bilder/ISO.JPG" width="200px" height="auto">
      </div>
    </section>

    <section>
      <div class="container mt-5 text-center">
        <div class="row">
          <h3 class="fw-bold">Unsere Vertriebspartner</h3>
        </div>
        <div class="row mt-2">
          <div class="col-md-4">
            <img width="200" height="auto" src="assets/bilder/UKV.png">
          </div>
          <div class="col-md-4">
            <img width="200" height="auto" src="assets/bilder/ORAG.png">
          </div>
          <div class="col-md-4">
            <img width="200" height="auto" src="assets/bilder/logo_vkb .png">
          </div>
        </div>
      </div>
    </section>

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

  </div>  
    <?php include "traitements/compteur_visites.php" ?>
  <?php include "includes/pages/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>


  </body>
</html>