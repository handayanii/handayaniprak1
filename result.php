<?php
	$val1 = $_POST['txtInputan1'];
	$val2 = $_POST['txtInputan2'];

	if (isset($_POST['subPlus'])){
		echo $val1.' + '.$val2.' = '.($val1+$val2);
	}

	if (isset($_POST['subMin'])){
		echo $val1.' - '.$val2.' = '.($val1-$val2);
	}

	if (isset($_POST['subKali'])){
		echo $val1.' * '.$val2.' = '.($val1*$val2);
	}

	if (isset($_POST['subBagi'])){
		echo $val1.' / '.$val2.' = '.($val1/$val2);
	}
?>