
<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    
 <div class="container mt-4">
     <div class="row">
         <div class="col-md-12">

             <div class="card">
                 <div class="card-header">
                     <h5>Products</h5>
                     <a href="<?= base_url('products/add') ?>"  class="btn btn-info btn-sm float-end">Add</a>
                 </div>
                 <div class="card-body">
                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Action</th>
                        
                          </tr>
                      </thead>
                      <tbody>
                                <?php  if($products): ?>
                              <?php foreach($products as $row) : ?>
                                <tr>
                                    <td><?php echo $row['Id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['description']; ?></td>
                                    <td><?php echo $row['price']; ?></td>
                                    <td>
                                        <img src="<?= "uploads/".$row['image'];?>" height="50" width="50px" alt="image">
                                    </td>

                                    <td>

                                
                                   

                 
               <form action="<?= base_url('products/delete/'.$row['Id']) ?>" method="POST">  
               <a href="<?= base_url('products/edit/'.$row['Id'])?>" class="btn btn-success btn-sm" >Edit</a>  



                  <input type="hidden" name="_method" value="DELETE" />             
                   <button type="submit" value="<?= $row['Id']; ?>" class="confirm_del_btn btn btn-danger btn-sm">Delete</button>           
                          </form>
        


                                    </td>
                                </tr>
                                <?php  endforeach ?>
                                    <?php  endif ?>
                           </tbody>
                  </table>

                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>




<?= $this->endSection() ?>

<? $this->section('scripts') ?>

