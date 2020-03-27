<?php
SESSION_start();
SESSION_destroy();
echo "<script>alert('Berhasil Keluar');window.location='../index.html';</script>";
?>