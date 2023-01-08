<table id="example1" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>SL No.</th>
      <th>Employee Name</th>
      <th>Email</th>
      <th>Job Title</th>
      <th>City</th>
      <th>Country</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($employees as $index => $emp) : ?>
      <tr>
        <td><?= $index + 1 ?></td>
        <td><?= $emp['employeeName'] ?></td>
        <td><?= $emp['email'] ?></td>
        <td><?= $emp['jobTitle'] ?></td>
        <td><?= $emp['city'] ?></td>
        <td><?= $emp['country'] ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
  <tfoot>
    <tr>
      <th>SL No.</th>
      <th>Employee Name</th>
      <th>Email</th>
      <th>Job Title</th>
      <th>City</th>
      <th>Country</th>
    </tr>
  </tfoot>
</table>