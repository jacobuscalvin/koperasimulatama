<?php
session_start();
include "koneksi.php";

if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
include "admin.html";
}
else{
  echo" <link href='css/ghpages-materialize.css' type='text/css' rel='stylesheet' media='screen,projection'>";
include "menu.php";
?>
<h3><b><center>Ubah Data Unit </b></h3>
<form method ="POST" action ='actupdate2.php'>
<?php
		include "koneksi.php";
		$select = mysql_query("SELECT * FROM unit WHERE id_unit = '$_GET[id_unit]'");
		$data = mysql_fetch_array($select);
	?>

<input type='hidden' name='id_unit'
	value="<?php echo $data['id_unit']; ?>">
	
<div class="row">
<div class="col s12 m12 l12">
<div class="card-panel teal darken-5" style="margin-right: 12rem; margin-left: 12rem;">		
	
<table border ='0' bgcolor="white" align ='center'>
<tr>
<th><div style="margin-left: 12rem;">Nama Unit</div></th>
<td><div class="input-field col s5" style="margin-right: 12rem;">
	<input type='text' name='nama' value = '<?php echo $data['nama_unit']; ?>' disabled />
</td>
</tr>
<tr>
<th><div style="margin-left: 12rem;">Nama Kepala Cabang</div></th>
<td><div class="input-field col s8" style="margin-right: 12rem;">
	<input type='text' name='pimpinan' value = '<?php echo $data['nama_pimpinan']; ?>'/>
</td>
</tr>
<tr><td><br><br></td></tr>
  <tr>
      <th colspan='2'>
		<button type='submit' name='tombol' class='col s12 btn btn-large waves-effect teal'>Simpan</button>
      </th>
    </tr>
	</table>
</form>
<?php
}
?>