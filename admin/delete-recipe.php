<?php
require_once "../includes/functions.php";

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true || $_SESSION["level"] != 1) {
  header("Location: ../index.php");
  exit;
}

if (isset($_GET["recipe_id"])) {
  $recipe = getRecipeByRecipeId($_GET["recipe_id"]);

  if ($recipe === NULL) {
    echo "<script>
            alert('Recipe ID Invalid!');
            document.location.href = './recipes.php';
          </script>";
    exit;
  }

  if (deleteImage($recipe["image_recipe"], "../assets/img/recipe/")) {
    if (deleteRecipeByRecipeId($_GET["recipe_id"])) {
      header("Location: ./recipes.php");
      exit;
    } else {
      echo "<script>
              alert('Gagal menghapus resep!');
              document.location.href = 'recipes.php';
            </script>";
    }
  } else {
    echo "<script>
            alert('File gambar tidak ditemukan!');
            document.location.href = 'recipes.php';
          </script>";
  }
} else {
  echo "<script>
          alert('Recipe ID Invalid!');
          document.location.href = 'recipes.php';
        </script>";
}
