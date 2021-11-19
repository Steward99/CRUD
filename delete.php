<?php
    include 'connection.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM info WHERE id=$id";
    $conn -> query($sql);
    $conn -> close();
    header ('location: home.php');
?>