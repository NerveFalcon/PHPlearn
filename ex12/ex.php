<html>
<head>
	<meta charset="UTF-8">
	<title>Практическая работа 2</title>
	<link rel="stylesheet" href="/fund.css">
</head>
<body>
	<header>
		<h1><a href="/contents.php">Оглавление</a></h1>
	</header>
	<h1>Практическая работа 2</h1>
	<div class="ex">
	<?php include "12";
	$q = 1;
	$w = 2;
	$a = new MyArray($q, 5);
	$b = new MyArray($w, 3);
	?>
	<pre>
	<p>1st array<br>
	<?php if(is_array($a->GetArr()[0]))
		echo "Многомерный массив<br>";
	else 
		echo "Одномерный массив<br>";
	echo "Sum: $a->sum<br>";
	echo "min: {$a->Min()}<br>";
	echo "max: {$a->Max()}<br>";
	echo "<br>";
	print_r($a->GetArr());
	?>
	2nd array<br>
	<?php
	if(is_array($b->GetArr()[0]))
		echo "Многомерный массив";
	else 
		echo "Одномерный массив";
	echo "<BR>";
	echo "Sum: {$b->sum}<br>";
	echo "min: {$b->Min()}<br>";
	echo "max: {$b->Max()}<br>";
	$Smin = 0;
	for ($i=0; $i < Fact($w); $i++)
		$Smin += $b->Min($i);
		echo "Smin: $Smin";
	echo "<br>";
	$Smax = 0;
	for ($i=0; $i < Fact($w); $i++)
		$Smax += $b->Max($i);
		echo "Smax: $Smax";
	echo "<br>";
	echo "<br>";
	print_r($b->GetArr());
	?>
	</pre>
	</div>
	<footer></footer>
	</body>
</html>