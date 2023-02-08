<!DOCTYPE html>
	<html>
	<head>
		<title>Halaman beranda</title>
		<link rel="stylesheet" type="text/css" href="stylee.css">
		</style>
					
	</head>
	<body style="color:white;">
		
			</style>
	<table  width="100%">
		<tr>
			<center>
				<h1>LIHAT PENGGUNA</h1>
			</center>
		</tr>

		<br>
		<br>
		<tr>
			<td width="50%">
			<ul>
				
				<li>
					<a href="beranda.html" style="color:white">
						Beranda
					</a>
				</li>
				<br>
				<li>
					<a href="lihat_pengguna.php" style="color:blueviolet;">Lihat Pengguna</a>
				</li>
				<br>
				<li>
					<a href="tambah_pengguna.php" style="color:white">Tambah Pengguna</a>
				</li>
				<br>
				<li>
					<a href="halaman _hapus.php" style="color:white">Hapus Pengguna</a>
				</li>
				<br>
				<li>
					<a href="halaman_edit.php" style="color:white" >Edit Pengguna</a>
				</li>	
			</ul>
			</td>
			<td>
				<center>
				<b>LIST PENGGUNA</b>
			<br>
			<?php 
				include "koneksi.php";
				$kueri=mysqli_query($konek,'SELECT * FROM tb_pengguna');
				?>
				<table border="2">
					
				<br>	
				<tr>
				<td>
							<b>
							No
						</b>
						</td>
						<td>
							<b>
							Nama Pengguna
						</b>
						</td>
						<td>
							<b>
							Sandi Pengguna
						</b>
						</td>
					</tr>
				<?php
				while($row = mysqli_fetch_array($kueri)){
					//echo"<tr><td>";
					//echo $row['No'];
					echo"<tr><td>";
					echo $row['id'];
					echo"</td><td>";
					echo $row['nama_pengguna'];
					echo"</td><td>";
					echo $row['sandi_pengguna'];
				}
			?>
			</table>
			<br>
			
			</td>
		</tr>
	</table>
</body>
</html>