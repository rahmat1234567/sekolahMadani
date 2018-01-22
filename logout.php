<?php
session_start();
unset($_SESSION['id_login']);
unset($_SESSION['nama_adm']);
unset($_SESSION['email']);
unset($_SESSION['telp_adm']);

header('location:index.php');
?>