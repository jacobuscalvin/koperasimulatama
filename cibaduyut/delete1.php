<?php
include "koneksi.php";

$delete= mysql_query("DELETE FROM resort WHERE petugas ='$_GET[petugas]'");

if($delete){
	header('location:Apetugas.php');
}

else{
	echo "Delete gagal";
}
?>