<?php
include __DIR__ . '/../database.php';

$sql = "SELECT * FROM `prenotazioni`";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
    $prenotazioni = [];
    while ($row = $result->fetch_assoc()) {
        $prenotazioni[] = $row;
    }
} elseif ($result) {
    echo "Nessun risultato";
} else {
    echo "Errore query";
}
$conn->close();
 ?>
