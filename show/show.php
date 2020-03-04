<?php
include "server_show.php";
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../public/css/style.css">
  <title>Show</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-right">
        <a class="btn btn-success" href="../index.php">Torna alla home</a>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Dettagli della stanza</h3>
            </div>
            <div class="panel-body">
              <ul>
                <li>Id stanza: <?php echo $room['id']; ?></li>
                <li>Numero stanza: <?php echo $room['room_number']; ?></li>
                <li>Piano: <?php echo $room['floor']; ?></li>
                <li>Numero letti: <?php echo $room['beds']; ?></li>
              </ul>
            </div>
          </div>


        </div>
      </div>
    </div>

</body>

</html>
