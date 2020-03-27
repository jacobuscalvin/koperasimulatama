<?php
include "koneksi.php";

$selects = mysql_query("SELECT * FROM login where username = '$_POST[username]'");
$datas = mysql_fetch_array($selects);

$password = md5($_POST['password']);
$password_cc = md5($_POST['password_cc']);
If ($password != $password_cc){
echo "<script>alert('Konfirmasi Password Salah!');window.location='inputkasir.php';</script>";
}
else if ($_POST['username'] == $datas['username']){
echo "<script>alert('Kasir sudah Terdaftar di Unit lain.. Silahkan Coba Kembali');window.location='inputkasir.php';</script>";
}

else{
$action = mysql_query("INSERT INTO login(nama,username,password,level,nama_unit)VALUES('$_POST[nama]','$_POST[username]','$password','$_POST[unit]','$_POST[unit]')");
if ($action){
	header('location:Akasir.php');
	}
else{
	echo "<script>alert('Gagal Registrasi!');window.location='inputkasir.php';
</script>";
	}
} 
?>