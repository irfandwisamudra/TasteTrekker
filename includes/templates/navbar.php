  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?= BASEURL ?>/index.php">
        <img src="<?= BASEURL ?>/assets/img/logo/TasteTrekker.svg" alt="Logo TasteTrekker" height="30px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL ?>/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL ?>/recipes.php">Recipes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL ?>/category.php">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL ?>/gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <form class="d-flex" action="" method="get">
              <input class="form-control mx-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-danger" type="submit">Search</button>
            </form>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="btn btn-outline-danger mx-2" href="<?= BASEURL ?>/login.php"">Login</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-danger" href="<?= BASEURL ?>/login.php"">Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>