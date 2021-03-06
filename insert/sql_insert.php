<?php
  include __DIR__ . '/../database.php';


  if (empty($_POST['room_number'])) {
    die('Non hai inserito il numero di stanza');
  }
  if (empty($_POST['floor'])) {
    die('Non hai inserito il piano');
  }
  if (empty($_POST['beds'])) {
    die('Non hai inserito il numero di letti');
  }



  // prepare and bind
  $sql = "INSERT INTO `stanze` (room_number, floor, beds, created_at, updated_at)
  VALUES (?, ?, ?, NOW(), NOW());";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("iii", $roomNumber, $floor, $beds);
  // set parameters and execute
  $roomNumber = $_POST['room_number'];
  $floor = $_POST['floor'];
  $beds = $_POST['beds'];

  $stmt->execute();

  if ($stmt->affected_rows > 0) {
      header("Location: $base_path/index.php");
  } else {
      echo 'problema riscontrato con sql';
  }

  // VERSIONE SENZA PREPARED STATEMENTS
  // $roomNumber = $_POST['room_number'];
  // $floor = $_POST['floor'];
  // $beds = $_POST['beds'];
  //
  //
  // $sql = "INSERT INTO `stanze` (room_number, floor, beds, created_at, updated_at)
  // VALUES ($roomNumber, $floor, $beds, NOW(), NOW());";
  //
  // $result = $conn->query($sql);
  //
  // if ($result) {
  //   header("Location: $base_path/index.php");
  // } else {
  //   echo 'problema riscontrato con sql';
  // }


  $conn->close();
?>
