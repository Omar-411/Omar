  <!-- nav -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">Ecommerce</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">


          <?php
          if (empty($_SESSION['user'])) { ?>
            <li class="nav-item">

              <a class="nav-link active" aria-current="page" href="#">Login</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Register</a>
            </li>

          <?php } else { ?>

            <li class="nav-item">

              <a class="nav-link active" aria-current="page" href="profile.php"><?= ucfirst($_SESSION['user']['name']) ?></a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
            </li>





          <?php }  ?>



        </ul>
      </div>
    </div>
  </nav>
  <!-- nav -->