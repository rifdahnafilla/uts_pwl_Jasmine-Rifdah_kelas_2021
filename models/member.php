<?php 
class member{
    private $koneksi;
    public function __construct(){
        global $dbh; //instance obj dbkoneksi.php
        $this->koneksi = $dbh;
    }
//member3 method 
    public function cekloging($data){
        $sql = "SELECT * FROM member 
        WHERE username = ? AND password = SHA1(MD5(?))";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps->fetch();
        return $rs;
    }
}



