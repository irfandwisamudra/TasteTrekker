  <?php if (!isset($_SESSION["login"]) || $_SESSION["login"] != true || $_SESSION["level"] != 1) : ?>
    <?php require_once("templates/footer.php"); ?>
  <?php else : ?>
      <?php require_once("templates/footer-admin.php"); ?>
    </div>
  <?php endif; ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>