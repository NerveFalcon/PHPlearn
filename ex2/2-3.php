<?php
	$randarr = array();
	$n = 0;
	$a = array();
	for ($i=0; $i < 10; $i++) { 
		$randarr[$i] = rand(1,100);
		if (($randarr[$i] % 5 != 0) && ($randarr[$i] % 6 != 0)) {
			$a[$n] = $randarr[$i];
			$n++;
		}
	}
	echo "$n чисел: <br>";
	for ($i=0; $i < $n; $i++) { 
		echo "$a[$i] ";
	}
?>