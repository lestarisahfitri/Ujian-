<?php
	$id=$_GET['id'];
	$nama=$_GET['username'];
	$password=$_GET['password'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Biodata</title>
</head>
<body>
	<b>PERUBAHAN BIODATA MAHASISWA</b>
	<form action="aksi_update.php" method="POST">
	<table border="1">
		<tr>
			<td>
				id
			</td>
			<td>
				<INPUT NAME="idanda" TYPE="TEXT" PLACEHOLDER="nik anda" value="<?=$id;?>" READONLY>
			</td>
		</tr>
		<tr>
			<td>
				NAMA
			</td>
			<td>
				<INPUT NAME="username" TYPE="TEXT" PLACEHOLDER="<?=$nama;?>">
			</td>
		</tr>
		<tr>
			<td>
				PASSWORD
			</td>
			<td>
				<INPUT NAME="password" TYPE="text" PLACEHOLDER="<?=$password;?>">
			</td>

		</tr>
		<tr>
			
			<td>
				<INPUT  TYPE="submit" value="Rubah Data">
			</td>
		</tr>
	</table>
	</form>

</body>
</html>
<?php

?>