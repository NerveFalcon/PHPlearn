<html>
	<head>
		<title>Содержание</title>
		<link rel="stylesheet" href="/fund.css">
	</head>
	<body>
		<h1>МДК 09.01 "Проектирование и разработка веб-приложений"</h1>
		<hr>
		<?php
		for ($i=1; $i <= 14; $i++){
			if($i == 4){
				echo "<h3><a href='/ex$i/ex.php'>Практическая работа $i/5</a></h3>";
				$i++;
			}
			else
				echo "<h3><a href='/ex$i/ex.php'>Практическая работа $i</a></h3>";
		}
		?>
	</body>
</html>