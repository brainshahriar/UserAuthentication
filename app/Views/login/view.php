
<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    
<div class="container">
    <div class="row justify-content-center align-item-center">
        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <h1>Login</h1>
                <?= form_open(); ?>
                  <div class="form-group">
                      <label for="">Username</label>
                      <input type="text" name="username" class="form-control">
                  </div>
             
                  <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" name="password" class="form-control">
                  </div>
            
                  <br>
                  <div class="form-group">
                      <input type="submit" name="register" value="Login" class="btn btn-primary">
                      <a href="">Forgot Password?</a>
                  </div>
                  <br>
                  <div class="form-group">
                      <a href="">Login With Google</a>
                  </div>
                  <div class="form-group">
                      <a href="">Login With Facebook</a>
                  </div>

                <? form_close(); ?>

        </div>

    </div>
</div>





<?= $this->endSection() ?>