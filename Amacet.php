<?php
session_start();
include "koneksi.php";

if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
include "admin.html";
}
else{
  echo" <link href='css/ghpages-materialize.css' type='text/css' rel='stylesheet' media='screen,projection'>";
include "menu.php";
echo "
<link href='css/ghpages-materialize.css' type='text/css' rel='stylesheet' media='screen,projection'>

    <form method='GET' action='$_SERVER[PHP_SELF]'>
    <h3><b><center>Data Anggota Macet</b></h3>

<div class='row'>
<div class='col s16 m16 l16'>
<div class='card-panel teal darken-5' style='margin-right: 0rem; margin-left: 3rem;'>	
    <table border=0 align='center' bgcolor='white' width='1024px' class='highlight'>
    <tr>
	<td colspan=3><p class='flow-text' style='margin-top: 1rem; margin-left: 22rem;'>Cari</p></td>
    <td colspan=2> 
    <div class='input-field col s12 m8' style='margin-left: 2.5rem;'><select class='browser-default' name='cari'>
    <option value='id'>ID Anggota</option>
    <option value='no_ktp'>Nomor KTP</option>
    <option value='no_kk'>Nomor KK</option>
    <option value='nama'>Nama</option>
    <option value='nama_ibu'>Nama Ibu</option>
    <option value='tanggal_input'>Tanggal Input</option>
    </div></select>
	</td>
    <td colspan=2><div class='input-field col s12' style='margin-top: 2rem; margin-right: 2rem;'><input type='text' name='search'></div></td>
    <td colspan=4><div class='input-field col s11' style='margin-top: 1rem; margin-left: 1rem;'>
					<button class='btn waves-effect waves-light' type='submit' name='submit'>Submit
					<i class='material-icons right'>send</i>
					</button>
    </td>
    </tr>
	
	
	
    <tr align='center'>
    <th><div style='margin-left: 0.5rem;'><center>ID Anggota</div><br></th>
    <th><div style='margin-left: 0.5rem;'><center>Nomor KTP</div><br></th>
    <th><div style='margin-left: 0.5rem;'><center>Nama Lengkap</div><br></th>
    <th><div style='margin-left: 0.5rem;'><center>Nomor KK</div><br></th>
    <th><div style='margin-left: 0.5rem;'><center>Nama Ibu</div><br></th>
    <th><div style='margin-left: 0.5rem;'><center>Jenis Kelamin</div><br></th>
    <th><div style='margin-left: 0.5rem;'><center>Tanggal Input</div><br></th>
    <th><div style='margin-left: 0.9rem;'><center>Unit</div><br></th>
    <th><div style='margin-left: 0.9rem;'><center>Nama PDL</div><br></th>
    <th><div style='margin-left: 0.9rem;'><center>Status</div><br></th>
    <th><div style='margin-left: 2rem;'><center>Action</div><br></th>
    </tr>
  ";
if(empty($_GET['cari'])){
$select = mysql_query ("SELECT a.*,b.*,c.* FROM anggota a INNER JOIN resort b ON a.petugas = b.petugas INNER JOIN unit c ON b.id_unit=c.id_unit WHERE a.status = 'Macet'");
while($a = mysql_fetch_array($select)){
echo "  <tr align='center'>
    <td><div style='margin-left: 0.5rem;'><center>$a[id_anggota]</td>
    <td><div style='margin-left: 0.5rem;'><center>$a[no_ktp]</td>
    <td><div style='margin-left: 0.5rem;'><center>$a[nama]</td>
    <td><div style='margin-left: 0.5rem;'><center>$a[no_kk]</td>
    <td><div style='margin-left: 0.5rem;'><center>$a[nama_ibu]</td>
    <td><div style='margin-left: 0.5rem;'><center>$a[jenis_kelamin]</td>
    <td><div style='margin-left: 0.5rem;'><center>$a[tanggal_input]</td>
    <td><div style='margin-left: 0.9rem;'><center>$a[nama_unit]</td>
    <td><div style='margin-left: 0.9rem;'><center>$a[petugas]</td>
    <td><div style='margin-left: 0.9rem;'><center>$a[status]</td>
    <td><div style='margin-left: 2rem;'><center>
    <a href='Aupdate.php?id_anggota=$a[id_anggota]'>UPDATE</a>
    &nbsp&nbsp|&nbsp&nbsp
    <a href='Adelete.php?id_anggota=$a[id_anggota]'>DELETE</a>&nbsp
	<br>
	<a href='selengkapnya.php?id_anggota=$a[id_anggota]'>Lihat Data</a>

    </div></td>
    </tr>
  ";
}
}
else{
if($_GET['cari'] == 'id'){
$sel = mysql_query("SELECT a.*,b.*,c.* FROM anggota a INNER JOIN resort b ON a.petugas = b.petugas INNER JOIN unit c ON b.id_unit=c.id_unit WHERE a.id_anggota   like '%$_GET[search]%' AND a.status='Macet'");
}
else if($_GET['cari'] == 'no_ktp'){
$sel = mysql_query("SELECT a.*,b.*,c.* FROM anggota a INNER JOIN resort b ON a.petugas = b.petugas INNER JOIN unit c ON b.id_unit=c.id_unit WHERE a.no_ktp like '%$_GET[search]%' AND a.status='Macet'");
}
else if($_GET['cari'] == 'nama'){
$sel = mysql_query("SELECT a.*,b.*,c.* FROM anggota a INNER JOIN resort b ON a.petugas = b.petugas INNER JOIN unit c ON b.id_unit=c.id_unit WHERE a.nama  like  '%$_GET[search]%' AND a.status='Macet'");
}
else if($_GET['cari'] == 'no_kk'){
$sel = mysql_query("SELECT a.*,b.*,c.* FROM anggota a INNER JOIN resort b ON a.petugas = b.petugas INNER JOIN unit c ON b.id_unit=c.id_unit WHERE a.no_kk   like '%$_GET[search]%' AND a.status='Macet'");
}
else if($_GET['cari'] == 'nama_ibu'){
$sel = mysql_query("SELECT a.*,b.*,c.* FROM anggota a INNER JOIN resort b ON a.petugas = b.petugas INNER JOIN unit c ON b.id_unit=c.id_unit WHERE a.nama_ibu  like '%$_GET[search]%' AND a.status='Macet'");
}
else if($_GET['cari'] == 'tanggal_input'){
$sel = mysql_query("SELECT a.*,b.*,c.* FROM anggota a INNER JOIN resort b ON a.petugas = b.petugas INNER JOIN unit c ON b.id_unit=c.id_unit WHERE a.tanggal_input  like '%$_GET[search]%' AND a.status='Macet'");
}
while($a = mysql_fetch_array($sel)){
echo "  <tr align='center'>
    <td><div style='margin-left: 0.5rem;'><center>$a[id_anggota]</td>
    <td><div style='margin-left: 0.5rem;'><center>$a[no_ktp]</td>
    <td><div style='margin-left: 0.5rem;'><center>$a[nama]</td>
    <td><div style='margin-left: 0.5rem;'><center>$a[no_kk]</td>
    <td><div style='margin-left: 0.5rem;'><center>$a[nama_ibu]</td>
    <td><div style='margin-left: 0.5rem;'><center>$a[jenis_kelamin]</td>
    <td><div style='margin-left: 0.5rem;'><center>$a[tanggal_input]</td>
    <td><div style='margin-left: 0.9rem;'><center>$a[nama_unit]</td>
    <td><div style='margin-left: 0.9rem;'><center>$a[petugas]</td>
    <td><div style='margin-left: 0.9rem;'><center>$a[status]</td>
    <td><div style='margin-left: 2rem;'><center>
    <a href='Aupdate.php?id_anggota=$a[id_anggota]'>UPDATE</a>
    &nbsp&nbsp|&nbsp&nbsp
    <a href='Adelete.php?id_anggota=$a[id_anggota]'>DELETE</a>&nbsp&nbsp&nbsp&nbsp
	<br>
	<a href='selengkapnya.php?id_anggota=$a[id_anggota]'>Lihat Data</a>

    </div></td>
    </tr>
  ";
}
}
echo "  </table>
    </form>";
}
echo "  </body>";

?>  