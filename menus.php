<?php
$title = "Daftar Menu - TasteTrekker";

include "./includes/main_start.php";

if (isset($_SESSION["login"]) && $_SESSION["login"] == true && $_SESSION["level"] == 1) {
  header("Location: ./admin/index.php");
  exit;
}
?>

<?php
$menus = getAllMenusWithRecipes();
?>

<div class="menu-section py-5">
  <div class="container py-3">
    <h2 class="text-center title fw-bold">DAFTAR MENU</h2>
    <div class="underline mx-auto"></div>

    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center mt-4">
      <?php foreach ($menus as $menu) : ?>
        <div class="col my-3">
          <div class="card h-100">
            <!-- Menu image-->
            <img class="card-img-top" src="<?= BASEURL ?>/assets/img/menu/<?= $menu["image_menu"]; ?>" class="card-img-top" alt="<?= ucwords($menu["name_menu"]); ?>" />
            <!-- Menu details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Menu name-->
                <h5 class="fw-bolder"><?= $menu["name_menu"]; ?></h5>
                <!-- Menu price-->
                Rp<?= number_format($menu["price"], 0, ',', '.'); ?>
              </div>
            </div>
            <!-- Menu actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="d-flex justify-content-between">
                <button class="btn btn-outline-danger" onclick="addToCart()">
                  <i class="fas fa-cart-plus"></i>
                </button>
                <a href="./recipes.php?recipe_id=<?= $menu["recipe_id"]; ?>" class="btn btn-outline-danger">
                  <i class="fas fa-book-open"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<?php include "./includes/main_end.php"; ?>