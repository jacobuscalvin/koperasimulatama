<?php
include "koneksi.php";

$delete= mysql_query("DELETE FROM anggota WHERE id_anggota ='$_GET[id_anggota]'");

if($delete){
	header('location:dataanggota.php');
}

else{
	echo "Delete gagal";
}
?>