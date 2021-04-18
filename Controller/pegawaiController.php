<?php
require_once '../koneksi.php';
require_once '../models/pegawai.php';
//1.Tangkap request elemnt form
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$Agama_ = $_POST['agama'];
$divisi = $_POST['iddivis'];
$foto = $_POST['foto'];
$tombol = $_POST['proses'];

//2.menyimpang data-data diatas sebuah array
$data = [
    $nip,
    $nama,
    $email,
    $Agama_,
    $divisi,
    $foto,
];
//3. proses
$obj = new pegawai();
switch ($tombol) {
    case 'simpan':
        $obj->simpan($data);
    break;
    case 'ubah':
        $data[] = $_POST['idx'];
         $obj->ubah($data);
     break;
    case 'hapus':
        $iddivis[] = $_POST['idx'];
         $obj->hapus($iddivis);
    break;
    default:
    header('Location:http://localhost/index.php?hal=pegawai');
    break;
}

//4.Landing page
header('Location:http://localhost/index.php?hal=pegawai');
