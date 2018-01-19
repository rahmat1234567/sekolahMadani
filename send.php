<?php
$noTujuan = "+6281333104139";
$message = "loha";
 
exec('c:\xampp\htdocs\sikol\bin\gammu-smsd-inject.exe -c c:\xampp\htdocs\smsku\bin\smsdrc EMS '.$noTujuan.' -text "'.$message.'"');
 
?>