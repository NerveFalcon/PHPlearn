<?php
	$hobby = "";
	$sex = array_keys($_POST["sex"], "on");
	$hob = array_keys($_POST["hobby"]);
	foreach ($hob as $key => $value)
		$hobby .= $value." <br>";
	
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
	
	$req = "Заполните обязательные поля(отмеченные \\\"*\\\")";
	$alm = "Ваш адрес электронной почты должен оканчиваться на \\\".ru\\\"";
	$path = "../content/files/accounts.txt";
	if (($_POST["SecName"] == NULL) || ($_POST["FirstName"] == NULL) || ($_POST["Patronymic"] == NULL) || ($_POST["mail"] == NULL))
		echo "<script>alert(\"$req\")</script>";
	elseif (substr($_POST["mail"], -3) != ".ru")
		echo "<script>alert(\"$alm\")</script>";
	else{
		$account = "\n".strip_tags($_POST["SecName"]."|".
			$_POST["FirstName"]."|".$_POST["Patronymic"]."|".
			$_POST["date"]."|".$sex[0]."|".$_POST["group"]."|".
			$country."|".$_POST["addres"]."|".$_POST["tel"]."|".
			$_POST["mail"]."|".$hobby."|".$_POST["about"]);
		echo "
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
			<td>".$sex[0]."</td>
		</tr>
		<tr>
			<td>Группа</td>
			<td>".$_POST["group"]."</td>
		</tr>
		<tr>
			<td>Страна</td>
			<td>".$country."</td>
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
		Дополнительная информация
			<br>".$account;
		if (is_readable($path))
			file_put_contents($path, $account, FILE_APPEND);
		else{
			$f = fopen($path, "w");
			fclose($f);
			file_put_contents($path, $account, FILE_APPEND);
		}
	}
?>