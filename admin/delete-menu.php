<?php
require_once "../includes/functions.php";

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true || $_SESSION["level"] != 1) {
  header("Location: ../index.php");
  exit;
}

if (isset($_GET["menu_id"])) {
  $menu = getMenuByMenuId($_GET["menu_id"]);

  if ($menu === NULL) {
    echo "<script>
            alert('Menu ID Invalid!');
            document.location.href = './menus.php';
          </script>";
    exit;
  }

  if (deleteImage($menu["image_menu"], "../assets/img/menu/")) {
    if (deleteMenuByMenuId($_GET["menu_id"])) {
      header("Location: ./menus.php");
      exit;
    } else {
      echo "<script>
              alert('Gagal menghapus menu!');
              document.location.href = 'menus.php';
            </script>";
    }
  } else {
    echo "<script>
            alert('File gambar tidak ditemukan!');
            document.location.href = 'menus.php';
          </script>";
  }
} else {
  echo "<script>
          alert('Menu ID Invalid!');
          document.location.href = 'menus.php';
        </script>";
}
