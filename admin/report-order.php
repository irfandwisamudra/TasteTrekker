<?php
$title = "Laporan Penjualan - TasteTrekker Admin";

include "../includes/main_start.php";

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true || $_SESSION["level"] != 1) {
  header("Location: ../index.php");
  exit;
}
?>



<?php include "../includes/main_end.php"; ?>
