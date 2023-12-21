<?php
$title = "Kategori Menu - TasteTrekker";

include "./includes/main_start.php";
?>

<?php
$categories = getAllCategories();
?>
<div class="container pt-3">
  <div class="row mt-5">
    <div class="col">
      <h2 class="fw-bold text-center">KATEGORI MENU</h2>
    </div>
  </div>
</div>

<div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
  <div class="carousel-inner py-3">
    <div class="carousel-item active">
      <div class="container">
        <div class="row justify-content-center">
          <?php foreach ($categories as $category) : ?>
            <div class="col-lg-4 mb-5">
              <div class="card">
                <img src="assets/img/category/<?= $category['image_category']; ?>" class="card-img-top img-fluid" alt="Waterfall" style="height: 300px; object-fit: cover;" alt="<?= ucwords($category["name_category"]); ?>">
                <div class="card-body">
                  <h5 class="card-title"><?= $category["name_category"]; ?></h5>
                  <p class="card-text">
                    <?= $category["desc_category"]; ?>
                  </p>
                  <a href="menus.php?category_id=<?= $category['category_id']; ?>" class="btn btn-outline-danger">Lihat Selengkapnya <i class="fa-solid fa-angles-right"></i></a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "./includes/main_end.php"; ?>