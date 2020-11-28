<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Практическая работа 10</title>
	<link rel="stylesheet" href="/fund.css">
	<style>
		table{
			border:0;
			margin: auto;
		}
		td{
			border:0;
		}
		td:first-child{
			text-align:right;
		}
		.popup{
			width: min-content;
			margin: auto 0;
			margin-left: auto;
			font-size: small;
			color: #771111;
		}
		.popup:hover{
			color: #aa1111;
		}
		.line{
			display:inline-block;
			vertical-align:top;	
		}
		footer{
			position: absolute;
			bottom: 10%;
			right:22%;
		}
		.authorization{
			display: none;
			cursor:pointer;
		}
		.registration{
			display: block;
			cursor:pointer;
		}
	</style>
</head>
<body>
	<header>
		<h1><a href="/contents.php">Оглавление</a></h1>
	</header>
	<h1>Практическая работа 10</h1>
	<div class="ex">
		<h3>Задание 1</h3>
		<div class="authorization" id="authorization">
			<form action="" method="post">
				<fieldset>
					<legend>Авторизация</legend>
					<h3 class="popup" onclick="display()">Зарегистрироваться</h3>
					<table>
						<tr>
							<td>Логин</td>
							<td><input type="text" name="login" id="auth"></td>
						</tr>
						<tr>
							<td>Пароль</td>
							<td><input type="password" name="password" id="auth"></td>
						</tr>
						<tr>
							<td><input type="reset" value="Сбросить" id="auth"></td>
							<td><input type="submit" value="Отправить" name="auth" id="auth"></td>
						</tr>
					</table>
				</fieldset>
			</form>
		</div>
		<div class="registration" id="registration">
			<form action="" method="post">
				<fieldset>
					<legend>Регистрация</legend>
					<h3 class="popup" onclick="display()">Авторизоваться</h3>
					<table>
						<tr>
							<td>Логин</td>
							<td><input type="text" name="login" id="reg"></td>
						</tr>
						<tr>
							<td>Пароль</td>
							<td><input type="password" name="password" id="reg"></td>
						</tr>
						<tr>
							<td><input type="reset" value="Сбросить" id="reg"></td>
							<td><input type="submit" value="Отправить" name="reg" id="reg"></td>
						</tr>
					</table>
				</fieldset>
			</form>
		</div>
		<hr>
	</div>
	<footer>
	<script src="js.js"></script>
	<?php
		include "10.php";
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
	?>
	</footer>
	</body>
</html>