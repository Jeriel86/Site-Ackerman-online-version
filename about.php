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
          <p>Wir sind das Team der Generalagentur Sascha Ackermann und sind seit Jahren der Ansprechender vieler Kunden, wenn es um Versicherungsbereich geht.</p>
          <p>Versicherungskammer Bayern Versicherungsanstalt des öffentlichen Rechts ist ein Personen- und Sachversicherer. Wir betreuen Privatkunden, Landwirte, Firmen, kommunale Gebietskörperschaften sowie öffentlich-rechtliche Institutionen und bieten umfangreiches Angebot an unserer Dienstleistung und Versicherungsprodukten an, z.B. Lebensversicherung, private Kranken- und Pflegeversicherung sowie Unfall- und Schadenversicherung.</p>
          <p>Wir sind auf unterschiedliche Berufsbranchen spezialisiert. Auch für nicht berufsspezifische Versicherung, wie Kraftfahrtversicherung, Rechtsschutz und Wohngebäudeversicherung sind wir ein professioneller Ansprechpartner.</p>
          <p>Auch in schwierigen Zeiten unserer Kunden sind wir für sie da. Wir begleiten unsere Kunden bei Ihrer persönlicher sowie beruflicher Entwicklung und beraten unserer Kunden in jeder Lebensphase und passen die Produkte dem Wunsch und der Lebensphase des Kunden an.</p>
          <p>Wir freuen uns Sie kennenzulernen. Bei uns sind Sie keine Kundennummer, wir lernen unsere Kunden und ihre Bedürfnisse kennen. Lassen Sie sich davon überzeugen! Wir freuen uns auf Sie!</p>
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

    <section id="kontakt">
      <div class="container ">
        <div><h3 class="text-center fw-bold">So finden Sie uns</h3></div>
        <br />
        <div class="row gy-4 align-items-center">
            <div class="col ratio ratio-4x3 text-md-center border border-2 border-secondary p-4 rounded rounded-5" >
              <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2593.373458550927!2d8.1699057!3d49.4585578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47963765e0aebf29%3A0xf69a61bb771eee31!2sWeinstra%C3%9Fe%20S%C3%BCd%2020%2C%2067098%20Bad%20D%C3%BCrkheim!5e0!3m2!1sen!2sde!4v1618574946995!5m2!1sen!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <br /> 
            <div class="col-md-6 ">
                <form class="my-form border border-2 border-secondary p-4 rounded rounded-5 shadow shadow-lg" action="traitements/aboutForm.php" method="POST">
                    <div class="form-group fw-bold">
                        <label for="form-name">Name:</label>
                        <input type="text" class="form-control" id="form-name" name="name" placeholder="Name" value="<?php if(isset($name)){echo $name;} ?>" required="required">
                    </div>
                    <div class="form-group fw-bold">
                        <label for="form-email">Ihre Email:</label>
                        <input type="email" class="form-control" id="form-email" name="mail" placeholder="Email Adresse" value="<?php if(isset($mail)){echo $mail;} ?>"  required="required">
                    </div>
                    <div class="form-group fw-bold">
                        <label for="form-subject">Telefon:</label>
                        <input type="phone" class="form-control" id="form-subject" name="telefon" placeholder="Nummer" value="<?php if(isset($telefon)){echo $telefon;} ?>"  required="required">
                    </div>
                    <div class="form-group fw-bold">
                        <label for="form-message">Ihre Nachricht:</label>
                        <textarea class="form-control" id="form-message" name="message" placeholder="Nachricht"  required="required"><?php if(isset($message)){echo $message;} ?></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-1 m-1">
                            <input type="checkbox" class="f" name="datenschutz" id="datenschutz" style="width: auto; margin-bottom: 0px;" required='required'>    
                        </div>
                        <div class="col-md-8 m-1">
                            <label for="datenschutz">Ich habe die Datenschutzerklärung gelesen und bin damit einverstanden</label>
                        </div>  
                    </div>
                    <button class="btn btn-primary mt-1 " type="submit">Senden</button>                
                </form>
            </div>
        </div>
    </div>
    
    </section>

  </div>  
    <?php include "traitements/compteur_visites.php" ?>
  <?php include "includes/pages/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>


  </body>
</html>