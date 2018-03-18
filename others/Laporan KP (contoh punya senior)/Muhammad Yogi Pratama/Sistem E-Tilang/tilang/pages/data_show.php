<?php
include('../config/koneksicoba.php');

// ambil dari url
$get_notil = $_GET['notilang'];

// ambil dari database
$query = "SELECT * FROM daftarnama a, putusan b WHERE a.notilang=b.notilang and a.notilang = $get_notil";

$hasil = mysql_query($query);

$data = array();

while ($row = mysql_fetch_assoc($hasil)) {
  $data[] = $row;
}
