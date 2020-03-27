<?php
include "koneksi.php";
session_start();


$selects = mysql_query("SELECT * FROM unit where id_unit = '$_POST[id]'");
$datas = mysql_fetch_array($selects);

$select = mysql_query("SELECT * FROM unit where nama_unit = '$_POST[unit]'");
$data = mysql_fetch_array($select);

if($_POST['id']==$datas['id_unit']){
echo "<script>alert('Id Unit Sudah Terdaftar.. Silahkan Coba Kembali');window.location='inputunit.php';</script>";
}
else if($_POST['unit']==$data['nama_unit']){
echo "<script>alert('Nama Unit Sudah Terdaftar.. Silahkan Coba Kembali');window.location='inputunit.php';</script>";
}

else{



$tambah = mysql_query("INSERT INTO unit(id_unit,nama_unit,nama_pimpinan) 
						VALUES ('$_POST[id]','$_POST[unit]','$_POST[pimpinan]')");									

}
										


if($tambah){
header('location:dataunit.php');
}
	

?>