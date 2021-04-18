<?php
require_once 'models/pegawai.php';
//ciptakan object dari class Produk
$obj = new pegawai();
//panggil method tampilkan data
$rs =$obj-> datapegawai();
?>
<h3>Data Produk</h3>
<a href="index.php?hal=frompegawai"class="btn btn-primary">Tambah</a>
<table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">No</th>
      <th scope="col">Nip</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Agama</th>
      <th scope="col">Divisi</th>
      <th scope="col">Kategori</th>
      <th scope="col">Action</th>
    </tr>
    <tbody>
  <?php
  $no = 1;
  foreach($rs as $pega){  
  ?>
    <tr>
    <td><?=$no; ?></td>
      <td><?= $pega['nip']; ?></td>
      <td><?= $pega['nama']; ?></td>
      <td>><?= $pega['email']; ?></td>
      <td>><?= $pega['agama']; ?></td>
      <td>><?= $pega['iddivis']; ?></td>
      <td><?= $pega['kategori']; ?></td>
      <td>
        <form method="POST" action="Controller/pegawaiController.php" >
        <a href="index.php?hal=detailpegawai&id=<?= $pega['iddivis']; ?>" class="btn btn-info">Detail</a>
        <a href="index.php?hal=formEditpegawai&id=<?= $pega['iddivis']; ?>" class="btn btn-warning">Ubah</a>
        <button name="proses" value="hapus" 
        onclick="return confirm('Anda yakin data dihapus?')"
        class="btn btn-danger">Hapus</button>
        <input type="hidden" name="idx" value="<?= $pega['iddivis']; ?>"  />
        </form>
      </td>
    </tr>
  <?php 
  $no++;
  }
  ?>  
  </tbody>
</table>
</thead>