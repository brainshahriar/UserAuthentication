<?php $page_session = \Config\Services::session();?>
<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>
    
<div class="container">
    <div class="row justify-content-center align-item-center">
        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-6">
                <h1>Register</h1>


               <?php 
               if($page_session->getTempdata('success')): ?>

<div class="alert alert-success" > <?= $page_session->getTempdata('success'); ?>

</div>
<?php endif; ?>
<?php 
               if($page_session->getTempdata('error')): ?>

<div class="alert alert-danger" > <?= $page_session->getTempdata('error'); ?>

</div>
<?php endif; ?>



                <?= form_open(); ?>
                  <div class="form-group">
                      <label for="">Username</label>
                      <input type="text" name="username" class="form-control" value="<?= set_value('username') ?>">
                      <span class="text-danger"><?=  display_error($validation,'username') ?></span>
                  </div>
                  <div class="form-group">
                      <label for="">Email</label>
                      <input type="text" name="email" class="form-control" value="<?= set_value('email') ?>">
                      <span class="text-danger"><?=  display_error($validation,'email') ?></span>
                  </div>
                  <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" name="password" class="form-control" value="<?= set_value('password') ?>">
                      <span class="text-danger"><?=  display_error($validation,'password') ?></span>
                  </div>
                  <div class="form-group">
                      <label for="">Confirm Password</label>
                      <input type="password" name="cpassword" class="form-control" value="<?= set_value('cpassword') ?>">
                      <span class="text-danger"><?=  display_error($validation,'cpassword') ?></span>
                  </div>
                  <div class="form-group">
                      <label for="">Mobile</label>
                      <input type="number" name="mobile" class="form-control" value="<?= set_value('number') ?>">
                      <span class="text-danger"><?=  display_error($validation,'number') ?></span>
                  </div>
                  <br>
                  <div class="form-group">
                      <input type="submit" name="register" value="Register" class="btn btn-primary">
                  </div>

                <? form_close(); ?>

        </div>

    </div>
</div>





<?= $this->endSection() ?>