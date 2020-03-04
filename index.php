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
    <div class="container-xl">
      <div class="row">
        <div class="col-6">
          <h1>Stanze hotel</h1>
        </div>

      </div>
      <div class="row">
        <div class="col-12">

          <div class="table-responsive-xs">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Id Stanza</th>
                  <th scope="col">Numero Stanza</th>
                  <th scope="col">Piano</th>
                  <th scope="col" class="text-right">Azioni</th>
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
                    <a class="btn btn-primary btn-sm" href="show/show.php?id=<?php echo $room['id']; ?>">
                      Visualizza
                    </a>
                    <a class="btn btn-primary btn-sm" href="">
                      Modifica
                    </a>
                    <a class="btn btn-danger btn-sm" href="">
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
