<?php
$title = "Home - Category";

include "./includes/main_start.php";

?>

<?php
$category = getAllDataCategories();
?>

<H2 class="fw-bold text-center py-5">KATEGORI MENU</H2>

<!-- Carousel wrapper -->
<div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
  <!-- Inner -->
  <div class="carousel-inner py-3">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <?php foreach ($category as $kategori) :
            $kategori_id = $kategori['category_id'];
            $kategori_nama = $kategori['category_name'];
            $kategori_desc = $kategori['category_desc'];
            $kategori_img = $kategori['category_img'];
          ?>
            <div class="col-lg-4 mb-5">
              <div class="card">
                <img src="<?= $kategori_img; ?>" class="card-img-top img-fluid" alt="Waterfall" style="height: 300px; object-fit: cover;">
                <div class="card-body">
                  <h5 class="card-title"><?= $kategori_nama; ?></h5>
                  <p class="card-text">
                    <?= $kategori_desc; ?>
                  </p>
                  <a href="#!" class="btn btn-outline-danger">Lihat Selengkapnya ></a>
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