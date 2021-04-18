<?php
session_start();
require_once '../koneksi.php';
require_once '../models/member.php';
//1.Tangkap request elemnt form
$username = $_POST['username'];
$password = $_POST['username'];
//2.menyimpang data-data diatas sebuah array
$data = [
    $username,
    $password,
];
//3. proses
$obj = new member();
$rs = $obj->cekloging($data);
if(!empty($rs)){
    //simpan session
    $_SESSION['MEMBER'] =$rs;
    //4.Landing page
    header('Location:http://localhost/index.php?hal=pegawai');
}
else{
    //4.Landing page
    header('Location:http://localhost/index.php?hal=gagallogin');

}