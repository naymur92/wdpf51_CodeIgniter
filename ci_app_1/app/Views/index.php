<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }
  </style>
</head>

<body>

  <div class="p-5 bg-primary text-white text-center">
    <h1>Home Page</h1>
    <p>Resize this responsive page to see the effect!</p>
  </div>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about">About US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-4">
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <hr class="d-sm-none">
      </div>
      <div class="col-sm-8">
        <!-- Content Area Starts -->
        <div class="card">
          <div class="card-header bg-warning">
            <h1>Products</h1>
          </div>
          <div class="card-body">
            <div class="row">
              <?php foreach ($products as $product) : ?>
                <div class="col-6 my-2">
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
  </div>

  <div class="mt-5 p-4 bg-dark text-white text-center">
    <p>Footer</p>
  </div>

</body>

</html>