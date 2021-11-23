<?php
    session_start();
    ini_set('error_reporting', E_ALL);
    ini_set( 'display_errors', 1 );
    $pagename = "about";
    $pageStyles= "<link rel='stylesheet' href='assets/css/about.css'>"; //balise pour ajouter un fichier CSS propre à cette page 
    include "includes/pages/header.php";
    $page = "Über Uns";
    include ("traitements/functions.php");
    $db = db_connection("traitements/secure/DataBaseCredentials.php");
    ?>
    </div>

    <div class="container">
    <?php 
        $req = $db->query("SELECT * FROM editable_section WHERE id_editable_page in  (SELECT id FROM editable_page WHERE title = '$page') ORDER BY rank_in_page");
        $editable_sections = $req->fetchAll();
        foreach ($editable_sections as $section){?> 
            <section class="" id="<?php echo $section["name"] ?>">
              <?php echo $section['source_code'] ?>
            </section>
    <?php } ?> 
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