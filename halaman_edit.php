

<!DOCTYPE html>
	<html>
	<head>
		<title>Halaman beranda</title>
		<link rel="stylesheet" type="text/css" href="stylee.css">
	
	</head>
	<body >
	<table  width="100%">
		<tr>
			<center>
				<h1>HALAMAN EDIT</h1>
			</center>
		</tr>

		<br>
		<br>
		<tr>
			<td width="50%">
			<ul>
				<li>
					<a href="Beranda.html" style="color:white">
						Beranda
					</a>
				</li>
				<li>
					<a href="lihat_pengguna.php" style="color:white">Lihat Pengguna</a>
				</li>
                <li>
					<a href="tambah_pengguna.php" style="color:white">Tambah Pengguna</a>
                </li>
				<li>
					<a href="halaman_hapus.php" style="color:white">Hapus Pengguna</a>
				</li>
				<li>
					<a href="halaman_edit.php" style="color:white">Edit Pengguna</a>
				</li>	
			</ul>
			</td>
			<td>
				
			<b>LIST PENGGUNA</b>
			<?php 
				include "koneksi.php";
				$kueri=mysqli_query($konek,'SELECT * FROM tb_pengguna');
				?>
				<table border="1">
					
					<tr>

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
						<td colspan="2"> <!--menggabungkan kolom menjadi 1 -->
							<center><b>
							Aksi
							</b>
						</center>
							
						</td>
					</tr>
				<?php
				while($row = mysqli_fetch_array($kueri)){
					echo"<tr><td>";
					echo $row['nama_pengguna'];
					echo"</td><td>";
					echo $row['sandi_pengguna'];
					echo"</td>
					<td>";
					
					echo"
						<a href='update_data.php?id=".$row['id']."&nama=".$row['nama_pengguna']."&password=".$row['sandi_pengguna']."		'>Edit</a> 
					";

				}
			?>
			</table>
			<br>
			
			</td>
		</tr>
	</table>
</body>
</html>