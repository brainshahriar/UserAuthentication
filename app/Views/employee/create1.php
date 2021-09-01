<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
  
<br>
<div class="container-fluid">
    <div class="card">

    <div class="card-header">
    <h5>Add Employee</h5>
    <a href="<?= base_url('employee') ?>"  class="btn btn-info btn-sm float-end">Back</a>
    <br>
    </div>
    
<form action="<?= base_url('employee/add1') ?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" name="first_name"  placeholder="Enter First Name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="number" class="form-control" name="phone" placeholder="Number" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Designation</label>
    <input type="text" class="form-control" name="designation" placeholder="Designation" required>
  </div>
 <br>
  <button type="submit" class="btn btn-primary">Add</button>
</form>
</div>
    </div>
    


<?= $this->endSection() ?>