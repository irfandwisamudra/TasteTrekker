<?php
$title = "Tambah Kategori - TasteTrekker Admin";

include "../includes/main_start.php";

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true || $_SESSION["level"] != 1) {
  header("Location: ../index.php");
  exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $validatedImage = validateImage($_FILES["image_category"]);
  if ($validatedImage["success"]) {
    if (insertCategory($_POST, $validatedImage["file_name"])) {
      header("Location: ./categories.php");
      exit;
    } else {
      echo "<script>
              alert('Gagal menambahkan kategori');
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
?>

<div class="content-body">
  <div class="container-fluid">
    <div class="row page-titles mx-0">
      <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Kategori</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Kategori</a></li>
        </ol>
      </div>
    </div>
    <!-- row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Tambah Kategori</h4>
          </div>
          <div class="card-body">
            <div class="form-validation">
              <form class="form-valide-category" action="" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="name_category">Nama
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" id="name_category" name="name_category" placeholder="Masukkan nama..">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="desc_category">Deskripsi
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" id="desc_category" name="desc_category" placeholder="Masukkan deskripsi..">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="image_category">Gambar
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                          </div>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image_category" name="image_category">
                            <label class="custom-file-label">Pilih file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-lg-8 ml-auto">
                        <button type="submit" class="btn btn-primary">Submit</button>
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

<?php include "../includes/main_end.php"; ?>