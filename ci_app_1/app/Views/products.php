<div class="container mt-5">
  <div class="row">
    <!-- Content Area Starts -->
    <div class="card">
      <div class="card-header bg-warning">
        <h1>Products</h1>
      </div>
      <div class="card-body">
        <div class="row">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>SL. No.</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $count = 1;
              foreach ($products as $product) :
              ?>
                <tr>
                  <td><?= $count; ?></td>
                  <td><?= $product['name'] ?></td>
                  <td><?= $product['category'] ?></td>
                  <td><?= $product['price'] ?></td>
                  <td>
                    <a href="/product/edit/<?= $product['id']; ?>" class="text-primary mx-2"><i class="fa fa-pen"></i></a>
                    <a href="/product/delete/<?= $product['id']; ?>" class="text-danger mx-2"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
              <?php
                $count++;
              endforeach;
              ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>
    <!-- Content Area Ends -->
  </div>
</div>