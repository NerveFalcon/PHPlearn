<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Практическая работа 7</title>
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
		#form{
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
	<h1>Практическая работа 7</h1>
	<div class="ex">
		<form action="7.php" method="post" enctype="multipart/form-data">
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
						<td><label for="sex">Пол</label></td>
						<td>
							<input type="radio" name="sex[M]" id="M">
							<label for="sex[M]">Мужчина</label>
							<br>	
							<input type="radio" name="sex[F]" id="F">
							<label for="sex[F]">Женщина</label>
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
					<tr>
						<td><label for="photo">Изображение</label></td>
						<td><input type="file" name="photo"></td>
					</tr>
				</table>
				
				<label for="hobby">Увлечения</label>
				<br>
				<input type="checkbox" name="hobby[Баскетбол]" id="basketball">
				<label for="basketball">Баскетбол</label>
				<input type="checkbox" name="hobby[Чтение]" id="book">
				<label for="book">Чтение книг</label>
				<input type="checkbox" name="hobby[Музыка]" id="music">
				<label for="music">Музыка</label>
				<br>
				<br>
				<textarea name="about" id="form" style="width:50%" rows="5" placeholder="Дополнительная информация"></textarea>
				<br>
				<input type="file" name="uploads[]" multiple>
				<br>
				<input type="submit" value="Отправить">
				<input type="reset" value="Сбросить">
			</fieldset>
		</form>
		<hr>
	</div>
	<footer></footer>
	</body>
</html>