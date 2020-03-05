<?php
  include __DIR__ . '/../database.php';

  if(empty($_POST['id'])) {
    die('Id non corretto');
  }

  $roomId = $_POST['id'];

  $sql = "SELECT * FROM `stanze` WHERE `id`='$roomId'";
  $result = $conn->query($sql);
  if ($result && $result->num_rows == 0) {
    die('Id non corretto');
  }


  $sql = "DELETE FROM `stanze` WHERE `id` =  '$roomId'";
  $result = $conn->query($sql);
  if($result ) {
    echo "stanza cancellata";
  } else {
      echo 'non è andata a buon fine la query';
  }

  $conn->close();
