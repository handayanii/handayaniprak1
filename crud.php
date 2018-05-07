<!DOCTYPE html>
<hmtl>
<head>
	<title> DATA Mahasiswa </title>
</head>
<body>
	<h1> Data Mahsiswa UIN</h1>
	<table width="50%" border="1">
		<tr>
			<th>No</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>jurusan</th>
		</tr>
		<?php
			include 'mahasiswa.php';
			$sql=mysqli_master_query($konek, "SELECT* FROM MHS");
			while ($data = mysqli_fetch_array($sql)){
				echo 
					"<tr>
						<td>$nomor</td>
						<td>$data[nim]</td>
						<td>$data[nama]</td>
						<td>$data[jurusan]</td>
					</tr>";
					$nomor++;
			}
		?>
	</table>
		<a href="tambah"
</body>
</html>