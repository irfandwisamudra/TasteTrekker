<?php
$title = "Home - TasteTrekker";

include "./includes/main_start.php";

$menus = getAllDataMenus();
$categories = getAllDataCategories();
?>

<section class="hero-section text-center">
  <img src="<?= BASEURL ?>/assets/img/hero_section_image.png" alt="Image" class="img-fluid herosectionimage">

  <div class="hero_section-content mt-4">
    <p class="herotitle">
      <strong> Kirim <br> Makanan Rumahan <br> <span class="worldwide">Ke Seluruh Dunia</span></strong>
    </p>
    <p class="herodesc">
      Anda dapat menikmati makanan khas daerah Anda di manapun di <br> dunia. Lidah Anda akan dimanjakan oleh kami.
    </p>

    <div class="hero-btns mt-3">
      <button class="btn btn-primary herobutton">MULAI</button>
      <button class="btn btn-outline-primary cta-btn">Mengapa TasteTrekker?</button>
    </div>
  </div>
</section>

<section class="container my-5">
  <h2 class="text-center title">Keistimewaan Kami</h2>
  <div class="underline mx-auto"></div>

  <div class="row justify-content-center mt-4">
    <div class="col-md-4">
      <div class="card product-card">
        <img src="<?= BASEURL ?>/assets/img/World_of_taste.svg" class="card-img-top" alt="Produk 1">
        <div class="card-body">
          <h3 class="card-title">Dunia Rasa</h3>
          <p class="card-text">Makanan yang rasanya seperti <br />yang Anda buat di rumah</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card product-card">
        <img src="<?= BASEURL ?>/assets/img/Price_matter.svg" class="card-img-top" alt="Produk 2">
        <div class="card-body">
          <h3 class="card-title">Harga yang Mendasar</h3>
          <p class="card-text">TasteTrekker selalu memberikan <br />harga termurah</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card product-card">
        <img src="<?= BASEURL ?>/assets/img/Dont_be_hungry.svg" class="card-img-top" alt="Produk 3">
        <div class="card-body">
          <h3 class="card-title">Tidak Lapar</h3>
          <p class="card-text">Kami selalu mengantarkan <br />makanan tepat waktu</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container my-5">
  <h2 class="text-center title">Makanan yang Baru Saja Dipesan oleh Pelanggan Kami</h2>
  <div class="underline mx-auto"></div>

  <div class="row justify-content-center mt-4">
    <?php foreach ($menus as $menu) : ?>
      <div class="col-md-4 mb-4">
        <div class="card product-card">
          <img src="<?= BASEURL ?>/assets/img/<?= $menu["image_menu"]; ?>" class="card-img-top" alt="<?= ucwords($menu["image_menu"]); ?>" height="200px">
          <div class="card-body">
            <h3 class="card-title"><?= $menu["name_menu"]; ?></h3>
            <p class="card-text"><?= $menu["price"]; ?></p>
            <button class="btn btn-success buy-button">Order Now</button>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="container my-5">
  <h2 class="text-center title">Jelajahi kategori makanan bersama kami</h2>
  <div class="underline mx-auto"></div>

  <div class="row justify-content-center mt-4">
    <?php foreach ($categories as $category) : ?>
      <div class="col-md-4 mb-4">
        <div class="card product-card">
          <img src="<?= BASEURL ?>/assets/img/<?= $category["image_category"]; ?>" class="card-img-top" alt="<?= ucwords($category["image_category"]); ?>" height="200px">
          <div class="card-body">
            <h3 class="card-title"><?= $category["name_category"]; ?></h3>
            <p class="card-text"><?= $category["desc_category"]; ?></p>
            <button class="btn btn-info see-more-button">See More</button>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php include "./includes/main_end.php"; ?>