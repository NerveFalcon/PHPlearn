<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Практическая работа 4</title>
	<link rel="stylesheet" href="/fund.css">
</head>
<body>
	<header>
		<h1><a href="/contents.php">Оглавление</a></h1>
	</header>
	<h1>Практическая работа 4</h1>
	<div class="ex">
		<h3>Задание 1</h3>
		<form action="#" method="post">
			<fieldset>
				<legend>Введите полные ФИО</legend>
				<input type="text" name="text" placeholder="FIO">
				<input type="submit" value="Send">
				<br>
				<?php
					include "4.php";
					$string = $_POST['text'];
				?>
				<p>Какие-то непонятные проблемы с кодировкой, англиийские слова нормально работают, а вот с Верхним регистром русского языка что-то не так</p>
			</fieldset>
		</form>
		<hr>
	</div>
	<div class="ex">
		<h3>Задание 2</h3>
		<form action="#" method="post">
			<fieldset>
				<legend>Введите число от 1 до 50</legend>
				<input type="text" name="number">
				<input type="submit" value="Send">
				<br>
				<pre>
				<?php
					include "5.php";
					for ($i=0; $i < 10; $i++) { 
						$arr[$i] = rand(0, 50);
					}
					$n = $_POST['number'];
					arrsort($arr, $n);
				?>
				</pre>
			</fieldset>
		</form>
		<hr>
	</div>
	<footer></footer>
	</body>
</html>