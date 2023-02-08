<!DOCTYPE html>
<html>
<head>
	<title>Form Biodata</title>
	<link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body >
	<table width="50%">
		<tr>
	<center><h1><font color="white"><b>HALAMAN TAMBAH DATA</b></h1></center></font>
	</tr>
	<tr>		
			<td width="50%" >
			<b><u>MENU SEBELAH KIRI</u></b><br>
			<ul >
				<li>
					<a href="halaman_beranda.php" style="color:white">
						Beranda
					</a></li>
				<li>
					<a href="lihat_pengguna.php" style="color:white">Lihat Pengguna</a></li>
				<li>
					<a href="tambah_pengguna.php" style="color:blueviolet;">Tambah Pengguna</a></li>
				<li>
					<a href="halaman_hapus.php" style="color:white">Hapus Pengguna</a></li>
				<li>
					<a href="update_data.php" style="color:white">Edit Pengguna</a></li>
			</ul>
			</td>
		<table width=50%>
	<form action="proses_tambah.php" method="POST">
	<table border="1">
		<tr>
			<td>
				NAMA
			</td>
			<td>
				<INPUT NAME="username" TYPE="TEXT" PLACEHOLDER="nama anda">
			</td>
		</tr>
		<tr>
			<td>
				PASSWORD
			</td>
			<td>
				<INPUT NAME="password" TYPE="PASSWORD" PLACEHOLDER="password anda">
			</td>
		</tr>
		<tr>
			
			<td>
				<INPUT  TYPE="submit" value="Kirim Data">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>