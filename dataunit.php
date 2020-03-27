<?php
session_start();
include "koneksi.php";

if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
include "admin.html";
}
else{
  echo" <link href='css/ghpages-materialize.css' type='text/css' rel='stylesheet' media='screen,projection'>";
include "menu.php";
echo "
<h3><b><center>Data Unit</b></h3>
<div class='row'>
<div class='col s12 m12 l12'>
<div class='card-panel teal darken-5' style='margin-right: 12rem; margin-left: 12rem;'>		
<table border='1' bgcolor='white' align='center'>
<tr>
<th><div style='margin-left: 1rem;'><center>ID UNIT</div></th>
<th><div style='margin-left: 1rem;'><center>NAMA UNIT</div></th>
<th><div style='margin-left: 1rem;'><center>NAMA KEPALA CABANG</div></th>
<th><div style='margin-left: 1rem;'><center>ACTION</div></th>
</tr>
<tr><td colspan=4><hr></td></tr>";
?>
<?php
  include "koneksi.php";
  $select=mysql_query("SELECT * FROM unit");
  while($data = mysql_fetch_array($select)){
  echo "<tr>";
  echo "<td><div style='margin-left: 1rem;'><center>$data[id_unit]</div></td>";
  echo "<td><div style='margin-left: 1rem;'><center>$data[nama_unit]</div></td>";
  echo "<td><div style='margin-left: 1rem;'><center>$data[nama_pimpinan]</div></td>";
  echo "<td><div style='margin-left: 1rem;'><center>";
  echo "<a href='updateunit.php?id_unit=$data[id_unit]'>Ubah</a>";
  echo "&nbsp|&nbsp";
  echo "<a href='deleteunit.php?id_unit=$data[id_unit]'>Hapus</a>";
    echo "</div></td>";
    echo "</tr>";
  }

  ?>
  </table>

  </div>
<br>	<p class="flow-text"><center>&copy; JacobusCalvin . 2016<center></p>
  </center>
  </body>

  <?php
}
?>