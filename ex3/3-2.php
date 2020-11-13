<?php
	function dia(array $n){
		$h = count($n);
		$sum = 0;
		for ($i=0; $i < $h; $i++) { 
			for ($k=0; $k < $h; $k++) { 
				if($i == $k) $sum += $n[$i][$k];
			}
		}
		return $sum;
	}
	function rdia(array $n){
		$h = count($n);
		$sum = 0;
		for ($i=$h; $i >= 0; $i--) { 
			for ($k=$h; $k >= 0; $k--) { 
				if($i + $k == 2) $sum += $n[$i][$k];
			}
		}
		return $sum;
	}
?>