<?php
$title = "Daftar Kategori - TasteTrekker Admin";

include "../includes/main_start.php";

$categories = getAllCategoriesWithCountRecipes();
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
          <li class="breadcrumb-item"><a href="javascript:void(0)">Kategori</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Daftar Kategori</a></li>
        </ol>
      </div>
    </div>
    <!-- row -->

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Daftar Kategori</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example3" class="display" style="min-width: 845px">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Jumlah Menu</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($categories as $category) : ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $category["name_category"]; ?></td>
                      <td><?= $category["desc_category"]; ?></td>
                      <td><img class="rounded-circle" width="70" src="<?= BASEURL ?>/assets/img/category/<?= $category["image_category"]; ?>" alt="<?= ucwords($category["name_category"]); ?>"></td>
                      <td><?= $category["count_recipes"]; ?></td>
                      <td>
                        <div class="d-flex">
                          <a href="edit-category.php?category_id=<?= $category["category_id"]; ?>" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                          <a href="delete-category.php?category_id=<?= $category["category_id"]; ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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