<?php
include "koneksi.php";
session_start();

$tanggal = date('Y-m-d');


$select = mysql_query("SELECT * FROM anggota where no_ktp = '$_POST[noktp]'");
$data = mysql_fetch_array($select);

$selecta = mysql_query("SELECT * FROM anggota where no_kk = '$_POST[nokk]'");
$dataa = mysql_fetch_array($selecta);

$selectaa = mysql_query("SELECT * FROM resort where petugas = '$_POST[petugas]'");
$dataaa = mysql_fetch_array($selectaa);

if($_POST['noktp']==$data['no_ktp']){
echo "<script>alert('NO KTP Sudah Terdaftar.. Silahkan Coba Kembali');window.location='inputanggota.php';</script>";
}
else if($_POST['nokk']==$dataa['no_kk']){
echo "<script>alert('NO KK Sudah Terdaftar.. Silahkan Coba Kembali');window.location='inputanggota.php';</script>";
}
else if($_POST['petugas']!=$dataaa['petugas']){
echo "<script>alert('Petugas tidak ditemukan!');window.location='inputanggota.php';</script>";
}

else{

$sel = mysql_query("SELECT * FROM anggota ORDER BY id_anggota DESC LIMIT 1");
$query= mysqli_fetch_array($sel);

$tambah = mysql_query("INSERT INTO anggota(id_anggota,nama,tempat,tanggal_lahir,
	jenis_kelamin,no_ktp,no_kk,nama_ibu,alamat,rt,rw,kecamatan,kelurahan,kota,tanggal_input,petugas,status) 
						VALUES ('$query[idanggota]','$_POST[namalengkap]','$_POST[tempat]','$_POST[tanggal]',
							'$_POST[jk]','$_POST[noktp]','$_POST[nokk]','$_POST[namaibu]',
							'$_POST[jalan]','$_POST[rt]','$_POST[rw]','$_POST[kecamatan]',
							'$_POST[kelurahan]','$_POST[kota]','$tanggal','$_POST[petugas]','$_POST[status]')");									

}
										


if($tambah){
header('location:dataanggota.php');
}
	

?>