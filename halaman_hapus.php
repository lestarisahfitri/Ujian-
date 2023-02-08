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
				<h1>HALAMAN HAPUS DATA</h1>
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
				<li>
					<a href="lihat_pengguna.php" style="color:white">Lihat Pengguna</a>
				</li>
                <li>
					<a href="tambah_pengguna.php" style="color:white">Tambah Pengguna</a>
				</li>
				<li>
					<a href="halaman_hapus.php" style="color:blueviolet;">Hapus Pengguna</a>
				</li>
				<li>
					<a href="halaman_edit.php" style="color:white">Edit Pengguna</a>
				</li>	
			</ul>
			</td>
			<td>
				
			<b>HAPUS PENGGUNA</b>
			<?php 
				include "koneksi.php";
				$kueri=mysqli_query($konek,'SELECT * FROM tb_pengguna');
				?>
				<table border="2">
					<tr>
                        <td>
                            <b>
                            No.</b>
                        </td>

						<td>
							<b>
							NAMA
							</b>
						</td>
						<td>
							<b>
							PASSWORD
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
					echo $row['id'];
					echo"<tr><td>";
					echo $row['nama_pengguna'];
					echo"</td><td>";
					echo $row['sandi_pengguna'];
					echo"</td>
					<td>";
					echo"
						<a href='hapus.php?id=".$row['id']."		'>Hapus</a>
					";
					

				}
			?>
		</center>
			</table>
			</td>
		</tr>
	</table>
</body>
</html>