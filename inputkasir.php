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

	if (forminput.nama.value == "")
	{
		alert ("Nama Kasir Tidak Boleh Kosong !!");
		forminput.nama.focus()
		return false
	}
	
	if (forminput.username.value == "")
	{
		alert ("Username Tidak Boleh Kosong !!");
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



<h3><b><center>INPUT DATA KASIR</b></h3>
<div class="row">
<div class="col s12 m12 l12">
<div class="card-panel teal darken-5" style="margin-right: 12rem; margin-left: 12rem;">		
<table border='0' bgcolor='white' align='center'>
<form name='forminput' method='POST' action='signup.php' onSubmit="return cek_data();" enctype="multipart/form-data">
       <tr>
      <th><div style="margin-left: 15rem;">Nama Lengkap</div></th>
      <td>
        <div class="input-field col s10" style="margin-right: 15rem;"><input type='text' pattern= "[a-z A-z]+" name='nama' /></div>
      </td>
    </tr>
      <tr>
      <th><div style="margin-left: 15rem;">Username</div></th>
      <td>
        <div class="input-field col s6" style="margin-right: 15rem;"><input type='text' pattern= "[a-z A-z]+" name='username' /></div>
      </td>
    </tr>

    <tr>
      <th><div style="margin-left: 15rem;">Password</div></th>
      <td>
        <div class="input-field col s6" style="margin-right: 15rem;"><input type='password' name='password' /></div>
      </td>
    </tr>
    <tr>
      <th><div style="margin-left: 15rem;">Konfirmasi Password</div></th>
      <td>
        <div class="input-field col s6" style="margin-right: 15rem;"><input type='password' name='password_cc' /></div>
      </td>
    </tr>
	
    <tr>
      <th><div style="margin-left: 15rem;">Unit</div></th>
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
</div>

<?php
}
?>