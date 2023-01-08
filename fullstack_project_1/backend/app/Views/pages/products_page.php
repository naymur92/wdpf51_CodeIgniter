<?= $this->extend('layouts2/default'); ?>

<!-- Header Area -->
<?= $this->section('header'); ?>
<?= $this->endSection(); ?>

<!-- Sidebar Area -->
<?= $this->section('sidebar'); ?>
<div class="col-sm-3">
  <h3>Products Area</h3>
  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link" href="#">All Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Add Product</a>
    </li>
  </ul>
  <hr class="d-sm-none">
</div>
<?= $this->endSection(); ?>

<!-- Content Area -->
<?= $this->section('content'); ?>
<div class="col-sm-9">
  <pre>
    <?php
    // print_r($products);
    ?>
  </pre>
  <div class="card">
    <div class="card-header bg-warning">
      <h4>Product Lists</h4>
    </div>
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>SL No.</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Stock</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($products as $index => $product) : ?>
            <tr>
              <td><?= $index + 1; ?></td>
              <td><?= $product['product_name']; ?></td>
              <td><?= $product['product_price']; ?></td>
              <td><?= $product['product_stock']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <!-- pagination -->
      <?php echo $pager->links('group1', 'bs_full'); ?>

    </div>
  </div>
</div>
<?= $this->endSection('content'); ?>