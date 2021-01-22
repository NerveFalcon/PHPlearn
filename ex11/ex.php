<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Практическая работа 11</title>
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
		input{
			width: 200px;
			text-align: center;
		}
		select{
			width: 200px;
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<h1><a href="/contents.php">Оглавление</a></h1>
	</header>
	<h1>Практическая работа 11</h1>
	<div class="ex">
		<h3>Задание 1</h3>
		<form action="" method="post">
			<fieldset>
				<legend>Анкета</legend>
				<table>
					<tr>
						<td><label for="SecName">Фамилия*</label></td>
						<td><input type="text" name="SecName" id="form"></td>
					</tr>
					<tr>
						<td><label for="FirstName">Имя*</label></td>
						<td><input type="text" name="FirstName" id="form"></td>
					</tr>
					<tr>
						<td><label for="Patronymic">Отчество*</label></td>
						<td><input type="text" name="Patronymic" id="form"></td>
					</tr>
					<tr>
						<td><label for="date">День рождения</label></td>
						<td><input type="date" name="date" id="form"></td>
					</tr>
					<tr>
						<td><label for="gender">Пол</label></td>
						<td>
							<input style="width:16px" type="radio" name="gender[male]" id="M">
							<label style="width:184px" for="gender[Мужчина]">Мужчина</label>
							<br>	
							<input style="width:16px" type="radio" name="gender[female]" id="F">
							<label style="width:184px" for="gender[Женщишна]">Женщина</label>
						</td>
					</tr>
					<tr>
						<td><label for="group">Группа</label></td>
						<td>
							<select name="group" id="form">
								<option value="81">81</option>
								<option value="91">91</option>
								<option value="92">92</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label for="country">Страна</label></td>
						<td>
							<select name="country" id="form">
								<option value="ru">Россия</option>
								<option value="en">США</option>
								<option value="uk">Великобритания</option>
								<option value="ge">Германия</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label for="addres">Адрес</label></td>
						<td><input type="text" name="addres" id="form"></td>
					</tr>
					<tr>
						<td><label for="tel">Телефон</label></td>
						<td><input type="tel" name="tel" id="form"></td>
					</tr>
					<tr>
						<td><label for="mail">Электронная почта*</label></td>
						<td><input type="email" name="mail" id="form"></td>
					</tr>
				</table>
				
				<label for="hobby">Увлечения</label>
				<br>
				<input style="width:16px" type="checkbox" name="hobby[Баскетбол]" id="basketball">
				<label for="basketball">Баскетбол</label>
				<input style="width:16px" type="checkbox" name="hobby[Чтение]" id="book">
				<label for="book">Чтение книг</label>
				<input style="width:16px" type="checkbox" name="hobby[Музыка]" id="music">
				<label for="music">Музыка</label>
				<br>
				<br>
				<textarea name="about" id="form" style="width:50%" rows="5" placeholder="Дополнительная информация"></textarea>
				<br>
				<input style="width:100px" type="submit" value="Отправить">
				<input style="width:100px" type="reset" value="Сбросить">
			</fieldset>
		</form>
		<?php 
			include "11.php";
		?>
		<hr>
	</div>
	<footer></footer>
	</body>
</html>