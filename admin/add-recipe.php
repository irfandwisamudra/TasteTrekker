<?php
$title = "Tambah Resep - TasteTrekker Admin";

include "../includes/main_start.php";

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true || $_SESSION["level"] != 1) {
  header("Location: ../index.php");
  exit;
}
?>

<div class="content-body">
  <div class="container-fluid">
    <div class="row page-titles mx-0">
      <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Resep</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Resep</a></li>
        </ol>
      </div>
    </div>
    <!-- row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Tambah Resep</h4>
          </div>
          <div class="card-body">
            <div class="form-validation">
              <form class="form-valide-recipe" action="#" method="post">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="val-title">Judul
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-title" name="val-title" placeholder="Masukkan judul..">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="val-menu">Menu
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-menu" name="val-menu" placeholder="Masukkan menu..">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="val-desc">Deskripsi
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-desc" name="val-desc" placeholder="Masukkan deskripsi..">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="val-serving">Penyajian
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-serving" name="val-serving" placeholder="Masukkan penyajian..">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="val-timing">Waktu
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-timing" name="val-timing" placeholder="Masukkan waktu..">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="val-image">Gambar
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                          </div>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="val-image" name="val-image">
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
