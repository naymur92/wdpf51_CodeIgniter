<?= $this->extend('layouts2/default'); ?>

<!-- Header Area -->
<?= $this->section('header'); ?>
<?= $this->endSection(); ?>

<!-- Sidebar Area -->
<?= $this->section('sidebar'); ?>
<div class="col-sm-3">
  <h3>About Area</h3>
  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link" href="#">Our Projects</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Our Achievements</a>
    </li>
  </ul>
  <hr class="d-sm-none">
</div>
<?= $this->endSection(); ?>

<!-- Content Area -->
<?= $this->section('content'); ?>
<div class="col-sm-9">
  <h2>About Us</h2>
</div>
<?= $this->endSection('content'); ?>