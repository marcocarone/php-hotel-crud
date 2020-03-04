<?php
include "env.php";


// Connect
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn && $conn->connect_error) {
    echo "Connessione fallita: " . $conn->connect_error;
    die();
}

$sql = "SELECT id, room_number, floor FROM `stanze`";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
    $rooms = [];
    while ($row = $result->fetch_assoc()) {
        $rooms[] = $row;
    }
} elseif ($result) {
    echo "Nessun risultato";
} else {
    echo "Errore query";
}
$conn->close();
