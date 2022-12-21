<?php
// Add active class to active link
function isActive($param)
{
  $page = basename($_SERVER['PHP_SELF']);
  return ($page == $param) ? 'active' : '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= $title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

  <div class="p-5 bg-primary text-white text-center">
    <h1>CodeIgniter 4 Project</h1>
    <p>Resize this responsive page to see the effect!</p>
  </div>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= isActive('index.php'); ?>" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= isActive('about'); ?>" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= isActive('contact'); ?>" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= isActive('students'); ?>" href="/students">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
    </div>
  </nav>