<?php
require_once 'models/pegawai.php';
$id = $_REQUEST['id'];
$obj = new pegawai();
$rs = $obj-> getpegawai($id);
//print_r($rs); exit();
?>
<div class="card" style="width: 18rem;">
<?php
$gambar = (!empty($rs['foto'])) ? $rs['foto'] : "no_image.png"; 
?>
  <img class="card-img-top" src="img/<?= $gambar ?>" width="40%" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?= $rs['nama']?></h5>
    <p class="card-text">
      Nip : <?= $rs['nip']?>
      <br/>Email: <?= $rs['email']?>
      <br/>Agama: <?= $rs['agama']?>
      <br/>Divisi: <?= $rs['iddivis']?>
      <br/>Kategori: <?= $rs['kategori']?>
    </p>
    <a href="index.php?hal=datapegawai" class="btn btn-primary">Go Back</a>
  </div>
</div>