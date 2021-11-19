<?php

    include 'connection.php';
    $name = $_POST['name'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO info (name, location, phone ) VALUES('$name', '$location', '$phone')";
    $conn->query($sql);
    $conn->close();
    header ('location: home.php')
?>