<?php
include "database.php";
include  "functions.php";

$results = getAll($conn, "stanze");
$conn->close();
 ?>
