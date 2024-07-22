<?php
    $servername = "localhost";
    $username = "student";
    $password= "website";
    $dbasename = "labwork";

    $mysqli = new mysqli($servername, $username, $password, $dbasename);

    if ($mysqli->connect_errno) {
        printf("The connection has failled: %s\n", $mysqli->connect_error);
        exit();
    }
?>
