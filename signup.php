<?php
$title = "Sign Up - TasteTrekker";

include "./includes/main_start.php";

if (isset($_SESSION["login"]) && $_SESSION["login"] == true && $_SESSION["level"] == 1) {
  header("Location: ./admin/index.php");
  exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["signup"])) {
  register($_POST);
}
?>

<section class="register-section min-vh-100 py-5">
  <div class="container h-100 py-3">
    <div class="row justify-content-sm-center h-100">
      <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
        <div class="card shadow-lg">
          <div class="card-body p-5">
            <div class="text-center mb-4">
              <img src="<?= BASEURL ?>/assets/img/logo/TasteTrekker-square.svg" alt="TasteTrekker-logo" class="img-fluid">
            </div>
            <h1 class="fs-4 card-title fw-bold mb-4 text-center">Sign Up</h1>
            <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
              <div class="mb-3">
                <label class="mb-2 text-muted" for="username">Username</label>
                <input id="username" type="text" class="form-control" name="username" value="" required autofocus>
                <div class="invalid-feedback">
                  Username harus diisi
                </div>
                <?php if (isset($_SESSION["usernameExists"])) : ?>
                  <small class="text-danger"><?= $_SESSION["usernameExists"]; ?></small>
                  <?php unset($_SESSION["usernameExists"]); ?>
                <?php endif; ?>
              </div>

              <div class="mb-3">
                <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                <input id="email" type="email" class="form-control" name="email" value="" required>
                <div class="invalid-feedback">
                  Email tidak valid
                </div>
                <?php if (isset($_SESSION["emailExists"])) : ?>
                  <small class="text-danger"><?= $_SESSION["emailExists"]; ?></small>
                  <?php unset($_SESSION["emailExists"]); ?>
                <?php endif; ?>
              </div>

              <div class="mb-3">
                <label class="mb-2 text-muted" for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
                <div class="invalid-feedback">
                  Password wajib diisi
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label" for="confirm-password">Konfirmasi Password</label>
                <input id="confirm-password" type="password" class="form-control" name="confirm-password" required>
                <div class="invalid-feedback">
                  Konfirmasi Password harus diisi
                </div>
              </div>

              <p class="form-text text-muted mb-3">
                By registering you agree with our <a href="terms_of_use.php">terms of use</a> and <a href="privacy_policy.php">privacy policy</a>.
              </p>

              <button type="submit" class="btn btn-primary ms-auto" name="signup">
                <i class="fas fa-sign-in-alt"></i> Sign Up
              </button>
            </form>
          </div>
          <div class="card-footer py-3 border-0">
            <div class="text-center">
              Sudah punya akun? <a href="login.php" class="text-dark">Login</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="./assets/js/register.js"></script>

<?php include "./includes/main_end.php"; ?>