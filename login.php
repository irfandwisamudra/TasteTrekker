<?php
$title = "Login - TasteTrekker";

include "./includes/main_start.php";
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
            <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
            <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
              <div class="mb-3">
                <label class="form-label mb-2" for="email">E-Mail Address</label>
                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                <div class="invalid-feedback">
                  Email tidak valid
                </div>
              </div>

              <div class="mb-3">
                <div class="mb-2 w-100">
                  <label class="form-label" for="password">Password</label>
                  <a href="forgot.php" class="float-end">
                    Lupa Password?
                  </a>
                </div>
                <input id="password" type="password" class="form-control" name="password" required>
                <div class="invalid-feedback">
                  Password harus diisi
                </div>
              </div>

              <div class="d-flex align-items-center">
                <div class="form-check">
                  <input type="checkbox" name="remember" id="remember" class="form-check-input">
                  <label for="remember" class="form-check-label">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary ms-auto">
                  <i class="fas fa-sign-in-alt"></i> Login
                </button>
              </div>
            </form>
          </div>
          <div class="card-footer py-3 border-0">
            <div class="text-center">
              Belum punya akun? <a href="sign_up.php">Sign Up</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="./assets/js/register.js"></script>

<?php include "./includes/main_end.php"; ?>
