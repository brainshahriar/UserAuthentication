<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets\css\bootstrap.min.css'); ?>" rel="stylesheet" >
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
    <title>Hello, world!</title>
  </head>
  <body>

<div class="app">
<?= $this->include('layouts/inc/navbar.php') ?>
<?= $this->renderSection('content') ?>
</div>

  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?= base_url('assets\js\bootstrap.bundle.min.js');?>" rel="stylesheet" ></script>
    <script src="<?= base_url('assets\js\popper.min.js');?>" rel="stylesheet"></script>
    <script src="<?= base_url('assets\js\jquery-3.6.0.js');?>" rel="stylesheet"></script>
     <script src="//cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script>
  $(document).ready( function () {
    $('#mydatatable').DataTable();
} );

    </script>
    <script>
      $(document).ready(function(){
        <?php if(session()->getFlashdata('status')){ ?>

          swal({
            title: "<?= session()->getFlashdata('status') ?> ",
            text: "<?= session()->getFlashdata('status_text') ?>",
            icon: "<?= session()->getFlashdata('status_icon') ?>",
            button: "Ok Done!",
       });



        <?php } ?> });
      
    </script>
    <?= $this->renderSection('scripts') ?>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>