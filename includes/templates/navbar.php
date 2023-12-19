  <nav class="navbar navbar-expand-lg navbar-light bg-transparant fixed-top">
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
        <?php if (!isset($_SESSION["login"]) || $_SESSION["login"] != true) : ?>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="btn btn-outline-danger mx-2" href="<?= BASEURL ?>/login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-danger" href="<?= BASEURL ?>/sign_up.php">Sign Up</a>
            </li>
          </ul>
        <?php else :
          $user = getUserByEmail($_SESSION["email"]); ?>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle p-0" href="" id="userDropdown" role="button" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user["username"]; ?></span>
                <img class="img-profile rounded-circle img-fluid" src="<?= BASEURL ?>/assets/img/profile/<?= $user["image_user"]; ?>" width="35" height="35">
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= BASEURL ?>/profile/index.php">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="<?= BASEURL ?>/logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </nav>