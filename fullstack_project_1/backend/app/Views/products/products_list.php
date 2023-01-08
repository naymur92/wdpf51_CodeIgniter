<?= view('layouts/header_data-table'); ?>
<?= view('layouts/navbar'); ?>
<?= view('layouts/main_sidebar'); ?>

<?php if (session()->has('msg')) : ?>
  <script>
    function tempAlert(msg, duration) {
      var el = document.createElement("div");
      el.setAttribute('class', 'alert alert-success text-white');
      el.setAttribute("style", "position:absolute;top:20%;left:50%;");
      el.innerHTML = msg;
      setTimeout(function() {
        el.parentNode.removeChild(el);
      }, duration);
      document.body.appendChild(el);
    }

    tempAlert('<?= session()->msg; ?>', 5000);
  </script>
<?php endif; ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Products</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= site_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active">All Products</li>
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
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Products List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>SL No.</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Status</th>
                    <th>Thumbnail</th>
                    <th>Creation Time</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($products as $index => $product) :
                  ?>
                    <tr>
                      <td><?= $index + 1; ?></td>
                      <td><?= $product['product_name']; ?></td>
                      <?php
                      foreach ($categories as $cat) :
                        if ($cat['cat_id'] == $product['product_category']) :
                      ?>
                          <td><?= $cat['category_name'] ?></td>
                      <?php
                        endif;
                      endforeach;
                      ?>
                      <td>Tk. <?= $product['product_price']; ?></td>
                      <td><?= $product['product_stock']; ?></td>
                      <td><?= ucfirst($product['product_status']); ?></td>
                      <td>
                        <img src="/assets/images/products/<?= $product['product_image']; ?>" class="img-thumbnail" width="100px" alt="">
                      </td>
                      <td><?= date("d M, Y - h:i A", strtotime($product['created_at'])); ?></td>
                      <td class="d-flex justify-content-center align-items-center">
                        <a href="<?= site_url('products/show/' . $product['id']); ?>" class="mx-2"><i class="fa fa-eye text-primary"></i></a>
                        <a href="<?= site_url('products/edit/' . $product['id']); ?>" class="mx-2"><i class="fa fa-pen text-success"></i></a>
                        <a href="<?= base_url('products/delete/' . $product['id']); ?>" class="mx-2 delete" onclick="return confirm('Are you sure want to delete?')"><i class="fa fa-trash text-danger"></i></a>
                      </td>
                    </tr>
                  <?php
                  endforeach;
                  ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>SL No.</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Status</th>
                    <th>Thumbnail</th>
                    <th>Creation Time</th>
                    <th>Action</th>
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
  $(function() {
    var csrfName = '<?= csrf_token(); ?>',
      csrfHash = '<?= csrf_hash(); ?>';

    $(".delete").click(function(e) {
      e.preventDefault();
      var link = this.href;
      var dataJson = {
        [csrfName]: csrfHash
      };

      $.ajax({
        url: link,
        type: 'post',
        data: dataJson,
        success: function() {
          location.reload();
        }
      });
    });
  });
</script>