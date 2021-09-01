<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
  
<br>
<div class="container-fluid">
    <h5>Add Students</h5>
    <a href="<?= base_url('students') ?>"  class="btn btn-info btn-sm float-end">Back</a>
    <br>
<form action="<?= base_url('students/add') ?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="Name" aria-describedby="emailHelp" placeholder="Enter Name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="number" class="form-control" name="phone" placeholder="Number" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Course</label>
    <input type="text" class="form-control" name="course" placeholder="Course" required>
  </div>
 <br>
  <button type="submit" class="btn btn-primary">Save</button>
</form>  
</div>


<?= $this->endSection() ?>