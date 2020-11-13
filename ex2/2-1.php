<?php
	$age = rand(1, 50);
	echo '$age = '.$age."<br>";
	if ($age >= 18 && $age <= 35) {
		echo "Счастливчик!<br>";
	}
	else{
		if ($age >= 1 && $age <= 17) {
			echo "Слишком молод<br>";
		}
		else{
			echo "Не повезло<br>";
		}
	}
	echo "<br>";
?>