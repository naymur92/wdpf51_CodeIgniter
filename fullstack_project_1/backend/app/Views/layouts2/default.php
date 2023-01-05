<!DOCTYPE html>
<html lang="en">

<head>
  <title>CodeIgniter Layout</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <!-- Header -->
  <?= $this->renderSection('header'); ?>

  <!-- Navbar -->
  <?= $this->include('layouts2/navbar'); ?>

  <div class="container mt-5">
    <div class="row">
      <!-- Sidebar -->
      <?= $this->renderSection('sidebar'); ?>

      <!-- Content -->
      <?= $this->renderSection('content'); ?>
    </div>
  </div>

  <!-- Footer -->
  <?= $this->include('layouts2/footer'); ?>
</body>

</html>