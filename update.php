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

<script type = "text/javascript">
function cek_data()
{
	if (forminput.username.value == "")
	{
		alert ("Username Kasir Tidak Boleh Kosong !!");
		forminput.username.focus()
		return false
	}
	
	if (forminput.password.value == "")
	{
		alert ("Silahkan Isi Password  !!");
		forminput.password.focus()
		return false
	}
return true
}
</script>

<?php
		include "koneksi.php";
		$select = mysql_query("SELECT * FROM login WHERE id = '$_GET[id]'");
		$data = mysql_fetch_array($select);
	?>

<h3><b><center>Ubah Data Kasir </b></h3>
<form name='forminput' method ="POST" action ='actupdate.php' onSubmit="return cek_data();" enctype="multipart/form-data">	
<div class="row">
<div class="col s12 m12 l12">
<div class="card-panel teal darken-5" style="margin-right: 12rem; margin-left: 12rem;">		
	
<input type='hidden' name='id'
	value="<?php echo $data['id']; ?>">
<table border ='0' bgcolor="white" align ='center'>
<tr>
<th><div style="margin-left: 15rem;">Nama</div></th>
<td><div class="input-field col s9" style="margin-right: 12rem;"><input type='text' name='nama' value = '<?php echo $data['nama']; ?>' disabled /></div>
</td>
</tr>
<tr>
<th><div style="margin-left: 15rem;">Username</div></th>
<td><div class="input-field col s8" style="margin-right: 12rem;"><input type='text' pattern= "[a-z A-z]+" name='username' value = '<?php echo $data['username']; ?>'/></div>
</td>
</tr>
<tr>
<th><div style="margin-left: 15rem;">Password</div></th>
<td><div class="input-field col s8" style="margin-right: 12rem;"><input type='password' name='password'/></div>
</td>
	</tr>
<tr>
<th><div style="margin-left: 15rem;">UNIT</div></th>
<td><div class="input-field col s12 m3">
			<select class="browser-default" name='unit'>
			<?php
			$select=mysql_query("SELECT * FROM unit ");
			while($data = mysql_fetch_array($select)){
			echo "<option>$data[nama_unit]</option>";
			}
			?>
			</select>
			</div>
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