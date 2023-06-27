<?php $this->load->view('template/header') ?>
  <!-- <div class="container mt-5">
  <form action="<?php echo site_url('login/ceklogin') ?>" method="POST">
  <h1>Login</h1>
  <?php 
  $info =$this->session->flashdata('info');
  if (!empty($info)){
    echo $info;
  } 
  ?>

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
  
  <a href="<?= base_url(); ?>registrasi" class="mt-3">Create an account</a>
  
  </div>
</form>

  </div> -->
  <div class="container mt-5">

    <div class="row mt-3 justify-content-center">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header text-center"><h3>Login</h3></div>
           
            <?php if ($this->session->flashdata('info')): ?>
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                    <?= $this->session->flashdata('info'); ?>.
                    </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('pesan')): ?>
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                    <?= $this->session->flashdata('pesan'); ?>.
                    </div>
            <?php endif; ?>
            
            <div class="card-body">
            <form action="<?php echo site_url('login/ceklogin') ?>" method="POST">
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
            <a href="<?= base_url(); ?>registrasi" class="mt-3">Create an account</a>
            </form>
            </div>
            </div>
        </div>
    </div>

</div>
  <?php $this->load->view('template/footer') ?>