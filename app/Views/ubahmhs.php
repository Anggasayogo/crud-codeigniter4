<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <div class="my-4">
      <a href="<?= base_url('/mahasiswa') ?>" class="btn btn-primary">Kembali</a>
    </div>
    <div class="my-4">
       <form method="post" action="<?= base_url('/mahasiswa/edit') ?>">
         <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
         <div class="form-group">
           <label>Nama</label>
           <input type="text" name="nama" class="form-control" value="<?= $mhs['nama'] ?>">
         </div>
         <div class="form-group">
           <label>email</label>
           <input type="email" name="email" class="form-control" value="<?= $mhs['email'] ?>">
         </div>
         <div class="form-group">
           <label>nim</label>
           <input type="number" name="nim" class="form-control" value="<?= $mhs['nim'] ?>">
         </div>
         <div class="form-group">
           <label>jurusan</label>
           <input type="text" name="jurusan" class="form-control" value="<?= $mhs['jurusan'] ?>">
         </div>
         <button type="submit" class="btn btn-danger float-right">Submit!</button>
       </form>
    </div>
<?= $this->endSection() ?>