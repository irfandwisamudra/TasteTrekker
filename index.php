<?php
$title = "Home - TasteTrekker";

include "./includes/main_start.php";

$menus = getAllMenus();
$categories = getAllCategories();
?>

<section class="hero-section min-vh-100 d-flex align-items-center">
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="hero_section-content text-left mt-4">
          <h1 class="herotitle">
            <strong>Kirim Makanan Rumahan <br> Ke Seluruh Dunia</strong>
          </h1>
          <p class="herodesc">
            Anda dapat menikmati makanan khas daerah Anda di manapun di dunia. Lidah Anda akan dimanjakan oleh kami.
          </p>

          <div class="hero-btns mt-3">
            <a href="#category-section" class="btn btn-danger herobutton">MULAI</a>
            <a href="#feature-section" class="btn btn-outline-danger cta-btn">Mengapa TasteTrekker?</a>
          </div>
        </div>
      </div>

      <div class="col-md-6 text-center">
        <img src="<?= BASEURL ?>/assets/img/hero_section_image.png" alt="Image" class="img-fluid herosectionimage">
      </div>
    </div>
  </div>
</section>

<section class="feature-section pt-5" id="feature-section">
  <div class="container px-lg-5 py-3">
    <h2 class="text-center title mb-4">Keistimewaan Kami</h2>
    <div class="underline mx-auto"></div>
    <!-- Page Features-->
    <div class="row gx-lg-5">
      <div class="col-lg-4 mb-5">
        <div class="card bg-light border-0 h-100">
          <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
            <div class="feature bg-gradient text-white rounded-3 my-4 mt-n4">
              <img src="<?= BASEURL ?>/assets/img/World_of_taste.svg" alt="Produk 1" class="img-fluid">
            </div>
            <h2 class="fs-4 fw-bold">World Of Taste</h2>
            <p class="mb-0">Makanan yang rasanya seperti yang Anda buat di rumah</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-5">
        <div class="card bg-light border-0 h-100">
          <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
            <div class="feature bg-gradient text-white rounded-3 my-4 mt-n4">
              <img src="<?= BASEURL ?>/assets/img/Price_matter.svg" alt="Produk 2" class="img-fluid">
            </div>
            <h2 class="fs-4 fw-bold">Price Matter</h2>
            <p class="mb-0">TasteTrekker selalu memberikan harga termurah</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-5">
        <div class="card bg-light border-0 h-100">
          <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
            <div class="feature bg-gradient text-white rounded-3 my-4 mt-n4">
              <img src="<?= BASEURL ?>/assets/img/Dont_be_hungry.svg" alt="Produk 3" class="img-fluid">
            </div>
            <h2 class="fs-4 fw-bold">Don't Be Hungry</h2>
            <p class="mb-0">Kami selalu mengantarkan makanan tepat waktu</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="menu-section py-5">
  <div class="container py-3">
    <h2 class="text-center title">Makanan yang Baru Saja Dipesan oleh Pelanggan Kami</h2>
    <div class="underline mx-auto"></div>

    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center mt-4">
      <?php foreach ($menus as $menu) : ?>
        <div class="col">
          <div class="card h-100">
            <!-- Menu image-->
            <img class="card-img-top" src="<?= BASEURL ?>/assets/img/<?= $menu["image_menu"]; ?>" class="card-img-top" alt="<?= ucwords($menu["name_menu"]); ?>" />
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
                <button class="btn btn-outline-danger" onclick="viewRecipe()">
                  <i class="fas fa-book-open"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="category-section py-5" id="category-section">
  <div class="container py-3">
    <h2 class="text-center title">Jelajahi kategori makanan bersama kami</h2>
    <div class="underline mx-auto"></div>

    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center mt-4">
      <?php foreach ($categories as $category) : ?>
        <div class="col">
          <div class="card h-100">
            <!-- Category image-->
            <img class="card-img-top" src="<?= BASEURL ?>/assets/img/<?= $category["image_category"]; ?>" class="card-img-top" alt="<?= ucwords($category["name_category"]); ?>" />
            <!-- Category details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Category name-->
                <h5 class="fw-bolder"><?= $category["name_category"]; ?></h5>
                <!-- Category description-->
                <?= $category["desc_category"]; ?>
              </div>
            </div>
            <!-- Category actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center"><a class="btn btn-outline-danger mt-auto" href="./menu.php?category_id=<?= $category["category_id"]; ?>">Lihat Selengkapnya</a></div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include "./includes/main_end.php"; ?>