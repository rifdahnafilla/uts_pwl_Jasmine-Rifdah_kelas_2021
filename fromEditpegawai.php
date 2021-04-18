<?php
require_once 'models/pegawai.php';
$ar_agama = ['Islam', 'Hindu', 'Buddha', 'Katolik', 'konghucu', 'Kristen'];
$obj = new pegawai();
$rs = $obj->datadivisi();
$iddivis = $_REQUEST['iddivis'];
$data_edit = $obj->getpegawai($iddivis);
?>



<h2>From Edit Pegawai</h2>
<form method="POST" action="Controller/pegawaiController.php">
  <div class="form-group row">
    <label for="nip" class="col-4 col-form-label">Nip</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nip" name="nip" value="<?= $data_edit['nama'] ?>" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" value="<?= $data_edit['nama'] ?>" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" value="<?= $data_edit['email'] ?>" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Agama</label> 
    <div class="col-8">
      <?php
      $no= 0;
      foreach($ar_agama as $agama){
    //edit kondisi
    $cek = ($data_edit['agama'] == $agama) ? "checked " : "";
      ?>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Agama" id="Agama_<?= $no?>" type="radio" class="custom-control-input" value="<?= $agama?>" required="required"> 
        <label for="Agama_<?= $no ?>" class="custom-control-label"> value="<?= $agama ?>" <?= $cek?> required="required"</label>
      </div>
      <?php
       $no++;
        } ?>
    </div>
  </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Agama" id="Agama_2" type="radio" class="custom-control-input" value="buddha" required="required"> 
        <label for="Agama_2" class="custom-control-label">Buddha</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Agama" id="Agama_3" type="radio" class="custom-control-input" value="Katolik" required="required"> 
        <label for="Agama_3" class="custom-control-label">Katolik</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Agama" id="Agama_4" type="radio" class="custom-control-input" value="konghucu" required="required"> 
        <label for="Agama_4" class="custom-control-label">Konghucu</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Agama" id="Agama_5" type="radio" class="custom-control-input" value="kristen" required="required"> 
        <label for="Agama_5" class="custom-control-label">Kristen</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="--Pilih Divsi--" class="col-4 col-form-label">Divisi</label> 
    <div class="col-8">
      <select id="iddivis" name="divisi"  class="custom-select" required="required">
        <option value="">--Pilih Divisi--</option>
        <?php
        foreach($rs as $d){
        $sel = ($data_edit['iddivis'] == $d['id']) ? "selected" : "";
        ?>
        <option value="<?= $d['id']?> " <?=$sel ?>> <?= $d['nama'] ?> </option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="foto" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
      <input id="foto" name="foto" type="text" value="<?= $data_edit['foto']?>" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" value="ubah" class="btn btn-primary">Ubah</button>
      <input type="hidden" name="idx" value="<?= $iddivis?>"  />
    </div>
  </div>
</form>