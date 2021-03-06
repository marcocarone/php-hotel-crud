<?php
  include __DIR__ . '/../database.php';

  if (empty($_POST['id'])) {
      die('Id non inserito');
  }
  if (empty($_POST['room_number'])) {
      die('No room number');
  }
  if (empty($_POST['floor'])) {
      die('No floor');
  }
  if (empty($_POST['beds'])) {
      die('No beds');
  }

  $id_room = $_POST['id'];

  $sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
      $room = $result->fetch_assoc();
  // var_dump($room);
  } elseif ($result) {
      echo "id non esistente";
  } else {
      echo "Errore query";
  }


//se esiste quella stanza allora


  // prepare and bind
  $sql = "UPDATE `stanze` SET `room_number` = ?, `beds` = ?, `floor` = ? WHERE `id` = $id_room";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("iii", $roomNumber, $floor, $beds);
  // set parameters and execute
  $roomNumber = $_POST['room_number'];
  $floor = $_POST['floor'];
  $beds = $_POST['beds'];

  $stmt->execute();

  if ($stmt->affected_rows > 0) {
      header("Location: $base_path/show/show.php?id=$id_room");
  } else {
      echo 'KO';
  }
  
  // VERSIONE SENZA PREPARED STATEMENTS
  // $roomNumber = $_POST['room_number'];
  // $floor = $_POST['floor'];
  // $beds = $_POST['beds'];
  // $sql = "UPDATE `stanze`
  // SET `room_number` = $roomNumber, `beds` = $floor, `floor` = $beds
  // WHERE `id` = $id_room";
  //
  // $result = $conn->query($sql);
  //
  // if ($result) {
  //     header("Location: $base_path/show/show.php?id=$id_room");
  // } else {
  //     echo 'KO';
  // }


  $conn->close();
