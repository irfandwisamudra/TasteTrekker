<?php
require_once "../includes/functions.php";

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true || $_SESSION["level"] != 1) {
  header("Location: ../index.php");
  exit;
}

if (isset($_GET["order_id"])) {
  $order = getOrderByOrderId($_GET["order_id"]);

  if ($order === NULL) {
    echo "<script>
            alert('Order ID Invalid!');
            document.location.href = './orders.php';
          </script>";
    exit;
  }

  if (deleteOrderByOrderId($_GET["order_id"])) {
    header("Location: ./orders.php");
    exit;
  } else {
    echo "<script>
              alert('Gagal menghapus resep!');
              document.location.href = 'orders.php';
            </script>";
  }
} else {
  echo "<script>
          alert('Order ID Invalid!');
          document.location.href = 'orders.php';
        </script>";
}
