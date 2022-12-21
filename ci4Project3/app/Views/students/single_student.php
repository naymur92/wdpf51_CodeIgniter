<?= view('includes/header') ?>

<div class="container">
  <div class="card">
    <div class="card-header">
      <h2><?= $student['name'] ?></h2>
    </div>
    <div class="card-body">

    </div>
    <div class="card-footer">
      <a href="/students/edit/<?= $student['id'] ?>" class="btn btn-outline-success mx-1"><i class="fa fa-pen mx-2"></i>Edit</a>
    </div>
  </div>
</div>

<?= view('includes/footer') ?>