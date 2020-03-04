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

  <header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <div class="container-xl">
      <a class="navbar-brand" href="#">Hotel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Stanze<span class="sr-only">(current)</span></a>
          </li>

        </ul>
      </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="container-xl margin-top">
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
                if (!empty($rooms)) {
                  foreach ($rooms as $room) {
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
                        <a class="dropdown-item" href="#">Modifica</a>
                        <a class="dropdown-item" href="#">Elimina</a>
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
