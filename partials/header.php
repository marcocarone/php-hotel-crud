<?php include __DIR__ . "/../env.php"; ?>

<header>

  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
    <div class="container-xl">
    <a class="navbar-brand" href="#">Hotel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo $base_path ?>">Stanze<span class="sr-only">(current)</span></a>
        </li>

      </ul>
    </div>
    </div>
  </nav>
</header>
