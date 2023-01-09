<?= view('layouts/header_data-table'); ?>
<?= view('layouts/navbar'); ?>
<?= view('layouts/main_sidebar'); ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Orders Summary</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= site_url(); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Reportings</a></li>
            <li class="breadcrumb-item active">Orders List</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-12">
          <form action="" class="my-4 d-flex align-items-center" id="report_form">
            <!-- <?= csrf_field(); ?> -->

            <div class="form-group d-flex justify-content-between align-items-center">
              <label style="min-width: fit-content;" for="st_date">Start Date:</label>
              <input type="date" id="st_date" required class="form-control mx-2">
            </div>
            <div class="form-group d-flex justify-content-between align-items-center">
              <label style="min-width: fit-content;" for="end_date">End Date:</label>
              <input type="date" id="end_date" required class="form-control mx-2">
            </div>

            <div class="form-group">
              <select name="status" id="status" class="form-control mx-2">
                <option value="" selected hidden>Select Status</option>
                <?php foreach ($status as $st) : ?>
                  <option value="<?= $st['status'] ?>"><?= $st['status']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group mx-3">
              <input type="button" id="submit" value="Generate Report" class="btn btn-success mx-2">
              <input type="reset" value="Reset" class="btn btn-outline-danger">
            </div>
          </form>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Orders Lists</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body" id="data_container">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>SL No.</th>
                    <th>Customer Name</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Order Date</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($orders as $index => $order) : ?>
                    <tr>
                      <td><?= $index + 1 ?></td>
                      <td><?= $order['customerName'] ?></td>
                      <td><?= $order['phone'] ?></td>
                      <td><?= $order['city'] ?></td>
                      <td><?= $order['orderDate'] ?></td>
                      <td><?= $order['status'] ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>SL No.</th>
                    <th>Customer Name</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Order Date</th>
                    <th>Status</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= view('layouts/footer_data-table'); ?>

<script>
  $(document).ready(function() {
    $("#submit").click(function() {
      var startdate = $("#st_date").val();
      var enddate = $("#end_date").val();
      var status = $('#status').val();

      $.get(
        '<?= base_url('reports/mkordersummary') ?>', {
          startdate,
          enddate,
          status
        },
        function(data) {
          $('#data_container').html(data);

          // This for data table
          $('#example1').DataTable({
            "destroy": true, //use for reinitialize datatable
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        }
      );
    });
  });
</script>