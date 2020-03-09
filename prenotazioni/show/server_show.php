<?php
include __DIR__ . '/../../database.php';

$id_prenotazione = $_GET["id"];
$sql = "SELECT prenotazioni.*, stanze.room_number, ospiti.name , ospiti.lastname FROM `prenotazioni` LEFT JOIN prenotazioni_has_ospiti ON prenotazioni_has_ospiti.prenotazione_id = prenotazioni.id LEFT JOIN ospiti ON ospiti.id = prenotazioni_has_ospiti.ospite_id LEFT JOIN stanze ON stanze.id = prenotazioni.stanza_id WHERE prenotazioni.id = $id_prenotazione";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $prenotazione = $result->fetch_assoc();
    // var_dump($room);
} elseif ($result) {
    echo "Nessun risultato";
} else {
    echo "Errore query";
}
$conn->close();

 ?>
