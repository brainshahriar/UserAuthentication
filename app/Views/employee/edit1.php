<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
  
<br>
<div class="container-fluid">
    <h5>Edit Students</h5>
    <a href="<?= base_url('employee') ?>"  class="btn btn-info btn-sm float-end">Back</a>
    <br>
<form action="<?= base_url('employee/update1/'.$employee['Id']) ?>" method="POST">
<input type="hidden" name="_method" value="PUT" />
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input value="<?= $employee['first_name']; ?>" type="text" class="form-control" name="first_name" aria-describedby="emailHelp"  required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input value="<?= $employee['last_name']; ?>"type="text" class="form-control" name="last_name"  required>
  </div>
  <div class="form-group">
    <label value="<?= $employee['phone']; ?>"for="exampleInputPassword1">Phone</label>
    <input type="number" class="form-control" name="phone" placeholder="phone" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Course</label>
    <input value="<?= $employee['email']; ?>"type="text" class="form-control" name="email"  required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Course</label>
    <input value="<?= $employee['designation']; ?>"type="text" class="form-control" name="designation"  required>
  </div>
  
 <br>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>


<?= $this->endSection() ?>