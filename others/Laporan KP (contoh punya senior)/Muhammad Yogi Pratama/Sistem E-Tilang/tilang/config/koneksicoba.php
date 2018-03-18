<?php
//membuat koneksi ke database
$host = "localhost";
$user = "root";      
$password = "";      
$database = "pnjakart_tilang";  
    
mysql_connect($host, $user, $password);    
mysql_select_db($database) ;
?>