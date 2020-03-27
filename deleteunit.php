<?php
include "koneksi.php";

$delete= mysql_query("DELETE FROM unit WHERE id_unit ='$_GET[id_unit]'");

if($delete){
	header('location:dataunit.php');
}

else{
	echo "Delete gagal";
}
?>