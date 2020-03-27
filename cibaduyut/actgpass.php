<?php
include "koneksi.php";
SESSION_start();

$username = $_POST['user'];
$plama = md5($_POST['plama']);
$pbaru = md5($_POST['pbaru']);
$kon = md5($_POST['kpb']);

$id = session_id();
$sel = mysql_query("select * from login where id_session='$id' ");
$a = mysql_fetch_array($sel);

if($pbaru != $kon){
echo "<script>alert('Konfirmasi Password Salah!');window.location='Gpassword.php';</script>";
}
else if($plama != $a['password']){
echo "<script>alert('Password Lama Anda Tidak Benar!');window.location='Gpassword.php';</script>";
}
else{
$tam = mysql_query("update login set password='$kon' where id_session='$id' ");
if($tam){
echo "<script>alert('Ubah Password Sukses!');window.location='Gpassword.php';</script>";
}
}

?>