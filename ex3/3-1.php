<?php
	function dec2($a = 0)
	{
		$arr = array();
		$l = 0;
		do {
			$arr[$l] = $a % 2;
			echo "$a => ".$arr[$l]." <br>";
			$a = $a / 2;
			$a = floor($a);
			$l++;
		} while ($a >= 1);
		unset($l);
		echo "<br>";
		// for ($i=count($arr); $i >= 0; $i--) {
		// 	echo $arr[$i];
		// };
		$result = implode("", $arr);
		echo strrev($result);
	}
?>