<?php
$title = "Tambah Menu - TasteTrekker Admin";

require_once "../includes/main_start.php";

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true || $_SESSION["level"] != 1) {
  header("Location: ../index.php");
  exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
  $validatedImage = validateImage($_FILES["image_menu"], "../assets/img/menu/");
  if ($validatedImage["success"]) {
    if (insertMenu($_POST, $validatedImage["file_name"])) {
      header("Location: ./menus.php");
      exit;
    } else {
      echo "<script>
              alert('Gagal menambahkan menu');
            </script>";
    }
  } else {
    $errorMessage = $validatedImage["error"];
    echo "<script>
            alert('$errorMessage');
          </script>";
  }
  unset($_POST);
}

$categories = getAllIdAndNameCategories();
?>

<div class="content-body">
  <div class="container-fluid">
    <div class="row page-titles mx-0">
      <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Menu</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Menu</a></li>
        </ol>
      </div>
    </div>
    <!-- row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Tambah Menu</h4>
          </div>
          <div class="card-body">
            <div class="form-validation">
              <form class="form-valide-menu" action="" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="name_menu">Nama
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" id="name_menu" name="name_menu" placeholder="Masukkan nama..">
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
                            <option value="<?= $category['category_id']; ?>"><?= $category["name_category"]; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="price">Harga
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="number" class="form-control" id="price" name="price" placeholder="Masukkan harga..">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="image_menu">Gambar
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                          </div>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image_menu" name="image_menu">
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