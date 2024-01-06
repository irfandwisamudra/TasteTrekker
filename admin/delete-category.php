<?php
require_once "../includes/functions.php";

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true || $_SESSION["level"] != 1) {
  header("Location: ../index.php");
  exit;
}

if (isset($_GET["category_id"])) {  
  $category = getCategoryByCategoryId($_GET["category_id"]);

  if ($category === NULL) {
    echo "<script>
            alert('Category ID Invalid!');
            document.location.href = './categories.php';
          </script>";
    exit;
  }

  if (deleteImage($category["image_category"], "../assets/img/category/")) {
    if (deleteCategoryByCategoryId($_GET["category_id"])) {
      header("Location: ./categories.php");
      exit;
    } else {
      echo "<script>
              alert('Gagal menghapus kategori!');
              document.location.href = 'categories.php';
            </script>";
    }
  } else {
    echo "<script>
            alert('File gambar tidak ditemukan!');
            document.location.href = 'categories.php';
          </script>";
  }
} else {
  echo "<script>
          alert('Category ID Invalid!');
          document.location.href = 'categories.php';
        </script>";
}
