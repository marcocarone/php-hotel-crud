<?php
include __DIR__ . '/../database.php';


if(!empty($_GET['id'])) {
  $id_room = $_GET["id"];
}

$sql = "SELECT * FROM `stanze` WHERE `id` = $id_room ";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $room = $result->fetch_assoc();
    // var_dump($room);
} elseif ($result) {
    echo "id non esistente";
} else {
    echo "Errore query";
}
$conn->close();

 ?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../public/css/style.css">
  <title>Document</title>
</head>
<body>
  <?php include __DIR__ . "/../partials/header.php"; ?>
  <div class="container margin-top">
    <div class="row">
      <div class="col-12">
        <form action="sql_update.php" method="post">
          <div class="form-group">
            <label for="room_number">Numero stanza</label>
            <input class="form-control" type="text" name="room_number" value=" <?php echo $room["room_number"]?> ">
          </div>
          <div class="form-group">
            <label for="beds">Numero letti</label>
            <input class="form-control" type="text" name="beds" value="<?php echo $room["beds"]?>">
          </div>
          <div class="form-group">
            <label for="floor">Piano</label>
            <input class="form-control" type="text" name="floor" value="<?php echo $room["floor"]?>">
          </div>
          <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $room["id"] ?>">
            <input class="form-control btn btn-success" type="submit" value="Salva">
          </div>
        </form>
      </div>
    </div>
  </div>


</body>
</html>
