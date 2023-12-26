  <?php if (!isset($_SESSION["login"]) || $_SESSION["login"] != true || $_SESSION["level"] != 1) : ?>
    <?php require_once("templates/footer.php"); ?>
  <?php else : ?>
      <?php require_once("templates/footer-admin.php"); ?>
    </div>
  <?php endif; ?>

  <!-- Jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

  <!-- Required vendors -->
  <script src="<?= BASEURL ?>/assets/libs/vendor/global/global.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
  <script src="<?= BASEURL ?>/assets/js/custom.min.js"></script>
  <script src="<?= BASEURL ?>/assets/js/deznav-init.js"></script>

  <!-- Datatable -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="<?= BASEURL ?>/assets/js/datatables.init.js"></script>

  <!-- Jquery Validation -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
  <!-- Form validate init -->
  <script src="<?= BASEURL ?>/assets/js/jquery.validate-init.js"></script>
</body>

</html>