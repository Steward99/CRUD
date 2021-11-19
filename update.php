<?php
    include 'connection.php';
    $id = $_GET['id'];
    $sql = "SELECT name,location,phone from info WHERE id=$id";
    $result = $conn -> query($sql);
    while( $row = $result -> fetch_assoc()){
        echo "<form autocomplete='off' action='update_data.php' method='POST'>";
        echo "<input type='hidden' name=id value=$id>";
        echo "<input type='text' name='name' value=' $row[name] ' placeholder='Enter Name'>";
        echo "<input type='text' name='location' value=' $row[location] ' placeholder='Enter Location'>";
        echo "<input type='tel' name='phone' value=' $row[phone] ' placeholder='Enter Phone Numbers'>";
        echo "<input type='submit' name='save' value='UPDATE' style='background-color:lightblue;'>";
        echo "</form>";
    }

?>