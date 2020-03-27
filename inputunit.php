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
<form method='POST' action='signup2.php'>

<h3><b><center>INPUT DATA UNIT</b></h3>
<div class="row">
<div class="col s12 m12 l12">
<div class="card-panel teal darken-5" style="margin-right: 12rem; margin-left: 12rem;">		
<table border='0' bgcolor='white' align='center'>

       <tr>
      <th><div style="margin-left: 15rem;"> Id Unit</th></div>
      <td>
        <div class="input-field col s2" style="margin-right: 15rem;"><input type='text' name='id' maxlength="3"/></div>
      </td>
    </tr>
    <tr>
      <th><div style="margin-left: 15rem;"> Nama Unit</th></div>
      <td>
        <div class="input-field col s6" style="margin-right: 15rem;"><input type='text' name='unit' /></div>
      </td>
    </tr>
  <tr>
   <tr>
      <th><div style="margin-left: 15rem;"> Nama Pimpinan</th></div>
      <td>
        <div class="input-field col s6" style="margin-right: 15rem;"><input type='text' name='pimpinan' /></div>
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