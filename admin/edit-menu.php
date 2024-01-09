<?php
$title = "Edit Menu - TasteTrekker Admin";

require_once "../includes/main_start.php";

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true || $_SESSION["level"] != 1) {
  header("Location: ../index.php");
  exit;
}

if (isset($_GET["menu_id"])) {
  $menu = getMenuByMenuId($_GET["menu_id"]);

  if ($menu === NULL) {
    echo "<script>
            alert('Menu ID Invalid!');
            documents.location.href = 'menus.php';
          </script>";
  }

  if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
    if ($_FILES["new_image_menu"]["error"] !== 4) {
      $validatedImage = validateImage($_FILES["new_image_menu"], "../assets/img/menu/");

      if ($validatedImage["success"]) {
        deleteImage($_POST["old_image_menu"], "../assets/img/menu/");
        $file_name = $validatedImage["file_name"];
      } else {
        $errorMessage = $validatedImage["error"];
        echo "<script>
                alert('$errorMessage');
              </script>";
        $file_name = false;
      }
    } else {
      $file_name = $_POST["old_image_menu"];
    }

    if ($file_name !== false) {
      if (updateMenuByMenuId($_POST, $file_name, $_POST["menu_id"])) {
        header("Location: ./menus.php");
        exit;
      } else {
        echo "<script>
                alert('Gagal mengubah menu');
              </script>";
      }
    }
  }

  $categories = getAllIdAndNameCategories();
} else {
  echo "<script>
          alert('Menu ID Invalid!');
          documents.location.href = 'menus.php';
        </script>";
}
?>

<div class="content-body">
  <div class="container-fluid">
    <div class="row page-titles mx-0">
      <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Menu</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Menu</a></li>
        </ol>
      </div>
    </div>
    <!-- row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Edit Menu</h4>
          </div>
          <div class="card-body">
            <div class="form-validation">
              <form class="form-valide-menu" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="menu_id" value="<?= $menu["menu_id"]; ?>">
                <input type="hidden" name="old_image_menu" value="<?= $menu["image_menu"]; ?>">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="name_menu">Nama
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" id="name_menu" name="name_menu" placeholder="Masukkan nama.." value="<?= $menu['name_menu']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="category">Kategori
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <select class="form-control" name="category_id" id="category">
                          <option value="" readonly selected>Pilih kategori..</option>
                          <?php foreach ($categories as $category) : ?>
                            <option value="<?= $category['category_id']; ?>" <?= $menu["category_id"] === $category["category_id"] ? "selected" : "" ?>><?= $category["name_category"]; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="price">Harga
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="number" class="form-control" id="price" name="price" placeholder="Masukkan harga.." value="<?= $menu['price']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="image_menu">Gambar
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <div class="mb-2">
                          <img src="<?= BASEURL ?>/assets/img/menu/<?= $menu['image_menu']; ?>" alt="<?= ucwords(strtolower($menu['name_menu'])); ?>" class="img-thumbnail" style="max-width: 100px;">
                        </div>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                          </div>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image_menu" name="new_image_menu">
                            <label class="custom-file-label">Pilih file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-lg-8 ml-auto">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once "../includes/main_end.php"; ?>