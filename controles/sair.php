<?php
    session_start();
        unset($_SESSION['emailSession']);
        unset($_SESSION['senhalSession']);
    session_destroy();
    header ("Location: ../index.php");

?>
