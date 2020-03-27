<?php
session_start();
include "koneksi.php";

if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
include "../index.html";
}
else{
  echo" <link href='css/ghpages-materialize.css' type='text/css' rel='stylesheet' media='screen,projection'>";
include "menu.php";
echo "
<h3><b><center>Data Petugas</b></h3>
<div class='row'>
<div class='col s12 m12 l12'>
<div class='card-panel brown lighten-2' style='margin-right: 12rem; margin-left: 12rem;'>		
<table border='1' bgcolor='white' align='center'>
<tr>
<th><div style='margin-left: 1rem;'><center>PETUGAS</div></th>
<th><div style='margin-left: 1rem;'><center>ID UNIT</div></th>
<th><div style='margin-left: 1rem;'><center>NAMA UNIT</div></th>
<th><div style='margin-left: 1rem;'><center>ACTION</div></th>
</tr>
<tr><td colspan=4><hr></td></tr>";
?>
<?php
  include "koneksi.php";
 $select = mysql_query ("SELECT a.*,b.* FROM resort a INNER JOIN unit b ON a.id_unit = b.id_unit");
  while($data = mysql_fetch_array($select)){
  echo "<tr>";
  echo "<td><div style='margin-left: 1rem;'><center>$data[petugas]</div></td>";
  echo "<td><div style='margin-left: 1rem;'><center>$data[id_unit]</div></td>";
  echo "<td><div style='margin-left: 1rem;'><center>$data[nama_unit]</div></td>";
  echo "<td><div style='margin-left: 0rem;'><center>";
  echo "<a href='delete1.php?petugas=$data[petugas]'>Hapus</a>";
    echo "</div></td>";
    echo "</tr>";
  }

  ?>
  </table>
	</div>
	<br>
  <center><p class='flow-text'>&copy; JacobusCalvin . 2016</p>
  
  </center>
  </body>

  <?php
}
?>