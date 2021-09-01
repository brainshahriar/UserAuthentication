
<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    
 <div class="container mt-4">
     <div class="row">
         <div class="col-md-12">
             <div class="card">
                 <div class="card-header">
                     <h5>Student Data</h5>
                     <a href="<?= base_url('students/create') ?>"   data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-info btn-sm float-end">Add</a>
                 </div>



<div class="card">
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Students</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card">
            <div class="container-fluid">
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

</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
</form>  



                 <div class="card-body">
                     <table class="table table-bordered" id="mydatatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Course</th>
                                <th>Action</th>
                            </tr>
                           </thead>
                           <tbody>
                                <?php  if($students): ?>
                              <?php foreach($students as $row) : ?>
                                <tr>
                                    <td><?php echo $row['Id']; ?></td>
                                    <td><?php echo $row['Name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['phone']; ?></td>
                                    <td><?php echo $row['course']; ?></td>

                                    <td>

                                
                                   

                 
               <form action="<?= base_url('students/delete/'.$row['Id']) ?>" method="POST">  
               <a href="<?= base_url('students/edit/'.$row['Id'])?>" class="btn btn-success btn-sm" >Edit</a>  



                  <input type="hidden" name="_method" value="DELETE" />             
                   <button type="submit" value="<?= $row['Id']; ?>" class="confirm_del_btn btn btn-danger btn-sm">Delete</button>           
                          </form>
        


                                    </td>
                                </tr>
                                <?php  endforeach ?>
                                    <?php  endif ?>
                           </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>




<?= $this->endSection() ?>

<? $this->section('scripts') ?>

