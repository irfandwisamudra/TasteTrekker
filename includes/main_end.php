  <?php if (!isset($_SESSION["login"]) || $_SESSION["login"] != true || $_SESSION["level"] != 1) : ?>
    <?php require_once("templates/footer.php"); ?>
  <?php else : ?>
    <?php require_once("templates/footer-admin.php"); ?>
  <?php endif; ?>
  </div>

  <!-- Jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

  <?php if (!isset($_SESSION["login"]) || $_SESSION["login"] != true || $_SESSION["level"] != 1) : ?>
    <!-- Preloader -->
    <script src="<?= BASEURL ?>/assets/js/preloader.js"></script>
  <?php else : ?>
    <!-- Required vendors -->
    <script src="<?= BASEURL ?>/assets/libs/vendor/global/global.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
    <script src="<?= BASEURL ?>/assets/js/custom.min.js"></script>
    <script src="<?= BASEURL ?>/assets/js/deznav-init.js"></script>

    <!-- Counter Up -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <!-- Datatable -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="<?= BASEURL ?>/assets/js/datatables.init.js"></script>

    <!-- Jquery Validation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
    <!-- Form validate init -->
    <script src="<?= BASEURL ?>/assets/js/jquery.validate-init.js"></script>

    <!-- Dashboard -->
	  <script src="<?= BASEURL ?>/assets/js/dashboard.js"></script>
  <?php endif; ?>
</body>

</html>