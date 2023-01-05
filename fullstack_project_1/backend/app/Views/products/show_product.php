<?= view('layouts/header'); ?>
<?= view('layouts/navbar'); ?>
<?= view('layouts/main_sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $product['product_name'] ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= site_url(); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="/products">Products</a></li>
            <li class="breadcrumb-item active"><?= $product['product_name'] ?></li>
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
      <div class="row justify-content-center">
        <div class="col-8">
          <div class="card">
            <div class="card-header">
              <h3>Product Details</h3>
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <tr>
                  <th>Name:</th>
                  <td><?= $product['product_name']; ?></td>
                </tr>
                <tr>
                  <th>Description:</th>
                  <td><?= $product['product_details']; ?></td>
                </tr>
                <tr>
                  <th>Price:</th>
                  <td>Tk. <?= $product['product_price']; ?></td>
                </tr>
                <tr>
                  <th>Creation Time</th>
                  <td><?= date("d M, Y - h:i A", strtotime($product['product_creation_time'])); ?></td>
                </tr>
              </table>
            </div>
            <div class="card-footer">
              <a href="/products/edit/<?= $product['id']; ?>" class="mx-2 text-success"><i class="fa fa-pen"></i> Edit</a>
              <a href="/products/delete/<?= $product['id']; ?>" class="mx-2 text-danger"><i class="fa fa-trash"></i> Delete</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= view('layouts/footer'); ?>