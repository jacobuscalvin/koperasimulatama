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
<form method='POST' action='signup1.php'>
<h3><b><center>INPUT DATA PETUGAS </b></h3>
<div class="row">
<div class="col s12 m12 l12">
<div class="card-panel brown lighten-2" style="margin-right: 12rem; margin-left: 12rem;">
<table border='0' bgcolor='white' align='center'>
		<tr>
		<th><div style="margin-left: 15rem;">Nama</div></th>
		<td><div class="input-field col s10" style="margin-right: 12rem;">
        <input type='text' pattern= "[a-z A-z]+" name='nama' /></div>
		</td>
		</tr>
		
    <tr>
    <th><div style="margin-left: 15rem;">Unit</div></th>
    <td><div class="input-field col s10 m3" style="margin-bottom:1rem;">
		<select class="browser-default" name='unit'>
		<option value="cmh">Cimahi</option>
		</select></div>
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