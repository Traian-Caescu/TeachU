<?php
    include 'connect.php';
    $deletequery = "DELETE FROM students WHERE ID=?";
    $stmt = $mysqli->prepare($deletequery);
    $stmt->bind_param('s', $_GET['id']);
    $stmt->execute();
    header("location: display.php");
?>
