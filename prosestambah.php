<?php
	
		include 'mahasiswa.php';
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$jurusan = $_POST['jurusan'];

		$sql =mysqli_query($konek,"INSERT INTO mhs SET nim='$nimm,nama='$nama',jurusan='$jurusan'");

		if ($sql){
			echo "berhasil tambah Data";
		}
		else{
			echo"gagal tambah data";
		}
?>