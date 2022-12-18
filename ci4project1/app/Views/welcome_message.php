<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home Page</title>
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
            <!-- <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
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
      <div class="card">
        <div class="card-header bg-warning">
          <h1>Home page</h1>
        </div>
        <div class="card-body">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem, optio minus illo beatae voluptatem aliquid ut. Temporibus voluptatem aspernatur quibusdam nisi deleniti ipsa ut neque. Fugit nobis dolores perferendis soluta!</p>
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