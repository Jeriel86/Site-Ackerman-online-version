<?php 
  ///vidange des variables sessions
  if (isset($_SESSION['messageFlash']) && !empty($_SESSION['messageFlash'])) { 
    $_SESSION['messageFlash'] = null ;
  }
  if (isset($_SESSION['submitedData']) && !empty($_SESSION['submitedData'])){
    $_SESSION['submitedData'] = null ;
}
  ?>