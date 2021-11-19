<?php

    include 'connection.php';
    $sql = "SELECT * from info";
    $result = $conn->query($sql);
    while($row = $result -> fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['location'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td><button class='edit'><a href='update.php?id=". $row['id'] ."' class='edit'>EDIT</a></button></td>";
        echo "<td><button class='delete'><a href='delete.php?id=". $row['id'] ."' class='delete'>DELETE</a></button></td>";
        echo "</tr>";
    }
    $conn->close();

?>