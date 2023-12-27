<?php
$title = "Tambah Menu - TasteTrekker Admin";

include "../includes/main_start.php";
?>

<div class="content-body">
  <div class="container-fluid">
    <div class="row page-titles mx-0">
      <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
          <h4>Hi, welcome back!</h4>
        </div>
      </div>
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
              <form class="form-valide" action="#" method="post">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="val-name">Nama
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-name" name="val-name" placeholder="Masukkan nama..">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="val-category">Kategori
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" id="val-category" name="val-category" placeholder="Masukkan kategori..">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="val-price">Harga
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="number" class="form-control" id="val-price" name="val-price" placeholder="Masukkan harga..">
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