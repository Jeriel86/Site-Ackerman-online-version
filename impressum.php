<?php 
    session_start();
    $pagename = "impressum"; 
    $pageStyles= "<link rel='stylesheet' href='assets/css/about.css'>"; //balise pour ajouter un fichier CSS propre à cette page 
     include "includes/pages/header.php" ?>

<div class="container">
    <h1 class="fw-bold mt-4 text-center text-primary"> Impressum </h1>
    <h3 class="agentur mt-5 fw-bold text-center">Generalagentur Sascha Ackermann</h3> 
    <strong>Anschrift:</strong> Weinstraße Süd 20, 67098 Bad Dürkheim
    <p class="">
        <strong>Email:</strong>  info@ackermann.vkb.de <br>
        <strong>Telefon:</strong> (06322) 79 06 79 0, (06233) 35 34 88 8 <br>
        <strong>Fax:</strong> (06322) 79 06 78 9
    </p>
    <p class="">
        <strong>Agentur Bad Dürkheim:</strong> Weinstraße Süd 20, 67098 Bad Dürkheim <br>
        <strong>Agentur Frankenthal:</strong> Mörscher Straße 1a, 67227 Frankenthal
    </p>
    <p class="">
        <strong>Sitz der Agentur:</strong>  Bad Dürkheim <br>
        <strong>Agenturinhaber:</strong>  
        Sascha Ackermann Gemeldet bei der zuständigen Behörde als gebundener Versicherungsvertreter gem. § 34d Abs. 7 GewO.
    </p>
    <p class="">
        <strong>Eingetragen im Versicherungsvermittlerregister:</strong><br> 
        Deutscher Industrie- und Handwerkskammer (DIHK) e.V.<br>
        Breite Straße 29, 10178 Berlin<br>
        Telefon (0180) 60 05 85-0<br>
        www.vermittlerregister.info<br>
        www.vermittlerregister.org<br>
        Registrierungsnummer: D-D373-94NJN-89
    </p>
    <p class="">
        <strong>Erlaubnis- und Registrierbehörde:</strong><br>
        Industrie- und Handelskammer Pfalz<br>
        Ludwigsplatz 2-4, 67059 Ludwigshafen am Rhein<br>
        Bundesland: Rheinland-Pfalz<br>
        <strong>Land:</strong>  Deutschland
    </p>
    <p class="">
        <strong>Zuständige Aufsichtsbehörde:</strong><br>
        Bundesanstalt für Finanzdienstleistungsaufsicht (BaFin)<br>
        Versicherungs- und Pensionsfondsaufsicht<br>
        Graurheindorfer Str. 108, 53117 Bonn <br>
        <strong>Telefon:</strong>  (0228) 41 08 0 <br>
        <strong>Fax:</strong>  (0228) 41 08 15 50 <br>
        <stron>Email:</stron>  poststelle@bafin.de <br>
    </p>
    <p class="">
        <strong>Schlichtungsstellen:</strong> <br>
        Die zuständigen Schlichtungsstellen bei eventuellen Meinungsverschiedenheiten: <br>
        Versicherungsombudsmann e.V. <br>
        Postfach 08 06 32, 10006 Berlin <br>
    </p>
    <p class="">
        Für private Kranken- und Pflegeversicherungen: <br>
        Ombudsmann <br>
        Private Kranken- und Pflegeversicherung <br>
        Postfach 06 02 22, 10052 Berlin <br>
    </p>
    <p class="">
        <strong>Bildnachweis:</strong> <br>
        luminastock/Shotshop.com <br>
        vadimphoto1@gmail.com/Shotshop.com <br>
        Sergey Nivens/Shotshop.com <br>
        pressmaster/Shotshop.com <br>
    </p>
</div>
    <!-- Footer -->
    <?php include "traitements/compteur_visites.php" ?>
    <?php include "includes/pages/footer.php" ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
</body>
</html>