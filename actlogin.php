<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$sel = mysqli_query($sqlconnect,"select * from login where username='$username' and password='$password' and block='N'") or die(mysqli_error());
$a = mysqli_fetch_array($sel);
$b = mysqli_num_rows($sel);

if($b > 0){
SESSION_start();
$_SESSION['username'] = $a['username'];
$_SESSION['password'] = $a['password'];
$_SESSION['level'] = $a['level'];

 if($a['level']=='padalarang'){
           header('location:padalarang/home.php');
        }
     else if($a['level']=='cibaduyut'){
            header('location:cibaduyut/home.php');
        }
     else if($a['level']=='cimahi'){
            header('location:cimahi/home.php');
        }
	 else if($a['level']=='admin'){
           echo "<script>alert('Silahkan Login Di Form Admin!');window.location='admin.html';
				</script>";
        }
	$id_session_lama = session_id();
    session_regenerate_id();
    $id_session_baru = session_id();

mysqli_query("UPDATE login SET id_session='$id_session_baru' WHERE username='$_POST[username]'");

}
else{
echo "<script>alert('Login Gagal!');window.location='index.html';
</script>";	
}
?>