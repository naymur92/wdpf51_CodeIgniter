<div class="container mt-5">
  <div class="row">
    <!-- Content Area Starts -->
    <div class="card">
      <div class="card-header bg-warning">
        <h1>Products</h1>
      </div>
      <div class="card-body">
        <div class="row">
          <?php foreach ($products as $product) : ?>
            <div class="col-4 my-2">
              <div class="card">
                <div class="card-header">
                  <h4><?php echo $product['name'] ?></h4>
                </div>
                <div class="card-body">
                  <img src="assets/images/product/<?php echo $product['thumbnail'] ?>" alt="" class="img-thumbnail">
                  <p class="my-2"><strong>Description: </strong><?php echo $product['description'] ?></p>
                  <p class="my-2"><strong>Price: </strong><?php echo $product['price'] ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <!-- Content Area Ends -->
  </div>
</div>