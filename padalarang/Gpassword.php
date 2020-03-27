<?php
include "koneksi.php";
SESSION_start();

if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
include "../index.html";
}

else{
echo "	<link rel='stylesheet' type='text/css' href='css.css'>
		<body>";
		include "menu.php";
		
$id = session_id();
$sel = mysql_query("select * from login where id_session ='$id' ");
$a = mysql_fetch_array($sel);

echo "	<form method='POST' action='actgpass.php'>
		<h3><b><center>Ganti Password</b></h3>
		<div class='row'>
		<div class='col s12 m12 l12'>
		<div class='card-panel brown lighten-2' style='margin-right: 12rem; margin-left: 12rem;'>	
		<table border=0 bgcolor='white' align='center'>
		<tr align='center'>
		</tr>
		<tr>
		<td><div style='margin-left: 12rem;'>Username</div></td>
		<td><div class='input-field col s7' style='margin-right: 18rem;'><input type='text' value='$a[username]' name='user' block='yes' ></div></td>
		</tr>
		<tr>
		<td><div style='margin-left: 12rem;'>Password Lama</div></td>
		<td><div class='input-field col s8' style='margin-right: 18rem;'><input type='password' name='plama' required></div></td>
		</tr>
		<tr>
		<td><div style='margin-left: 12rem;'>Password Baru</div></td>
		<td><div class='input-field col s8' style='margin-right: 18rem;'><input type='password' name='pbaru' required></div></td>
		</tr>
		<tr>
		<td><div style='margin-left: 12rem;'>Konfirmasi Password Baru</div></td>
		<td><div class='input-field col s8' style='margin-right: 18rem;'><input type='password' name='kpb' required></div></td>
		</tr>
		
		<tr><td><br><br></td></tr>
		<tr>
		<th>
		<button type='submit' class='col s10 btn btn-large waves-effect teal' style='margin-left: 5rem;'>Simpan</button>
		</th>
		<th>
		<button type='reset' class='col s9 btn btn-large waves-effect red' style='margin-left: 5rem;'>Hapus</button>
		</th>
		</tr>
		
		</table>
		</div>
		<br>
	 ";

echo "	</body>";
}

?>