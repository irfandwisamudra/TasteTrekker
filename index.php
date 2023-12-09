<?php
$title = "Home - TasteTrekker";

include "./includes/main_start.php";

$menus = getAllDataMenus();
$categories = getAllDataCategories();
?>

<section class="hero-section">
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
          <button class="btn btn-danger herobutton">MULAI</button>
          <button class="btn btn-outline-danger cta-btn">Mengapa TasteTrekker?</button>
        </div>
      </div>
    </div>

    <div class="col-md-6 text-center">
      <img src="<?= BASEURL ?>/assets/img/hero_section_image.png" alt="Image" class="img-fluid herosectionimage">
    </div>
  </div>
  </div>
</section>

<section class="feature-section">
  <div class="container py-5">
  <h2 class="text-center title">Keistimewaan Kami</h2>
  <div class="underline mx-auto"></div>

  <div class="row justify-content-center mt-4">
    <div class="col-md-4">
      <div class="card h-100 product-card">
        <img src="<?= BASEURL ?>/assets/img/World_of_taste.svg" class="card-img-top" alt="Produk 1">
        <div class="card-body">
          <h3 class="card-title">Dunia Rasa</h3>
          <p class="card-text">Makanan yang rasanya seperti yang Anda buat di rumah</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100 product-card">
        <img src="<?= BASEURL ?>/assets/img/Price_matter.svg" class="card-img-top" alt="Produk 2">
        <div class="card-body">
          <h3 class="card-title">Harga yang Mendasar</h3>
          <p class="card-text">TasteTrekker selalu memberikan harga termurah</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100 product-card">
        <img src="<?= BASEURL ?>/assets/img/Dont_be_hungry.svg" class="card-img-top" alt="Produk 3">
        <div class="card-body">
          <h3 class="card-title">Tidak Lapar</h3>
          <p class="card-text">Kami selalu mengantarkan makanan tepat waktu</p>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<section class="menu-section py-5">
  <div class="container">
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
                <?= $menu["price"]; ?>
              </div>
            </div>
            <!-- Menu actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center"><a class="btn btn-outline-danger mt-auto" href="#">Add to Cart</a></div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="category-section py-5">
  <div class="container">
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
              <div class="text-center"><a class="btn btn-outline-danger mt-auto" href="#">See More</a></div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include "./includes/main_end.php"; ?>