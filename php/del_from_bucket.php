<?php
    if (file_exists("../data/bucket"))
        system ("rm -f ../data/bucket");
    header("Location: ./bucket.php");
?>