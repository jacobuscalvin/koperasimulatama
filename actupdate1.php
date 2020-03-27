<?php
session_start();
include "koneksi.php";
$tanggal = date('Y-m-d');
$update = mysql_query("UPDATE anggota set nama = '$_POST[namalengkap]',tempat = '$_POST[tempat]',tanggal_lahir ='$_POST[tanggal]',
	jenis_kelamin = '$_POST[jk]',no_ktp = '$_POST[noktp]',no_kk = '$_POST[nokk]',nama_ibu ='$_POST[namaibu]',alamat = '$_POST[jalan]',rt = '$_POST[rt]',rw = '$_POST[rw]',kecamatan = '$_POST[kecamatan]',kelurahan = '$_POST[kelurahan]',kota = '$_POST[kota]',tanggal_input = '$tanggal',petugas = '$_POST[petugas]',status = '$_POST[status]' where id_anggota = '$_POST[id_anggota]'");

if($update){
header('location:dataanggota.php');
}

				