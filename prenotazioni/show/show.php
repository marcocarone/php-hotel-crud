<?php
include "server_show.php";
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../public/css/style.css">
  <title>Show</title>
</head>
<?php include __DIR__ . "/../../partials/header.php"; ?>
<body>
  <div class="container margin-top">



    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Dettagli della prenotazione</h5>
          </div>
          <div class="card-body">
            <ul>
              <li>Id prenotazione: <?php echo $prenotazione['id']; ?></li>
              <li>Numero stanza: <?php
              if ($prenotazione['room_number'] == NULL) {
                echo "Non presente";
              }
              echo $prenotazione['room_number']; ?></li>
              <li>Nome e Cognome Ospite: <?php echo $prenotazione['name'] . " ". $prenotazione['lastname'] ; ?></li>
            </ul>
          </div>
        </div>


      </div>
    </div>


</body>

</html>
