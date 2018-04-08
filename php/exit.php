<?php
    session_start();
    unset($_SESSION["logged_on_user"]);
    system("rm -f ../data/bucket");
    header("Location: ../index.php");
?>
