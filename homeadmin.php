<?php
session_start();
include "koneksi.php";

if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
include "admin.html";
}
else{
  echo" <link href='css/ghpages-materialize.css' type='text/css' rel='stylesheet' media='screen,projection'>";
include "menu.php";
echo "<br><br><br><br><br><br><br><br><br><br><br>
<center><font face='roboto' size='10'>Selamat Datang di Halaman Admin</font></center>
<center><p class='flow-text'>&copy; JacobusCalvin . 2016</p>
</body>";
}
?>