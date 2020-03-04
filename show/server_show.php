<?php
include "database_show.php";

$id_room = $_GET["id"];
$sql = "SELECT * FROM `stanze` WHERE `id` = $id_room ";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $room = $result->fetch_assoc();
    //var_dump($room);
} elseif ($result) {
    echo "Nessun risultato";
} else {
    echo "Errore query";
}
$conn->close();

 ?>
