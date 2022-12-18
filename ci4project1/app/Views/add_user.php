<!DOCTYPE html>
<html lang="en">

<head>
  <title>Add User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

  <div class="p-5 bg-primary text-white text-center">
    <h1>CodeIgniter CRUD project</h1>
  </div>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Users
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/users">All Users</a></li>
            <li><a class="dropdown-item" href="/users/add">Add User</a></li>
          </ul>
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
      <!-- Content Area Starts -->
      <div class="row justify-content-center">
        <div class="col-8">
          <div class="card">
            <div class="card-header bg-warning">
              <h1>User Insert Form</h1>
            </div>
            <div class="card-body">

              <?php $validation = \Config\Services::validation(); ?>
              <form action="<?= site_url('users/post') ?>" method="post">
                <div class="form-group">
                  <label for="_name"><strong>Name: </strong></label>
                  <input type="text" id="_name" name='name' placeholder="Enter Name" class="form-control">
                  <!-- Error -->
                  <?php if ($validation->getError('name')) : ?>
                    <div class="alert alert-danger mt-2"><?= $validation->getError('name') ?></div>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label for="_email"><strong>Email: </strong></label>
                  <input type="text" id="_email" name='email' placeholder="Enter Email" class="form-control">
                </div>

                <input type="submit" name="submit" value="ADD USER" class="btn btn-primary my-2">

              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Content Area Ends -->
    </div>
  </div>

  <div class="mt-5 p-4 bg-dark text-white text-center">
    <p>Footer</p>
  </div>

</body>

</html>