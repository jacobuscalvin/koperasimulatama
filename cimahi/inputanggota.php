<html>
<head>
<title>Cabang Cimahi</title>
</head>
<link href='css/ghpages-materialize.css' type='text/css' rel='stylesheet' media='screen,projection'>
<script>
function numeric_only(e)
{
var unicode = e.charCode ? e.charCode : e.keyCode;

if(unicode == 8 || unicode == 9 || (unicode >= 48 && unicode <= 57))
{
return true;
}
else
{
return false;
}
}
</script>

		  		    

<script type = "text/javascript">
function cek_data()
{

	if (forminput.namalengkap.value == "")
	{
		alert ("Nama Lengkap Tidak Boleh Kosong !!");
		forminput.namalengkap.focus()
		return false
	}
	
	if (forminput.namaibu.value == "")
	{
		alert ("Nama Ibu Kandung Tidak Boleh Kosong !!");
		forminput.namaibu.focus()
		return false
	}
	if (forminput.noktp.value == "")
	{
		alert ("Nomor KTP Tidak Boleh Kosong !!");
		forminput.noktp.focus()
		return false
	}
	
	if (forminput.noktp.value.length != 16)
	{
		alert ("Nomor KTP Harus 16 Digit !!");
		forminput.noktp.focus()
		return false
	}

	if (forminput.nokk.value == "")
	{
		alert ("Nomor KK Tidak Boleh Kosong !!");
		forminput.nokk.focus()
		return false
	}
	
	if (forminput.jalan.value == "")
	{
		alert ("Alamat Tidak Boleh Kosong !!");
		forminput.jalan.focus()
		return false
	}
	
	if (forminput.petugas.value == "")
	{
		alert ("Petugas Tidak Boleh Kosong !!");
		forminput.petugas.focus()
		return false
	}
	return true
}
</script>
	
<?php
session_start();
include "koneksi.php";

if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
include "../index.html";
}
else{
  echo" <link href='css/ghpages-materialize.css' type='text/css' rel='stylesheet' media='screen,projection'>";
include "menu.php";
?>
<h3><b><center>INPUT ANGGOTA BARU </b></h3>
<div class="row">
<div class="col s12 m12 l12">
<div class="card-panel brown lighten-2" style="margin-right: 12rem; margin-left: 12rem;">		

				<form name="forminput" method="POST" action="actinputdataanggota.php" onSubmit="return cek_data();" enctype="multipart/form-data" bgcolor="white">			
					<table border="1" bgcolor='white' align="center">				
						<tr>
							<td><div style="margin-left: 6rem;"><b>Nama Lengkap</div></td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><input type="text"  pattern= "[a-z A-z]+" name="namalengkap" size="30"></td> 
						</tr>	
						<tr>
							<td><div style="margin-left: 6rem;"><b>Jenis Kelamin</div></td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 2.4rem;">
							<input class="with-gap" name="jk" type="radio" id="pria" value='Pria'/>
							<label for="pria">Pria</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input class="with-gap" name="jk" type="radio" id="wanita" value='Wanita'/>
							<label for="wanita">Wanita</label>
							</td> 
						</tr>						
						<tr>
							<td><div style="margin-left: 6rem;"><b>Nama Ibu</div></td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><input type="text" pattern= "[a-z A-z]+" name="namaibu" size="25"></td> 
						</tr>					
						<tr>
							<td><div style="margin-left: 6rem;"><b>Nomor KTP</div></td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><input type="text" name="noktp" onkeypress='return numeric_only(event);' size="30" maxlength='16'><input type='hidden' name='id_anggota' value='<?php echo $a['id_anggota'] ?>'></td> 
						</tr>					
						<tr>
							<td><div style="margin-left: 6rem;"><b>Nomor KK</div></td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><input type="text" name="nokk" onkeypress='return numeric_only(event);' size="30" maxlength='16'></td> 
						</tr>					
						<tr>
							<td><div style="margin-left: 6rem;"><b>Jalan</div></td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><input type="text" pattern= "[a-z A-z]+" name="jalan" size="40"></td> 
						</tr>					
						<tr>
							<td><div style="margin-left: 6rem;"><b>ALAMAT</div></td>
							<td>
							<table>
								<tr>
									<td><b>Kecamatan</td>
									<td><div class="input-field col s10" style="margin-bottom: 1rem;"><input type='text' pattern= "[a-z A-z]+" name='kecamatan' size='20'></td>
									<td><b>Kelurahan</td>
									<td><div class="input-field col s10" style="margin-bottom: 1rem;"><input type='text' pattern= "[a-z A-z]+" name='kelurahan' size='20'></td>
								</tr>
								<tr>
									<td><b>RT</td>
									<td><div class="input-field col s4" style="margin-bottom: 1rem;"><input type='text' name='rt' onkeypress='return numeric_only(event);' size='2' maxlength='3'></td>
									<td><b>RW</td>
									<td><div class="input-field col s4" style="margin-bottom: 1rem;"><input type='text' name='rw' onkeypress='return numeric_only(event);' size='2' maxlength='3'></td>
								</tr>
							</table>
							</td> 
						</tr>					
						<tr>
							<td><div style="margin-left: 6rem;"><b>Kota</td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><input type="text" pattern= "[a-z A-z]+" name="kota" size="20"></td> 
						</tr>
						
						<tr>
							<td><div style="margin-left: 6rem;"><b>Tempat, Tanggal Lahir</div></td>
						<td><table>
								<tr>
									
									<td><div class="input-field col s9" style="margin-bottom: 1rem;"><input type="text"  pattern= "[a-z A-z]+" name="tempat" size="20"></td>
									<td><p class='flow-text' style="margin-right:3rem;">,</p></td>
									<td><div class="input-field col s8" style="margin-bottom: 1rem;"><input type='date' name='tanggal' size='25' PlaceHolder='YYYY-MM-DD'></td>
								</tr>
						</table>
						</td></tr>
					
						<tr>
							<td><div style="margin-left: 6rem;"><b>Petugas</td>
							<td><div class="input-field col s12 m3" style="margin-bottom: 1rem;">
							<select class="browser-default" name='petugas'>
							<?php
							$select=mysql_query("SELECT * FROM resort where id_unit ='cmh'");
							while($data = mysql_fetch_array($select)){
							echo "<option>$data[petugas]</option>";
							}
							?>
							</select>
							</div>
							</td>
						</tr>					
						
						<tr>
							<td><div style="margin-left: 6rem;"><b>Status</div></td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 2.4rem;">
							<input class="with-gap" name="status" type="radio" id="lancar" value='Lancar'/>
							<label for="lancar">Lancar</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input class="with-gap" name="status" type="radio" id="macet" value='Macet'/>
							<label for="macet">Macet</label>
							</td> </div>
						</tr>
						
						
						<tr><td><br><br></td></tr>
						<tr>
						<th>
						<button type='submit' class='col s10 btn btn-large waves-effect teal' style='margin-left: 11rem;'>Tambah</button>
						</th>
						<th>
						<button type='reset' class='col s5 btn btn-large waves-effect red' style='margin-left: 18rem;'>Hapus</button>
						</th>
						</tr>
						
					
					</table>
				</form>

</div>
<br>
</body>
</html>
<?php
}
?>