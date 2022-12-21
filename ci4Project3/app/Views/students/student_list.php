<?= view('includes/header') ?>

<div class="container my-4">
  <div class="card">
    <div class="card-header bg-warning">
      <h2 class="text-center">Student Table</h2>
    </div>
    <div class="card-body">
      <table class="table table-striped table-hover">
        <thead>

          <tr>
            <th>SL. No.</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $count = 1;
          foreach ($students as $student) :
          ?>
            <tr>
              <td><?= $count ?></td>
              <td><?= $student['name'] ?></td>
              <td><?= $student['phone'] ?></td>
              <td><?= $student['address'] ?></td>
              <td>
                <a href="/students/<?= $student['id'] ?>" class="btn btn-outline-primary mx-1"><i class="fa fa-eye"></i></a>
                <a href="/edit/<?= $student['id'] ?>" class="btn btn-outline-success mx-1"><i class="fa fa-pen"></i></a>
              </td>
            </tr>
          <?php $count++;
          endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?= view('includes/footer') ?>