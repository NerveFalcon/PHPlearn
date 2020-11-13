<html>
<head>
	<meta charset="UTF-8">
	<title>Практическая работа 3</title>
	<link rel="stylesheet" href="/fund.css">
</head>
<body>
	<header>
		<h1><a href="/contents.php">Оглавление</a></h1>
	</header>
	<h1>Практическая работа 3</h1>
	<div class="ex">
		<h3>Задание 1</h3>
		<?php 
			include "3-1.php";
			$n = rand(1, 126);
			echo "Число $n <br><br>";
			dec2($n);
		?>
		<hr>
	</div>
	<div class="ex">
		<h3>Задание 2</h3>
		
		<?php 
			include "3-2.php";
			for ($i=0; $i < 3; $i++) { 
				for ($k=0; $k < 3; $k++) { 
					$a[$i][$k] = rand(0,9);
				}
			}
			echo "<pre>";
			print_r($a);
			echo "</pre>";
			echo "сумма по главной диагонали: ".dia($a)."<br>";
			echo "сумма по побочной диагонали: ".rdia($a);
		?>
		<hr>
	</div>
	<footer></footer>
	</body>
</html>