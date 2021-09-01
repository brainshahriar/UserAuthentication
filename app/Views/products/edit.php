
<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    
 <div class="container mt-4">
     <div class="row justify-content-center">
         <div class="col-md-12">
             <div class="card shadow">
                 <div class="card-header">
                     <h5>Edit Products</h5>
                     <a href="<?= base_url('products') ?>"  class="btn btn-danger btn-sm float-end">Back</a>
                 </div>
                 <div class="card-body">


                     <table class="table table-bordered" id="mydatatable">
                     <div class="container-fluid">
    <br>

    <div class="col-md-5">
        <img src="<?= base_url('uploads/'.$products['image']) ?>" alt="Product Image" class="w-50">
    </div>
<form action="<?= base_url('products/update/'.$products['Id']) ?>" method="POST" enctype="multipart/form-data">

<div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input value="<?= $products['name'] ?> " name="name" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Name" required>
  </div>
  <div class="mb-3">
  <label value="<?= $products['description'] ?> " name="description" for="exampleFormControlTextarea1" class="form-label"  >Description</label>
  <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Product description"><?= $products['price'] ?> "</textarea>
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input value="<?= $products['price'] ?> "name="price" type="number" class="form-control" placeholder="Number" required>
  </div>
  <div class="mb-3">
  <label>Image</label>
  <input name="image" class="form-control"  type="file">
</div>
<div>
 <br>
  <button type="submit" class="btn btn-primary">Update</button>


  
      
  
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

