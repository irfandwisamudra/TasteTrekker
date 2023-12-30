<?php
$title = "Daftar Resep - TasteTrekker";

include "./includes/main_start.php";

if (isset($_SESSION["login"]) && $_SESSION["login"] == true && $_SESSION["level"] == 1) {
  header("Location: ./admin/index.php");
  exit;
}

$menus = getAllMenusHighlight();
?>

<section class="menu-section py-5">
  <div class="container py-3">
    <h2 class="text-center title fw-bold">GALLERY</h2>
    <div class="underline mx-auto"></div>

    <div class="row justify-content-center mt-4">
      <?php foreach ($menus as $menu) : ?>
        <div class="col-lg-4 col-sm-6">
          <div class="thumbnail py-2">
            <img class="img-fluid rounded" src="<?= BASEURL ?>/assets/img/menu/<?= $menu["image_menu"]; ?>" alt="<?= ucwords($menu["name_menu"]); ?>" style="width: 100%; height: 200px; object-fit: cover;">
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<?php include "./includes/main_end.php"; ?>