<?php
session_start();
include "koneksi.php";

if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
include "admin.php";
}
else{
  echo" <link href='css/ghpages-materialize.css' type='text/css' rel='stylesheet' media='screen,projection'>";
include "menu.php";

$select = mysql_query ("SELECT a.*,b.*,c.* FROM anggota a INNER JOIN resort b ON a.petugas = b.petugas INNER JOIN unit c ON b.id_unit=c.id_unit WHERE id_anggota = '$_GET[id_anggota]'");
  while($data = mysql_fetch_array($select)){
?>

<br><h4><center><b>Data Lengkap Anggota <p class='flow-text'><?php echo $data['nama']; ?></p></b></h4><br>
<div class="row">
<div class="col s12 m12 l12">
<div class="card-panel teal darken-5" style="margin-right: 12rem; margin-left: 12rem;">	
<table border="0" bgcolor="white" align="center">
						<tr>
							<td><div style="margin-left: 23rem;"><b>Nama Lengkap</td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><?php echo $data['nama']; ?> <input type = 'hidden' name='id_anggota' value ="<?php echo $data['nama']; ?>"></td> 
						</tr>					
						<tr>
							<td><div style="margin-left: 23rem;"><b>Jenis Kelamin</td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><?php echo $data['jenis_kelamin']; ?> <input type = 'hidden' name='id_anggota' value ="<?php echo $data['jenis_kelamin']; ?>"></td> 
						</tr>					
						<tr>
							<td><div style="margin-left: 23rem;"><b>Nama Ibu</td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><?php echo $data['nama_ibu']; ?> </td> 
						</tr>	
						<tr>
							<td><div style="margin-left: 23rem;"><b>Nomor KTP</td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><?php echo $data['no_ktp']; ?> </td> 
						</tr>					
						<tr>
							<td><div style="margin-left: 23rem;"><b>Nomor KK</td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><?php echo $data['no_kk']; ?> </td> 
						</tr>					
						<tr>
							<td><div style="margin-left: 23rem;"><b>Alamat</td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><?php echo $data['alamat']; ?> </td> 
						</tr>					
						<tr>
						<tr>
							<td><div style="margin-left: 23rem;"><b>Kecamatan</td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><?php echo $data['kecamatan']; ?> </td> 
						</tr>					
						<tr>
						<tr>
							<td><div style="margin-left: 23rem;"><b>Kelurahan</td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><?php echo $data['kelurahan']; ?> </td> 
						</tr>					
						<tr>
						<tr>
							<td><div style="margin-left: 23rem;"><b>RT / RW</td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><?php echo $data['rt']; ?> / <?php echo $data['rw']; ?> </td>  
						</tr>					
						<tr>
							<td><div style="margin-left: 23rem;"><b>Kota</td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><?php echo $data['kota']; ?> </td> 
						</tr>					
						<tr>
						<tr>
							<td><div style="margin-left: 23rem;"><b>Tempat , Tanggal Lahir</td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><?php echo $data['tempat']; ?> , <?php echo $data['tanggal_lahir']; ?> </td> 
						</tr>	
						<tr>
							<td><div style="margin-left: 23rem;"><b>Tanggal Input</td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><?php echo $data['tanggal_input']?> </td> 
						</tr>				
						<tr>
							<td><div style="margin-left: 23rem;"><b>Unit</td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><?php echo $data['nama_unit']?> </td> 
						</tr>	
						<tr>
							<td><div style="margin-left: 23rem;"><b>Petugas</td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><?php echo $data['petugas']?> </td> 
						</tr>	
						<tr>	
							<td><div style="margin-left: 23rem;"><b>Status</td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><?php echo $data['status']; ?> <input type = 'hidden' name='id_anggota' value ="<?php echo $data['status']; ?>"></td> 
						</tr>	
						
						<tr><td><br><br></td></tr>
						<th colspan=2>
						<a href="dataanggota.php" class='col s5 btn btn-large waves-effect red' style='margin-left: 22rem;'>Kembali</a>
						</th>
						</tr>
						
						
						</table>
<?php
}
}
?>