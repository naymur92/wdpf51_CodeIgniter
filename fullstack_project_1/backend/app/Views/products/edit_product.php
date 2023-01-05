<?php
$session = session();

if ($session->has('errors')) {
  $errors = $session->errors;
}
?>

<?= view('layouts/header_editor'); ?>
<?= view('layouts/navbar'); ?>
<?= view('layouts/main_sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Product Edit</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= site_url(); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="/products">Products</a></li>
            <li class="breadcrumb-item active">Edit Product</li>
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
            <div class="card-header bg-primary">
              <h1 class="text-center text-light">Product Edit Form</h1>
            </div>
            <form action="/products/update/<?= $product['id']; ?>" method="POST" enctype="multipart/form-data">
              <?= csrf_field(); ?>
              <div class="card-body">
                <div class="form-group">
                  <label for="_pname"><strong>Product Name:</strong></label>
                  <input type="text" id="_pname" name="product_name" value="<?= old('product_name') ? old('product_name') : $product['product_name'] ?>" placeholder="Enter Product Name" class="form-control">
                  <?php if (isset($errors['product_name'])) : ?>
                    <div class="alert alert-warning my-2"><?= $errors['product_name']; ?></div>
                  <?php endif; ?>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="_pcategory"><strong>Product Category:</strong></label>
                      <select name="product_category" id="_pcategory" class="form-control">
                        <option value="" selected>Select One</option>
                        <?php foreach ($categories as $category) : ?>
                          <option value="<?= $category['cat_id']; ?>" <?= old('product_category') == $category['cat_id'] ? 'selected' : ($product['product_category'] == $category['cat_id'] ? 'selected' : '') ?>><?= $category['category_name']; ?></option>
                        <?php endforeach; ?>
                      </select>
                      <?php if (isset($errors['product_category'])) : ?>
                        <div class="alert alert-warning my-2"><?= $errors['product_category']; ?></div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="_pimage"><strong>Product Image:</strong></label>
                      <input type="file" id="_pimage" name="product_image" onchange="readURL(this)" class="form-control">
                      <?php if (isset($errors['product_image'])) : ?>
                        <div class="alert alert-warning my-2"><?= $errors['product_image']; ?></div>
                      <?php endif; ?>

                      <!-- Show selected photo -->
                      <img src="/assets/images/products/<?= $product['product_image']; ?>" id="showSelectedPhoto" class="img-thumbnail mt-2" width="150px" alt="selected image">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="summernote"><strong>Product Details:</strong></label>
                  <textarea id="summernote" name="product_details" row="5" class="form-control"><?= old('product_details') ? old('product_details') : $product['product_details'] ?></textarea>
                  <?php if (isset($errors['product_details'])) : ?>
                    <div class="alert alert-warning my-2"><?= $errors['product_details']; ?></div>
                  <?php endif; ?>
                </div>
                <div class="row">
                  <div class="col-4">
                    <div class="form-group">
                      <label for="_pprice"><strong>Product Price:</strong></label>
                      <input type="number" id="_pprice" name="product_price" value="<?= old('product_price') ? old('product_price') : $product['product_price'] ?>" placeholder="Enter Product Price" class="form-control">
                      <?php if (isset($errors['product_price'])) : ?>
                        <div class="alert alert-warning my-2"><?= $errors['product_price']; ?></div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="_pstock"><strong>Product Stock:</strong></label>
                      <input type="number" id="_pstock" name="product_stock" value="<?= old('product_stock') ? old('product_stock') : $product['product_stock'] ?>" placeholder="Enter Product Stock" class="form-control">
                      <?php if (isset($errors['product_stock'])) : ?>
                        <div class="alert alert-warning my-2"><?= $errors['product_stock']; ?></div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="_pstatus"><strong>Product Status:</strong></label>
                      <select name="product_status" id="_pstatus" class="form-control">
                        <option value="" selected>Select One</option>
                        <option value="available" <?= old('product_status') == 'available' ? 'selected' : ($product['product_status'] == 'available' ? 'selected' : '') ?>>Available</option>
                        <option value="upcoming" <?= old('product_status') == 'upcoming' ? 'selected' : ($product['product_status'] == 'upcoming' ? 'selected' : '') ?>>Upcoming</option>
                        <option value="unavailable" <?= old('product_status') == 'unavailable' ? 'selected' : ($product['product_status'] == 'unavailable' ? 'selected' : '') ?>>Unavailable</option>
                      </select>
                      <?php if (isset($errors['product_status'])) : ?>
                        <div class="alert alert-warning my-2"><?= $errors['product_status']; ?></div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <input type="submit" value="Update Product" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= view('layouts/footer_editor'); ?>