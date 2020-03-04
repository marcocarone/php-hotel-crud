<?php include "database.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="public/css/style.css">
  <title>Hotel</title>
</head>

<body>


  <main>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h1>Le stanze dell'hotel</h1>
        </div>

      </div>
      <div class="row">
        <div class="col-sm-12">

          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Id Stanza</th>
                  <th>Numero Stanza</th>
                  <th>Piano</th>
                  <th class="text-right">Azioni</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if (!empty($rooms)) {
                  foreach ($rooms as $room) {
                  ?>
                <tr>
                  <td><?php echo $room['id']; ?></td>
                  <td><?php echo $room['room_number']; ?></td>
                  <td><?php echo $room['floor']; ?></td>
                  <td class="text-right">
                    <a class="btn btn-info" href="show/show.php?id=<?php echo $room['id']; ?>">
                      Visualizza
                    </a>
                    <a class="btn btn-warning" href="">
                      Modifica
                    </a>
                    <a class="btn btn-danger" href="">
                      Cancella
                    </a>
                  </td>
                </tr>
                <?php
                }
                  }
                  ?>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </main>


</body>

</html>
