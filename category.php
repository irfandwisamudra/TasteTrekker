<?php
$title = "Category - TasteTrekker";

include "./includes/main_start.php";

?>

<?php
$categories = getAllCategories();
$count_categories = countCategories();
?>

<section class="category-section py-5" id="category-section">
  <div class="container py-3">
    <h2 class="text-center title fw-bold">DAFTAR KATEGORI</h2>
    <div class="underline mx-auto"></div>

    <div class="category-page-wrap padding-top-80 padding-bottom-50 mt-4">
      <div class="container">
        <div class="row justify-content-center">
          <?php foreach ($categories as $category) : ?>
            <div class="col-lg-4 col-md-6 col-sm-10 col-12">
              <div class="category-box-layout1">
                <figure class="item-figure"><img src="<?= BASEURL ?>/assets/img/<?= $category["image_category"]; ?>" class="card-img-top" alt="<?= ucwords($category["name_category"]); ?>"></figure>
                <div class="item-content">
                  <h3 class="item-title"><a href="menu.php?category_id=<?= $category["category_id"]; ?>"><?= $category["name_category"]; ?></a></h3>
                  <p class="card-text"><?= $category["desc_category"]; ?></p>
                  <p class="sub-title"> <?= $count_categories; ?> Recipes</p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include "./includes/main_end.php"; ?>