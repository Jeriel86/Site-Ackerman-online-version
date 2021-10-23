<html lang="de">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/logo/favicon.png" type="image/x-icon">
  <title> <?php echo $pagename ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php echo $pageStyles ?>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <style>
    /*pour le tootlip*/


    .tooltip-inner {
      color : whitesmoke;
      background-color: #3B5998;
      text-align: justify;
      padding: 10px 20px;
      font-style: italic
    }
    .tooltip.bs-tooltip-right .arrow:before {
        border-right-color: #3B5998 !important;
    }
    .tooltip.bs-tooltip-left .arrow:before {
        border-right-color: #3B5998 !important;
    }
    .tooltip.bs-tooltip-bottom .arrow:before {
        border-right-color: #3B5998 !important;
    }
    .tooltip.bs-tooltip-top .arrow:before {
        border-right-color: #3B5998 !important;
    }

  </style>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-light bg-light menu p-2">
    <div class="container" >
      <div>
        <a href="index.php" class="d-flex  align-items-center text-decoration-none "><img class="logo align-middle" src="assets/bilder/logo.png " style="width: 150px; height: auto;"> <div class="d-flex flex-column h4 text-dark"><span>Sascha Ackermann</span><span>Ihre   Beamtenberatung</span></div></a>
      </div>
      <div class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Wunsche.php">Beratung</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">Über Uns</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php#kontakt">Kontakt</a>
            </li>

        </ul>
      </div>
    </div>
  </nav>
  <?php 
  include "alert.php";
  ?>
