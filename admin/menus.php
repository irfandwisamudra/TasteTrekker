<?php
$title = "Daftar Menu - TasteTrekker Admin";

require_once "../includes/main_start.php";

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true || $_SESSION["level"] != 1) {
  header("Location: ../index.php");
  exit;
}

$menus = getAllMenusWithNameCategory();
?>

<div class="content-body">
  <div class="container-fluid">
    <div class="row page-titles mx-0">
      <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Menu</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Daftar Menu</a></li>
        </ol>
      </div>
    </div>
    <!-- row -->

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Daftar Menu</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example3" class="display" style="min-width: 845px">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($menus as $menu) : ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $menu["name_menu"]; ?></td>
                      <td><?= $menu["name_category"]; ?></td>
                      <td><?= $menu["price"]; ?></td>
                      <td><img class="rounded-circle" width="70" src="<?= BASEURL ?>/assets/img/menu/<?= $menu["image_menu"]; ?>" alt="<?= ucwords($menu["name_menu"]); ?>"></td>
                      <td>
                        <div class="d-flex">
                          <a href="edit-menu.php?menu_id=<?= $menu["menu_id"]; ?>" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                          <a href="delete-menu.php?menu_id=<?= $menu["menu_id"]; ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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

<?php require_once "../includes/main_end.php"; ?>