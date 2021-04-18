<?php
$dsn = 'mysql:dbname=dbpegawaiyuda;host=localhost';
$user = 'root';
$password = '';


try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO ::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
    //echo 'Berhasil';
}
catch( PDOException $e ) {
    echo 'Gagal Koneksi DB Karena'.$e->getMessage();
}

?>
