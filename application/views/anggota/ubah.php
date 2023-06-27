<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/navbar'); ?>
<div class="container">

    <div class="row mt-5 justify-content-center">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">Form Tambah Data Anggota</div>
            <div class="card-body">
            <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $anggota['id']; ?>">    
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $anggota['nama']; ?>">
                <div class="form-text text-danger"><?= form_error('nama'); ?></div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?= $anggota['email']; ?>">
                <div class="form-text text-danger"><?= form_error('email'); ?></div>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No Hp</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $anggota['no_hp']; ?>">
                <div class="form-text text-danger"><?= form_error('no_hp'); ?></div>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $anggota['alamat']; ?>">
                <div class="form-text text-danger"><?= form_error('alamat'); ?></div>
            </div>
            <button type="submit" name="ubah" class="btn btn-success">Ubah Data</button>
            </form>
            </div>
            </div>
        </div>
    </div>

</div>
<?php $this->load->view('template/footer'); ?>