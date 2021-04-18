<?php 
session_start();
global $member;

require_once 'koneksi.php';

include_once 'kode_atas.php';
include_once 'header.php';
echo '<br/>';
include_once 'menu.php';
echo '<br/>';
include_once 'main.php';
include_once 'sidebar.php';
echo '<br/>';
include_once 'footer.php';
include_once 'kode_bawah.php';