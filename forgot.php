<?php
$title = "Forgot Password - TasteTrekker";

require_once "./includes/main_start.php";

if (isset($_SESSION["login"]) && $_SESSION["login"] == true && $_SESSION["level"] == 1) {
  header("Location: ./admin/index.php");
  exit;
}
?>

<section class="register-section h-100 py-5">
  <div class="container h-100 py-3">
    <div class="row justify-content-sm-center h-100">
      <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
        <div class="card shadow-lg">
          <div class="card-body p-5">
            <div class="text-center mb-4">
              <img src="<?= BASEURL ?>/assets/img/logo/TasteTrekker-square.svg" alt="TasteTrekker-logo" class="img-fluid">
            </div>
            <h1 class="fs-4 card-title fw-bold mb-4">Forgot Password</h1>
            <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
              <div class="mb-3">
                <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                <div class="invalid-feedback">
                  Email tidak valid
                </div>
              </div>

              <div class="d-flex align-items-center">
                <button type="submit" class="btn btn-primary ms-auto">
                  Send Link
                </button>
              </div>
            </form>
          </div>
          <div class="card-footer py-3 border-0">
            <div class="text-center">
              Ingat password Anda? <a href="login.php" class="text-dark">Login</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="./assets/js/register.js"></script>

<?php require_once "./includes/main_end.php"; ?>