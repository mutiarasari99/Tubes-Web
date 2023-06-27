<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/navbar'); ?>

<div class="container mb-5">
<?php if ($this->session->flashdata('flash')): ?>
<div class="row mt-3">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Anggota <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
</div>
<?php endif; ?>
<div class="row mt-3">
    <div class="col-md-6">
        <a href="<?= base_url('anggota/tambah'); ?>" class="btn btn-success text-light">Tambah Data Anggota</a>
    </div>
    <div class="col-6">
    <a href="<?= base_url('login/logout'); ?>" class="btn btn-danger text-light float-end">Logout</a>
    </div>
</div>
<div class="row mt-3">
   <div class="col-md-5">
      <form action="<?= base_url('anggota'); ?>" method="post">
         <div class="input-group mb-3">
         <input type="text" class="form-control" placeholder="Cari anggota..." autocomplete="off" autofocus name="keyword">
         <input class="btn btn-success text-light" type="submit" name="submit"></input>
         </div>
      </form>
   </div>
</div>

                  <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                        <tr>
                           <th>No</th>
                           <th>Nama</th>
                           <th>Email</th>
                           <th>No Hp</th>
                           <th>Alamat</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                     <!-- klo data teada -->
                     <?php if(empty($anggota)): ?>
                        <tr>
                           <td colspan="6">
                           <div class="alert alert-danger" role="alert">
                          Data tidak ditemukan
                           </div>
                           </td>
                        </tr>
                     <?php endif; ?>
                        <?php
                        $no = 0; 
                        foreach ($anggota as $agt) { ?>
                           <tr>
                              <td><?= ++$start; ?></td>
                              <td><?= $agt['nama']; ?></td>
                              <td><?= $agt['email']; ?></td>
                              <td><?= $agt['no_hp']; ?></td>
                              <td><?= $agt['alamat']; ?></td>
                              <td>
                                 <a href="<?= base_url('anggota/ubah/' . $agt['id']); ?>" class="badge bg-success text-light">Edit</a>
                                 <a href="<?= base_url('anggota/hapus/' . $agt['id']); ?>" class="badge bg-danger text-light">Delete</a>
                              </td>
                           </tr>
                        <?php } ?>
                     </tbody>
                  </table>
                  <?= $this->pagination->create_links(); ?>
               </div>
               
</div>
</div>
<?php $this->load->view('template/footer'); ?>