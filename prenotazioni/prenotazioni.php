<?php include "sql_prenotazioni.php"; ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../public/css/style.css">

  <title>Hotel</title>
</head>

<body>

<?php include __DIR__ . "/../partials/header.php"; ?>

  <main>
    <div class="container margin-top">

      <div class="row">
        <div class="col-12">
          <h2>Prenotazioni</h2>
        </div>

      </div>
      <div class="row">
        <div class="col-12">

          <div class="table-responsive-xs">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Prenotazione id</th>

                  <th scope="col" class="text-right">Azione</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if (!empty($results)) {
                  foreach ($results as $prenotazione) {
                  ?>
                <tr>
                  <td><?php echo $prenotazione['id']; ?></td>

                  <td class="text-right">

                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Azioni
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="show/show.php?id=<?php echo $prenotazione['id']; ?>">Info</a>

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

  <script src="../public/js/script.js" charset="utf-8"></script>
</body>

</html>
