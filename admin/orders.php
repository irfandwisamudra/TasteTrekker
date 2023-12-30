<?php
$title = "Daftar Pesanan - TasteTrekker Admin";

include "../includes/main_start.php";

if (!isset($_SESSION["login"]) || $_SESSION["login"] != true || $_SESSION["level"] != 1) {
  header("Location: ../index.php");
  exit;
}

$orders = getAllOrdersWithUsername();
?>

<div class="content-body">
  <div class="container-fluid">
    <div class="row page-titles mx-0">
      <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Pesanan</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Daftar Pesanan</a></li>
        </ol>
      </div>
    </div>
    <!-- row -->

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Daftar Pesanan</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example3" class="display" style="min-width: 845px">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Username</th>
                    <th>Pembayaran</th>
                    <th>Pengiriman</th>
                    <th>Total bayar</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($orders as $order) : ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $order["date"]; ?></td>
                      <td><?= $order["username"]; ?></td>
                      <td><?= $order["payment"]; ?></td>
                      <td><?= $order["delivery"]; ?></td>
                      <td><?= $order["subtotal"]; ?></td>
                      <td>
                        <div class="d-flex">
                          <a href="order-detail.php?order_id=<?= $order["order_id"]; ?>" class="btn btn-primary btn-xxs shadow mr-1">Detail</a>
                          <a href="edit-order.php?order_id=<?= $order["order_id"]; ?>" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                          <a href="delete-order.php?order_id=<?= $order["order_id"]; ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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