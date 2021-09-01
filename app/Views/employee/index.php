
<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4>Employee Data</h4>
              
                    <div class="card-body">
                    <a href="<?= base_url('employee/create1') ?>"  class="btn btn-info btn-sm float-end">Add</a>
                  <br>
                  <br>
                        <table class="table table-bordered" id="mydatatable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Designation</th>
                                    <th>Created Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($employee as $row):?>
                                <tr>
                                    <td><?=$row['Id']?></td>
                                    <td><?=$row['first_name']?></td>
                                    <td><?=$row['last_name']?></td>
                                    <td><?=$row['phone']?></td>
                                    <td><?=$row['email']?></td>
                                    <td><?=$row['designation']?></td>
                                    <td><?=$row['created_at']?></td>
                                    <td>
                                    <form action="<?= base_url('employee/delete/'.$row['Id']) ?>" method="POST">  
                                        <a href="<?= base_url('employee/edit1/'.$row['Id'])?>" class="btn btn-success btn-sm">Edit</a>
                                        <input type="hidden" name="_method" value="DELETE" /> 
                                        <button type="submit" value="<?= $row['Id']; ?>" class="confirm_del_btn btn btn-danger btn-sm">Delete</button>           
                                </form>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>











    