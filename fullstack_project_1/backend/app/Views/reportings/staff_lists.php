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
          <h1 class="m-0">Office wise staff list</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= site_url(); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Reportings</a></li>
            <li class="breadcrumb-item active">Officewise Staff Lists</li>
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
          <form action="" class="my-4 d-flex" id="report_form">
            <!-- <?= csrf_field(); ?> -->

            <select name="office" id="office_code" class="form-control mx-2">
              <option value="" selected hidden>Select Office</option>
              <?php foreach ($offices as $office) : ?>
                <option value="<?= $office['officeCode'] ?>"><?= $office['city'] . ', ' . $office['country'] ?></option>
              <?php endforeach; ?>
            </select>

            <input type="button" id="submit" value="Generate Report" class="btn btn-success mx-2">
            <input type="reset" value="Reset" class="btn btn-outline-danger">

          </form>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Staff Lists</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body" id="data_container">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>SL No.</th>
                    <th>Employee Name</th>
                    <th>Email</th>
                    <th>Job Title</th>
                    <th>City</th>
                    <th>Country</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                  <tr>
                    <th>SL No.</th>
                    <th>Employee Name</th>
                    <th>Email</th>
                    <th>Job Title</th>
                    <th>City</th>
                    <th>Country</th>
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
      var code = $("#office_code").val();

      $.get(
        '<?= base_url('reports/allstaff') ?>', {
          offcode: code
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