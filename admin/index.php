<?php
$title = "Dashboard - TasteTrekker Admin";

include "../includes/main_start.php";
?>

<div class="content-body">
  <!-- row -->
  <div class="container-fluid">
    <div class="form-head d-flex mb-3 align-items-start">
      <div class="mr-auto d-none d-lg-block">
        <h2 class="text-black font-w600 mb-0">Dashboard</h2>
        <p class="mb-0">Welcome to TasteTrekker Admin!</p>
      </div>

      <button type="button" class="btn btn-sm btn-primary light d-flex align-items-center svg-btn" data-toggle="modal" data-target="#filterModal">
        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g>
            <path d="M22.4281 2.856H21.8681V1.428C21.8681 0.56 21.2801 0 20.4401 0C19.6001 0 19.0121 0.56 19.0121 1.428V2.856H9.71606V1.428C9.71606 0.56 9.15606 0 8.28806 0C7.42006 0 6.86006 0.56 6.86006 1.428V2.856H5.57206C2.85606 2.856 0.560059 5.152 0.560059 7.868V23.016C0.560059 25.732 2.85606 28.028 5.57206 28.028H22.4281C25.1441 28.028 27.4401 25.732 27.4401 23.016V7.868C27.4401 5.152 25.1441 2.856 22.4281 2.856ZM5.57206 5.712H22.4281C23.5761 5.712 24.5841 6.72 24.5841 7.868V9.856H3.41606V7.868C3.41606 6.72 4.42406 5.712 5.57206 5.712ZM22.4281 25.144H5.57206C4.42406 25.144 3.41606 24.136 3.41606 22.988V12.712H24.5561V22.988C24.5841 24.136 23.5761 25.144 22.4281 25.144Z" fill="#2F4CDD"></path>
          </g>
        </svg>
        <div class="text-left ml-3">
          <span class="d-block fs-16">Filter Periode</span>
          <small class="d-block fs-13">
            <?php
            // Display selected date range if available in $_GET
            if (isset($_GET['start_date']) && isset($_GET['end_date'])) {
              echo date("j F Y", strtotime($_GET['start_date'])) . ' - ' . date("j F Y", strtotime($_GET['end_date']));
            } else {
              echo "Pilih tanggal";
            }
            ?>
          </small>
        </div>
      </button>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="filterModalLabel">Filter Periode</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form inside the modal -->
        <form action="" method="get">
          <div class="form-group">
            <label for="start_date">Tanggal Awal</label>
            <input type="date" class="form-control" id="start_date" name="start_date" required>
          </div>
          <div class="form-group">
            <label for="end_date">Tanggal Akhir</label>
            <input type="date" class="form-control" id="end_date" name="end_date" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include "../includes/main_end.php"; ?>