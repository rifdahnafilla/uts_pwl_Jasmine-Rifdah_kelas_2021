<?php
session_start();
unset($_SESSION['MEMBER']);
header('Location:http://localhost/index.php?hal=home');