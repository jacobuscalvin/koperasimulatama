<?php
session_start();
include "koneksi.php";

$tambah = mysql_query("UPDATE unit set nama_pimpinan='$_POST[pimpinan]' where id_unit='$_POST[id_unit]'");

if($tambah){
header('location:dataunit.php');
}

				