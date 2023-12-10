<?php
$title = "Reset Password - TasteTrekker";

include "./includes/main_start.php";
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
            <h1 class="fs-4 card-title fw-bold mb-4">Reset Password</h1>
            <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
              <div class="mb-3">
                <label class="mb-2 text-muted" for="password">New Password</label>
                <input id="password" type="password" class="form-control" name="password" value="" required autofocus>
                <div class="invalid-feedback">
                  Password harus diisi
                </div>
              </div>

              <div class="mb-3">
                <label class="mb-2 text-muted" for="password-confirm">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirm" required>
                <div class="invalid-feedback">
                  Tolong konfirmasi password baru Anda
                </div>
              </div>

              <div class="d-flex align-items-center">
                <button type="submit" class="btn btn-primary ms-auto">
                  Reset Password
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="./assets/js/register.js"></script>

<?php include "./includes/main_end.php"; ?>