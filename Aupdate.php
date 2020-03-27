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
<form method ="POST" action ='actupdate1.php'>
<h3><b><center>UBAH DATA ANGGOTA </b></h3>
<div class="row">
<div class="col s12 m12 l12">
<div class="card-panel teal darken-5" style="margin-right: 12rem; margin-left: 12rem;">	
<?php
		include "koneksi.php";
		$select =mysql_query("SELECT * FROM anggota WHERE id_anggota = '$_GET[id_anggota]'");
		$data = mysql_fetch_array($select);
	?>
<input type='hidden' name='id_anggota'
	value="<?php echo $data['id_anggota']; ?>">
<table border="0" bgcolor='white' align="center">					
						<tr>
							<td><div style="margin-left: 6rem;"><b>Nama Lengkap</div></td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><input type="text" name="namalengkap" value ="<?php echo $data['nama']; ?>" size="30"></div></td> 
						</tr>					
						<tr>
							<td><div style="margin-left: 6rem;"><b>Jenis Kelamin</div></td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 2.4rem;">
							<input class="with-gap" name="jk" type="radio" id="pria" value='Pria' checked />
							<label for="pria">Pria</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input class="with-gap" name="jk" type="radio" id="wanita" value='Wanita'/>
							<label for="wanita">Wanita</label>
							</td> 
						</tr>				
						<tr>
							<td><div style="margin-left: 6rem;"><b>Nama Ibu</div></td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><input type="text" name="namaibu" value ="<?php echo $data['nama_ibu']; ?>" size="25"></div></td> 
						</tr>					
						<tr>
							<td><div style="margin-left: 6rem;"><b>Nomor KTP</div></td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><input type="text" name="noktp" value ="<?php echo $data['no_ktp']; ?>" onkeypress='return numeric_only(event);' size="30" maxlength='16'><input type='hidden' name='id_anggota' value='<?php echo $data['id_anggota'] ?>'></div></td> 
						</tr>					
						<tr>
							<td><div style="margin-left: 6rem;"><b>Nomor KK</div></td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><input type="text" name="nokk" value ="<?php echo $data['no_kk']; ?>" onkeypress='return numeric_only(event);' size="30" maxlength='16'></div></td> 
						</tr>					
						<tr>
							<td><div style="margin-left: 6rem;"><b>Jalan</div></td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><input type="text" name="jalan" value ="<?php echo $data['alamat']; ?>"size="40"></div></td> 
						</tr>					
						<tr>
							<td><div style="margin-left: 6rem;"><b>ALAMAT</div></td>
							<td>
							<table>
								<tr>
									<td><b>Kecamatan</td>
									<td><div class="input-field col s10" style="margin-bottom: 1rem;"><input type='text' name='kecamatan' value ="<?php echo $data['kecamatan']; ?>" size='20'></div></td>
									<td><b>Kelurahan</td>
									<td><div class="input-field col s10" style="margin-bottom: 1rem;"><input type='text' name='kelurahan' value ="<?php echo $data['kelurahan']; ?>" size='20'></div></td>
								</tr>
								<tr>
									<td><b>RT</td>
									<td><div class="input-field col s4" style="margin-bottom: 1rem;"><input type='text' name='rt' value ="<?php echo $data['rt']; ?>" onkeypress='return numeric_only(event);' size='2' maxlength='3'></div></td>
									<td><b>RW</td>
									<td><div class="input-field col s4" style="margin-bottom: 1rem;"><input type='text' name='rw' value ="<?php echo $data['rw']; ?>" onkeypress='return numeric_only(event);' size='2' maxlength='3'></div></td>
								</tr>
							</table>
							</td> 
						</tr>					
						<tr>
							<td><div style="margin-left: 6rem;"><b>Kota</div></td>
							<td><div class="input-field col s10" style="margin-right: 15rem; margin-bottom: 1rem;"><input type="text" name="kota" value ="<?php echo $data['kota']; ?>" size="20"></div></td> 
						</tr>				
	
						<tr>
							<td><div style="margin-left: 6rem;"><b>Tempat, Tanggal Lahir</div></td>
						<td><table>
								<tr>
									
									<td><div class="input-field col s9" style="margin-bottom: 1rem;"><input type="text" name="tempat" value ="<?php echo $data['tempat']; ?>" size="20"></td>
									<td><p class='flow-text' style="margin-right:3rem;">,</p></td>
									<td><div class="input-field col s8" style="margin-bottom: 1rem;"><input type='date' name='tanggal' value ="<?php echo $data['tanggal_lahir']; ?>" size='25'></td>
								</tr>
						</table>
						</td></tr>
						
						<tr>
							<td><div style="margin-left: 6rem;"><b>Petugas</td>
							<td><div class="input-field col s12 m3" style="margin-bottom: 1rem;">
							<select class="browser-default" name='petugas'>
							<?php
							$select=mysql_query("SELECT * FROM resort");
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
							<input class="with-gap" name="status" type="radio" id="lancar" value='Lancar' checked />
							<label for="lancar">Lancar</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input class="with-gap" name="status" type="radio" id="macet" value='Macet'/>
							<label for="macet">Macet</label>
							</td> </div>
						</tr>
						
						
						
						<tr><td><br><br></td></tr>
						<tr>
						<th>
						<button type='submit' class='col s10 btn btn-large waves-effect teal' style='margin-left: 11rem;'>Simpan</button>
						</th>
						<th>
						<a href="dataanggota.php" class='col s5 btn btn-large waves-effect red' style='margin-left: 18rem;'>Kembali</a>
						</th>
						</tr>
						
					</table>
</form>
<?php
}
?>