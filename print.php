<?php
include "koneksi.php";

echo "<br><h2><b><center>DATA ANGGOTA </b></h2><br>";
echo "	<table border=1 align='center' bgcolor='white'>
		<tr align='center'>
		<td><font>ID Anggota</font></td>
		<td><font>Nomor KTP</font></td>
		<td><font>Nama Lengkap</font></td>
		<td><font>Nomor KK</font></td>
		<td><font>Nama Ibu</font></td>
		<td><font>Tanggal Lahir</font></td>
		<td><font>Jenis Kelamin</font></td>
		<td><font>Jalan</font></td>
		<td><font>RT</font></td>
		<td><font>RW</font></td>
		<td><font>Kelurahan</font></td>
		<td><font>Kecamatan</font></td>
		<td><font>Kota</font></td>
		<td><font>Tanggal Input</font></td>
		<td><font>Unit</font></td>
		<td><font>Petugas</font></td>
		<td><font>Status</font></td>
		</tr>
	";
$sel = mysql_query("SELECT a.*,b.*,c.* FROM anggota a INNER JOIN resort b ON a.petugas = b.petugas INNER JOIN unit c ON b.id_unit=c.id_unit");
while($a = mysql_fetch_array($sel)){
echo "	<tr align='center'>
		<td>$a[id_anggota]</td>
		<td>$a[no_ktp]</td>
		<td>$a[nama]</td>
		<td>$a[no_kk]</td>
		<td>$a[nama_ibu]</td>
		<td>$a[tanggal_lahir]</td>
		<td>$a[jenis_kelamin]</td>
		<td>$a[alamat]</td>
		<td>$a[rt]</td>
		<td>$a[rw]</td>
		<td>$a[kelurahan]</td>
		<td>$a[kecamatan]</td>
		<td>$a[kota]</td>
		<td>$a[tanggal_input]</td>
		<td>$a[nama_unit]</td>
		<td>$a[petugas]</td>
		<td>$a[status]</td>
		</tr>
	";
}

echo "	<tr align='center'>
		<td colspan=17>
		<input type='button' value='Back' OnClick='self.history.back();'>
		<input type='submit' value='Print' OnClick='print()'>
		</td>
		</tr>
		</table>
	";
?>