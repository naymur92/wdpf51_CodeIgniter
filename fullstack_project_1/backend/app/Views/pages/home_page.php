<?= $this->extend('layouts2/default'); ?>

<!-- Header Area -->
<?= $this->section('header'); ?>
<div class="p-5 bg-primary text-white text-center">
  <h1>My First Bootstrap 5 Page</h1>
</div>
<?= $this->endSection(); ?>

<!-- Sidebar Area -->
<?= $this->section('sidebar'); ?>
<?= $this->include('layouts2/sidebar'); ?>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="col-sm-9">
  <h2>TITLE HEADING</h2>
  <h5>Title description, Dec 7, 2020</h5>
  <p>Some text..</p>
  <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

  <h2 class="mt-5">TITLE HEADING</h2>
  <h5>Title description, Sep 2, 2020</h5>
  <p>Some text..</p>
  <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
</div>
<?= $this->endSection('content'); ?>