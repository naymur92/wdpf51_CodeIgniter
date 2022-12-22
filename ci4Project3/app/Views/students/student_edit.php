<?= view('includes/header') ?>

<div class="container my-3">
  <div class="row justify-content-center">
    <div class="col-6">
      <div class="card">
        <div class="card-header bg-warning">
          <h3 class="text-center">Student Edit Form</h3>
        </div>
        <form method="post" action="/student/update/<?= $student['id'] ?>">
          <?= csrf_field(); ?>
          <div class="card-body">
            <div class="form-group mt-2">
              <label for="_name"><strong>Student Name:</strong></label>
              <input type="text" name="name" id="_name" value="<?= $student['name'] ?>" placeholder="Enter name" class="form-control">
            </div>
            <div class="form-group mt-2">
              <label for="_phone"><strong>Student Phone:</strong></label>
              <input type="text" name="phone" id="_phone" value="<?= $student['phone'] ?>" placeholder="Enter phone" class="form-control">
            </div>
            <div class="form-group mt-2">
              <label for="_email"><strong>Student Email:</strong></label>
              <input type="email" name="email" id="_email" value="<?= $student['email'] ?>" placeholder="Enter email" class="form-control">
            </div>
            <div class="form-group mt-2">
              <label for="_address"><strong>Student Address:</strong></label>
              <textarea name="address" id="_address" cols="30" class="form-control"><?= $student['address'] ?></textarea>
            </div>
          </div>
          <div class="card-footer">
            <input type="submit" value="Update Student" class="btn btn-success float-end my-2">
          </div>
        </form>
      </div>
    </div>

  </div>

</div>

<?= view('includes/footer') ?>