<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Практическая работа 9</title>
	<link rel="stylesheet" href="/fund.css">
	<style>
		table{
			border:0;
			margin:auto;
		}
		td{
			border:0;
		}
		td:first-child{
			text-align:right;
		}
		#fio{
			width: 200px;
			text-align: center;
		}
		.line{
			display:inline-block;
			vertical-align:top;	
		}
		select{
			width: 200px;
			text-align: center;
		}
		footer{
			position: absolute;
			bottom: 10%;
			right:22%;
		}
	</style>
</head>
<body>
	<header>
		<h1><a href="/contents.php">Оглавление</a></h1>
	</header>
	<h1>Практическая работа 9</h1>
	<div class="ex">
		<h3>Задание 1</h3>
		<form action="" method="post">
			<fieldset>
				<legend>Поиск пользователя</legend>
				<table>
					<tr>
						<td><label for="SName">Фамилия</label></td>
						<td><input type="text" name="SName" id="fio"></td>
					</tr>
					<tr>
						<td><label for="Fname">Имя</label></td>
						<td><input type="text" name="Fname" id="fio"></td>
					</tr>
					<tr>
						<td><label for="Patr">Отчество</label></td>
						<td><input type="text" name="Patr" id="fio"></td>
					</tr>
					<tr>
						<td><input type="reset" value="Сбросить"></td>
						<td><input type="submit" value="Поиск"></td>
					</tr>
				</table>
			</fieldset>
		</form>
		<?php
			include "9.php";
		?>
		<hr>
	</div>
	<footer></footer>
	</body>
</html>