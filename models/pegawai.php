<?php 
class pegawai{
    private $koneksi;
    public function __construct(){
        global $dbh; //instance obj dbkoneksi.php
        $this->koneksi = $dbh;
    }
//member3 method CRUD
    public function datapegawai(){
        $sql = "SELECT pegawai.*, divisi.nama as kategori
            FROM pegawai INNER JOIN divisi
            ON divisi.id = pegawai.iddivis";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getpegawai($iddivis){
        $sql = "SELECT pegawai.*, divisi.nama as kategori
            FROM pegawai INNER JOIN divisi
            ON divisi.id = pegawai.iddivis";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$iddivis]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function datadivisi(){
     $sql = "SELECT * FROM divisi";
    //panggi fungsi query() PDO 
    //untuk eksekusi query dan ambil datanya
    $rs = $this->koneksi->query($sql);
    return $rs;
    }
    public function simpan($data){
        $sql = "INSERT INTO pegawai
        (nip,nama,email ,agama,iddivis,foto) 
        VALUES (?,?,?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data){
        $sql = "UPDATE pegawai SET  nip=?,nama=?,email=? ,
        agama=?,iddivis=?,foto=? WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($iddivis){
        $sql = "DELETE From pegawai WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($iddivis);
    }
    
}



