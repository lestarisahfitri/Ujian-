<?php 
$id=$_GET['id'];
include "koneksi.php";
mysqli_query($konek,'DELETE FROM tb_pengguna WHERE id="'.$id.'"');
header("location:halaman_hapus.php");