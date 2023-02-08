<?php 
include "koneksi.php";
$id=$_POST['idanda'];
$nama=$_POST['username'];
$password=$_POST['password'];
if(empty($nama)&&empty($password)){ //kondisi false><false
	echo "<script language='javascript'>alert('Maaf Tidak Ada Perubahan Data')
	window.location.href='lihat_pengguna.php'
	</script>";		
}else if(empty($nama)){ //kondisi true><false
	mysqli_query($konek,"UPDATE tb_pengguna SET sandi_pengguna='".$password."' WHERE id_pengguna='".$id."'");
	header("location:lihat_pengguna.php");
}else if(empty($password)){//kondisi false><true
	mysqli_query($konek,"UPDATE tb_pengguna SET nama_pengguna='".$nama."' WHERE id_pengguna='".$id."'");
	header("location:lihat_pengguna.php");
}
else{ //kondisi true><ture
	mysqli_query($konek,"UPDATE tb_pengguna SET nama_pengguna='".$nama."',sandi_pengguna='".$password."' WHERE id_pengguna='".$id."'");
	header("location:lihat_pengguna.php");
}
