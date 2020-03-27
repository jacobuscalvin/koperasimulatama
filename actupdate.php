<?php
session_start();
include "koneksi.php";
$password = md5($_POST['password']);

$tambah = mysql_query("UPDATE login set username = '$_POST[username]' , password = '$password' , level = '$_POST[unit]' , nama_unit = '$_POST[unit]' where id='$_POST[id]'");

if($tambah){
header('location:Akasir.php');
}

?>