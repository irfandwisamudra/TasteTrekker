<?php
$title = "Daftar Resep - TasteTrekker Admin";

include "../includes/main_start.php";

$recipes = getAllRecipesWithNameMenu();
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
          <li class="breadcrumb-item"><a href="javascript:void(0)">Resep</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Daftar Resep</a></li>
        </ol>
      </div>
    </div>
    <!-- row -->

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Daftar Resep</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example3" class="display" style="min-width: 845px">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Menu</th>
                    <th>Deskripsi</th>
                    <th>Penyajian</th>
                    <th>Waktu</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($recipes as $recipe) : ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $recipe["title"]; ?></td>
                      <td><?= $recipe["name_menu"]; ?></td>
                      <td><?= $recipe["desc_recipe"]; ?></td>
                      <td><?= $recipe["serving"]; ?></td>
                      <td><?= $recipe["timing"]; ?></td>
                      <td><img class="rounded-circle" width="70" src="<?= BASEURL ?>/assets/img/recipe/<?= $recipe["image_recipe"]; ?>" alt="<?= ucwords($recipe["name_menu"]); ?>"></td>
                      <td>
                        <div class="d-flex">
                          <a href="edit-recipe.php?recipe_id=<?= $recipe["recipe_id"]; ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                          <a href="delete-recipe.php?recipe_id=<?= $recipe["recipe_id"]; ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                    <?php $no++ ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "../includes/main_end.php"; ?>