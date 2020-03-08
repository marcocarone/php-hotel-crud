<?php
include __DIR__ . '/../database.php';
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
        <h2>Inserisci una nuova stanza</h2>
        <form action="sql_insert.php" method="post">
          <div class="form-group">
            <label for="room_number">Numero stanza</label>
            <input class="form-control" type="text" name="room_number" required value="">
          </div>
          <div class="form-group">
            <label for="beds">Numero letti</label>
            <input class="form-control" type="text" name="beds" required value="">
          </div>
          <div class="form-group">
            <label for="floor">Piano</label>
            <input class="form-control" type="text" name="floor" required value="">
          </div>
          <div class="form-group">
            <input class="form-control btn btn-success" type="submit" value="Salva">
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
