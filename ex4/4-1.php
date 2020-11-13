<?php
	$pos = 0;
	$string = $_POST['text'];
	echo $string."<br>";
	while (1) {
		$k = $pos;
		$pos = strpos($string, " ", $pos+1);
		if ($pos < $k) {
			unset($k);
			break;
		}
		$n++;
		if ($n == 3) {
			echo "Вы ввели более 3х слов";
			unset($k);
			$n = 10;
			break;
		}
	}
	if ($n < 2) {
		echo "Вы ввели менее 3х слов";
		unset($k);
		$n = 10;
	}
	if($n != 10)
	{
		unset($n);
		$string = strtolower($string);
		$arr = explode(" ", $string);
		$a[0] = strtoupper(substr($arr[0], 0, 1)).substr($arr[0], 1);
		$a[1] = strtoupper(substr($arr[1], 0, 1)).".";
		$a[2] = strtoupper(substr($arr[2], 0, 1)).".";
		$res = implode(" ", $a);
		unset($a);
		echo $res;
	}
?>