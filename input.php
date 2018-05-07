<!DOCTYPE>
<html>
<head>
		<tittle></tittle>
</head>
<body>
	<h3>INPUTAN MAHASISWA</h3>
	masukkan nilai<input type="text" name="nim"><br><br>
	masukkan nilai<input type="text" name="mahasiswa"><br><br>

	<input type="submit" name="input" value="kirim"><br>
	<table height="50" border="2" width="30%" style='text-align: center'>
		<?php
			include 'konek.php';
			$a= mysqli_query($konek,"select * from mahasiswa");
		?>

</table>
</body>
</html>