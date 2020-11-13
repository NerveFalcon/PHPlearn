<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/fund.css"> 
	<title>Анкета</title>
	<style>
		.line{
			display:inline-block;
			vertical-align:top;	
		}
		table{
			border:0;
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
		footer{
			position: absolute;
			bottom: 10%;
			right:22%;
		}
	</style>
</head>
<?php
	$hob = array_keys($_POST["hobby"]);
	foreach ($hob as $key => $value)
		$hobby = $hobby.$value."<br>";
	switch ($_POST["sex"]) {
		case 'M':
			$sex = "Мужчина";
			break;
		case 'F':
			$sex = "Женщина";
			break;
		default:
			$sex = "Не указан";
			break;
		}
	switch ($_POST["country"]) {
		case 'ru':
			$country = "Россия";
			break;
		case 'en':
			$country = "США";
			break;
		case 'uk':
			$country = "Великобоитания";
			break;
		case 'ge':
			$country = "Германия";
			break;
		default:
			$country = "не опознана";
			break;
	}
	$target_dir = "../img";
	$target_file = "avatar." . basename($_FILES["photo"]["type"]);
	$uploadOk = 1;
	if ($_FILES["photo"]["error"] == 0)
		move_uploaded_file($_FILES['photo']['tmp_name'], "$target_dir/$target_file");
	else
		$target_file = "default.png";
	$req = "Заполните обязательные поля(отмеченные \\\"*\\\")";
	$alm = "Ваш адрес электронной почты должен оканчиваться на \\\".ru\\\"";
	if (($_POST["SecName"] == NULL) || ($_POST["FirstName"] == NULL) || ($_POST["Patronymic"] == NULL) || ($_POST["mail"] == NULL)){
		echo "<script>alert(\"$req\")</script><body onload='window.open(\"./ex.php\", \"_self\")'>";
		exit();
	} elseif (substr($_POST["mail"], -3) != ".ru"){
		echo "<script>alert(\"$alm\")</script><body onload='window.open(\"./ex.php\", \"_self\")'>";
		exit();
	} else echo "
<body>
	<header>
		<h1><a href=\"/contents.php\">Оглавление</a></h1>
	</header>
	<h1>Анкета</h1>
	<div class=\"line\">
		<table style=\"margin:auto\"> 
			<tr>
				<td>Фамилия</td>
				<td>".$_POST["SecName"]."</td>
			</tr>
			<tr>
				<td>Имя</td>
				<td>".$_POST["FirstName"]."</td>
			</tr>
			<tr>
				<td>Отчество</td>
				<td>".$_POST["Patronymic"]."</td>
			</tr>
			<tr>
				<td>День рождения</td>
				<td>".$_POST["date"]."</td>
			</tr>
			<tr>
				<td>Пол</td>
				<td>$sex</td>
			</tr>
			<tr>
				<td>Группа</td>
				<td>".$_POST["group"]."</td>
			</tr>
			<tr>
				<td>Страна</td>
				<td>$country</td>
			</tr>
			<tr>
				<td>Адрес</td>
				<td>".$_POST["addres"]."</td>
			</tr>
			<tr>
				<td>Телефон</td>
				<td>".$_POST["tel"]."</td>
			</tr>
			<tr>
				<td>Электронная почта</td>
				<td>".$_POST["mail"]."</td>
			</tr>
			<tr>
				<td>Увлечения</td>
				<td>$hobby</td>
			</tr>
		</table>
	</div>
	<div class=\"line\">
		<img width='200px' src='$target_dir/$target_file'/><br/>
	</div>
	<hr>
	<div>
	<h4>Дополнительная информация<h4>
		<br>".$_POST["about"]."
	</div>
	<footer>
		<h3><a href=\"ex.php\">К форме</a></h3>
	</footer>
</body>";
?>
</html>