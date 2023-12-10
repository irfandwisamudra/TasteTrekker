<?php
$title = "Daftar Resep - TasteTrekker";

include "./includes/main_start.php";

$menus = getAllMenus();
?>

<section class="menu-section py-5">
  <div class="container py-3">
    <h2 class="text-center title fw-bold">GALLERY</h2>
    <div class="underline mx-auto"></div>

    <div class="row justify-content-center mt-4">
      <?php foreach ($menus as $menu) : ?>
        <div class="col-lg-4 col-sm-6">
          <div class="thumbnail">
            <img class="img-fluid" src="<?= BASEURL ?>/assets/img/<?= $menu["image_menu"]; ?>" alt="<?= ucwords($menu["name_menu"]); ?>">
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include "./includes/main_end.php"; ?>