<?php
session_start();

unset($_SESSION['id']);
unset($_SESSION['nama']);
unset($_SESSION['status']);
unset($_SESSION['email']);
unset($_SESSION['telp']);
unset($_SESSION['jk']);
unset($_SESSION['nama_sklh']); 
unset($_SESSION['nama_kls']);
unset($_SESSION['id_sklh']);

session_destroy();

header('location:index.php');
?>