<?php
	$val1 = $_POST['txtInputan1'];
	$val2 = $_POST['txtInputan2'];

	if (isset($_POST['Enter']))
	{
	 $inputan_nama = array('Uni1','Uni2','Uni3');
	 $kata_sandi = array('Uni1','Uni2','Uni3');
	 $status = false;

	 for ($u=0; $u< 3; $u++)

	 {
	 	($inputan_nama[$u]==$_POST['inputan_nama']&&$kata_sandi[$u]==$_POST['kata_sandi'])
	 	{
	 		echo "selamat anda masuk";
	 		status = true;
	 	}
	 }
	 if (status==false){
	echo "maaf salah"
	 }else{
	 	echo "sorry";
	 }
	}
?>