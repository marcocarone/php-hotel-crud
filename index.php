<?php include "server.php"; ?>



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

<?php include __DIR__ . "/partials/header.php"; ?>

  <main>
    <div class="container margin-top">
      <?php if(!empty($_GET['room_id'])) { ?>
          <div class="alert alert-danger">
            Hai cancellato la stanza id : <?php echo $_GET['room_id'] ?>
          </div>
       <?php } ?>
      <div class="row">
        <div class="col-12">
          <h2>Stanze hotel</h2>
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
                if (!empty($results)) {
                  foreach ($results as $room) {
                  ?>
                <tr>
                  <td><?php echo $room['id']; ?></td>
                  <td><?php echo $room['room_number']; ?></td>
                  <td><?php echo $room['floor']; ?></td>
                  <td class="text-right">

                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Azioni
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="show/show.php?id=<?php echo $room['id']; ?>">Info</a>
                        <a class="dropdown-item" href="update/update.php?id=<?php echo $room['id']; ?>">Modifica</a>
                        <form action="delete/server_delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $room['id'] ?>">
                        <input class="dropdown-item" type="submit" value="Elimina">
                        </form>
                      </div>

                    </div>

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

  <script src="public/js/script.js" charset="utf-8"></script>
</body>

</html>
