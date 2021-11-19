<?php

    include 'connection.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];
    $sql = "UPDATE info SET name = '$name', location ='$location', phone = '$phone'  WHERE id=$id";
    $conn -> query($sql);
    header ("location: home.php");
    $conn -> close();
?>							