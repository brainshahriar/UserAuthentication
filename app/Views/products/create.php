
<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    
 <div class="container mt-4">
     <div class="row justify-content-center">
         <div class="col-md-12">
             <div class="card">
                 <div class="card-header">
                     <h5>Add Products</h5>
                     <a href="<?= base_url('products') ?>"  class="btn btn-danger btn-sm float-end">Back</a>
                 </div>
                 <div class="card-body">


                     <table class="table table-bordered" id="mydatatable">
                     <div class="container-fluid">
    <br>
<form action="<?= base_url('products/store') ?>" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input name="name" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Name" required>
  </div>
  <div class="mb-3">
  <label name="description" for="exampleFormControlTextarea1" class="form-label"  >Description</label>
  <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Product description"></textarea>
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input name="price" type="number" class="form-control" placeholder="Number" required>
  </div>
  <div class="mb-3">
  <label>Image</label>
  <input name="image" class="form-control"  type="file" required>
</div>
<div>
 <br>
  <button type="submit" class="btn btn-primary">Save</button>


  
      
  
</form>  
</div>
                                    

                                   

                 
   
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>




<?= $this->endSection() ?>

<? $this->section('scripts') ?>

