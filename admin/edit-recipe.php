<?php
$title = "Edit Recipe - TasteTrekker Admin";

require_once "../includes/main_start.php";

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true || $_SESSION["level"] != 1) {
  header("Location: ../index.php");
  exit;
}
?>

<?php require_once "../includes/main_end.php"; ?>