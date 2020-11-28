<?php
function arrsort(array $arr, int $n){
	echo $n;
	echo "<br>";
	echo "Изначальный массив:";
	echo "<br>";
	print_r($arr);
	$l = count($arr);
	for ($i=$l-1; $i > 1; $i--) { 
		for ($k=0; $k < $i; $k++) { 
			$a = abs($arr[$k] - $n);
			$b = abs($arr[$k+1]-$n);

			if ($a > $b) {
				$c = $arr[$k];
				$arr[$k] = $arr[$k+1];
				$arr[$k+1] = $c;
			}
		}
	}
	echo "<br>";
	echo "Конечный массив";
	echo "<br>";
	print_r($arr);
}
?>