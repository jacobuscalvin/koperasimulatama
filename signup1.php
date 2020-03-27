<?php
include "koneksi.php";
session_start();

$selects = mysql_query("SELECT * FROM resort where petugas = '$_POST[nama]'");
$datas = mysql_fetch_array($selects);

$select = mysql_query("SELECT * FROM resort where id_unit = '$_POST[unit]'");
$data = mysql_fetch_array($select);


IF(($_POST['nama'] AND $_POST['unit']) == ($datas['petugas'] AND $data['id_unit'])){
echo "<script>alert('Petugas Sudah Terdaftar di Unit.. Silahkan Coba Kembali');window.location='inputpetugas.php';</script>";
}
else{
$action = mysql_query("INSERT INTO resort(petugas,id_unit)VALUES('$_POST[nama]','$_POST[unit]')");}
if($action){
	header('location:Apetugas.php');
	}

 
?>






