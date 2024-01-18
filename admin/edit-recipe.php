<?php
$title = "Edit Recipe - TasteTrekker Admin";

require_once "../includes/main_start.php";

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
          <li class="breadcrumb-item"><a href="javascript:void(0)">Recipe</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Recipe</a></li>
        </ol>
      </div>
    </div>
    <!-- row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Edit Recipe</h4>
          </div>
          <div class="card-body">
            <div class="form-validation">
              <form class="form-valide-recipe" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="recipe_id" value="<?= $recipe["recipe_id"]; ?>">
                <input type="hidden" name="old_image_recipe" value="<?= $recipe["image_recipe"]; ?>">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="title">Judul
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan judul.." value="<?= $recipe['title']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="menu">Menu
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <select class="form-control" name="menu_id" id="menu">
                          <option value="" readonly selected>Pilih menu..</option>
                          <?php foreach ($menus as $menu) : ?>
                            <option value="<?= $menu['menu_id']; ?>" <?= $recipe["menu_id"] === $menu["menu_id"] ? "selected" : "" ?>><?= $menu["name_menu"]; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="desc_recipe">Deskripsi
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" id="desc_recipe" name="desc_recipe" placeholder="Masukkan deskripsi.." value="<?= $recipe['desc_recipe']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="serving">Penyajian
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" id="serving" name="serving" placeholder="Masukkan penyajian.." value="<?= $recipe['serving']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="timing">Waktu
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <input type="text" class="form-control" id="timing" name="timing" placeholder="Masukkan waktu.." value="<?= $recipe['timing']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="image_recipe">Gambar
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <div class="mb-2">
                          <img src="<?= BASEURL ?>/assets/img/recipe/<?= $recipe['image_recipe']; ?>" alt="<?= ucwords(strtolower($recipe['name_menu'])); ?>" class="img-thumbnail" style="max-width: 100px;">
                        </div>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                          </div>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image_recipe" name="new_image_recipe">
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