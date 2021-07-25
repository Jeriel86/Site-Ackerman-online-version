<?php
    session_start();
    $_SESSION['auth'] = NULL;
    session_destroy();
    header("location: ../auth/")
?>
