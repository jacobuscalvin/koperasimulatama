<?php
include "koneksi.php";

$delete= mysql_query("DELETE FROM login WHERE id ='$_GET[id]'");

if($delete){
	header('location:Akasir.php');
}

else{
	echo "Delete gagal";
}
?>