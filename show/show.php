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

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
      </ol>
    </nav>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Dettagli della stanza</h5>
          </div>
          <div class="card-body">
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


</body>

</html>
