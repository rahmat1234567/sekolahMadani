<?php
if($_GET['module']=="home"){
include "module/home.php";
}
if($_GET['module']=="tampiljadwal"){
include "module/jadwal/tampiljadwal.php";
}
if($_GET['module']=="inputjadwal"){
include "module/jadwal/inputjadwal.php";
}
if($_GET['module']=="st_siswa"){
include "module/Statistik/st_siswa.php";
}
if($_GET['module']=="th_nilai"){
include "module/nilai/th_nilai.php";
}
if($_GET['module']=="input_nilai"){
include "module/nilai/input_nilai.php";
}

if($_GET['module']=="siswa"){
include "module/siswa/siswa.php";
}
if($_GET['module']=="tampil"){
include "module/siswa/tampil.php";
}
if($_GET['module']=="input_siswa"){
include "module/siswa/input_siswa.php";
}
if($_GET['module']=="siswa_det"){
include "module/siswa/siswa_det.php";
}
if($_GET['module']=="detail_siswa"){
include "module/siswa/detail_siswa.php";
}

if($_GET['module']=="tampil_data_absen"){
include "module/absen/tampil_data_absen.php";
}
if($_GET['module']=="pilihan"){
include "module/absen/pilihan.php";
}
if($_GET['module']=="absen_siswa"){
include "module/absen/absen_siswa.php";
}
if($_GET['module']=="pilih_view"){
include "module/absen/pilih_view.php";
}

if($_GET['module']=="input_absen"){
include "module/absen/input_absen.php";
}
if($_GET['module']=="absen"){
include "module/absen/absen.php";
}
if($_GET['module']=="pilih_laporan"){
include "module/laporan/pilih_laporan.php";
}
if($_GET['module']=="laporan"){
include "module/laporan/laporan.php";
}
if($_GET['module']=="user"){
include "module/user/user.php";
}
if($_GET['module']=="input_user"){
include "module/user/input_user.php";
}

if($_GET['module']=="input_guru"){
include "module/guru/input_guru.php";
}
if($_GET['module']=="detail_guru"){
include "module/guru/detail_guru.php";
}
if($_GET['module']=="guru_det"){
include "module/guru/guru_det.php";
}

if($_GET['module']=="guru"){
include "module/guru/guru.php";
}
if($_GET['module']=="tampil_guru"){
include "module/guru/tampil_guru.php";
}
if($_GET['module']=="input_kelas"){
include "module/kelas/input_kelas.php";
}
if($_GET['module']=="kelas"){
include "module/kelas/kelas.php";
}
if($_GET['module']=="input_sekolah"){
include "module/sekolah/input_sekolah.php";
}
if($_GET['module']=="sekolah"){
include "module/sekolah/sekolah.php";
}
if($_GET['module']=="input_matpel"){
include "module/matpel/input_matpel.php";
}
if($_GET['module']=="matpel"){
include "module/matpel/matpel.php";
}
if($_GET['module']=="input_staffit"){
include "module/staffit/input_staffit.php";
}
if($_GET['module']=="staffit"){
include "module/staffit/staffit.php";
}
if($_GET['module']=="nilai"){
include "module/nilai/nilai.php";
}
if($_GET['module']=="nilaitugas"){
include "module/nilai/nilaitugas.php";
}
if($_GET['module']=="input_nilaitugas"){
include "module/nilai/input_nilaitugas.php";
}
if($_GET['module']=="tampil_tugas"){
include "module/nilai/tampil_tugas.php";
}
if($_GET['module']=="tampil_ulangan"){
include "module/nilai/tampil_ulangan.php";
}
if($_GET['module']=="ekskul"){
include "module/siswa/ekskul.php";
}
if($_GET['module']=="lihatjadwal"){
include "module/laporan/lihatjadwal.php";
}
if($_GET['module']=="lampiranabsen"){
include "module/laporan/lampiranabsen.php";
}
?>