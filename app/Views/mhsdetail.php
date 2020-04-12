<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<ul class="list-group my-4">
  <li class="list-group-item"><?= $mhs['nama'] ?></li>
  <li class="list-group-item"><?= $mhs['email'] ?></li>
  <li class="list-group-item"><?= $mhs['nim'] ?></li>
  <li class="list-group-item"><?= $mhs['jurusan'] ?></li>
  <a href="<?= base_url('/mahasiswa') ?>" class="btn-primary list-group-item active text-center">Kembali</a>
</ul>
<?= $this->endSection() ?>