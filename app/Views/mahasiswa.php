<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <div class="my-4">
      <?php if(session()->getFlashdata('success')) :?>
      <div class="alert alert-success" role="alert">
      <?= session()->getFlashdata('success') ?>
      </div>
      <?php endif; ?>
      <a href="<?= base_url('/mahasiswa/create') ?>" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="my-4">
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Nim</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; foreach($mhs as $row ) : ?>
    <tr>
       <td><?= $i++ ?></td>
       <td><?= $row['nama'] ?></td>
       <td><?= $row['email'] ?></td>
       <td><?= $row['nim'] ?></td>
       <td><?= $row['jurusan'] ?></td>
       <td>
         <a href="<?= base_url('mahasiswa/detail').'/'.$row['id']; ?>" class="badge badge-success btn-xs">Detail</a>
         <a href="<?=  base_url('mahasiswa/delete').'/'.$row['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus..?')" class="badge badge-danger btn-xs" >Hapus</a>
         <a href="<?=  base_url('mahasiswa/update').'/'.$row['id']; ?>" class="badge badge-warning btn-xs" >Ubah</a>
       </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>
<?= $this->endSection() ?>