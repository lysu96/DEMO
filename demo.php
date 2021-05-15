<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hi</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		$lastName = 'LY';
		$a = 'A';
		$rs = 'SÚ';
		$arra = array('Họ:' => $lastName, 'Tên đệm:' => $a, 'Tên:' => $rs);
		$arr = array();
		foreach ($arra as $x => $value) {
			echo $x." ".$value;
			array_push($arr, $value);
			echo "<br/>";
		}
		echo "Tên đầy đủ: ";
		foreach ($arr as $value2) {
			echo " ".$value2;
		}
		echo "<br/>";
		list($h, $v, $t) = $arr;
		echo "Họ và tên: $h $v $t";
	 ?>
</body>
</html>