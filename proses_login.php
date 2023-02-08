<?php
$nama=$_POST["username"];
$password=$_POST["password"];
include "koneksi.php";
$kueri=mysqli_query($konek,'SELECT * FROM tb_pengguna WHERE nama_pengguna="'.$nama.'" AND sandi_pengguna="'.$password.'" ');
if(mysqli_num_rows($kueri)>0){
	header("location:beranda.html");
}else{
	header("location:login.html");
}