<?php
include "env.php";


// Connect
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn && $conn->connect_error) {
    echo "Connessione fallita: " . $conn->connect_error;
    die();
}
