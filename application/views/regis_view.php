<?php $this->load->view('template/header') ?>
  <!-- <div class="container mt-5">
  <form action="<?php echo site_url('registrasi/input') ?>" method="POST">
  <h1>Registration</h1>

  <div class="form-group mt-3">
    <label for="username">Username</label>
    <input type="username" class="form-control" id="username" name="username">
   
  </div>
  <div class="form-group mt-3">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary mt-3">Submit</button>
  <div class="row">
    
    <a href="<?= base_url(); ?>login">Already have an account</a>
   
  </div>
</form>

  </div> -->
  <div class="container mt-5">

<div class="row mt-3 justify-content-center">
    <div class="col-md-6">
    <div class="card">
        <div class="card-header text-center"><h3>Registration</h3></div>
        <div class="card-body">
        <form action="<?php echo site_url('registrasi/input') ?>" method="POST">
        <div class="mb-3">
        <label for="username">Username</label>
        <input type="username" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
        <button type="submit" class="btn btn-success mt-3">Submit</button>
        </div>
        <a href="<?= base_url(); ?>login">Already have an account</a>
        </form>
        </div>
        </div>
    </div>
</div>

</div>
  <?php $this->load->view('template/footer') ?>