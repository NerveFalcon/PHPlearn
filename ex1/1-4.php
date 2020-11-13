<?php
	echo "Одинаковые значения одного типа данных";
	echo '<br>';
	$a = 5;
	$b = 5;
	echo "\$a = $a, \$b = $b";
	
	echo '<br>';
	echo '$a == $b: ' . (($a == $b) ? "true" : "false");
	echo '<br>';
	echo '$a === $b: ' . (($a === $b) ? "true" : "false");
	echo '<br>';
	echo '<br>';

	echo "Одинаковые значения разных типов данных";
	echo '<br>';
	$a = "5";
	$b = 5;
	echo "\$a = $a, \$b = $b";
	
	echo '<br>';
	echo '$a == $b: ' . (($a == $b) ? "true" : "false");
	echo '<br>';
	echo '$a === $b: ' . (($a === $b) ? "true" : "false");
	echo '<br>';
	echo '<br>';
	
	echo "Разные значения одного типа данных";
	echo '<br>';
	$a = 7;
	$b = 5;
	echo "\$a = $a, \$b = $b";
	
	echo '<br>';
	echo '$a == $b: ' . (($a == $b) ? "true" : "false");
	echo '<br>';
	echo '$a === $b: ' . (($a === $b) ? "true" : "false");
	echo '<br>';
?>