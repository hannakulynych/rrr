<?php
 include "db_connection.php";
 $title = $_POST["title"];
 $price = $_POST["price"];
 $sql = "INSERT INTO 'product' VALUES ($title, $price)";
if($conn->query($sql)=== TRUE) ; {
    echo "Dodales ogloszenie";
} else {
    echo "Coś poszlo nie tak:/";
 }
 $conn->close();
?>