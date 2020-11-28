<?php
	$S = $_POST["SName"];
	$F = $_POST["Fname"];
	$P = $_POST["Patr"];
	$path = "../content/files/accounts.txt";
	$accounts = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	foreach ($accounts as $line_num => $line) {
		$ex = explode("|", $line);
		if($S == $ex[0])
		if($F == $ex[1])
		if($P == $ex[2])
			$find[] = $line_num;
	}
	if(empty($find[0]))
		echo "Такого пользователя не найдено";
	else{
		echo "$S $F $P<br>";
		$count = count($find);
		echo "Найдено $count пользователей<br>";
		foreach ($find as $line => $line_num){
			$ex = explode("|", $accounts[$line_num]);
			for ($i=0; $i < 12; $i++) { 
				if($ex[$i] == NULL) $ex[$i] = "не указан";
			}
			echo "
			<div class=\"line\">
				<table style=\"margin:auto\"> 
					<tr>
						<td>Фамилия</td>
						<td>".$ex[0]."</td>
					</tr>
					<tr>
						<td>Имя</td>
						<td>".$ex[1]."</td>
					</tr>
					<tr>
						<td>Отчество</td>
						<td>".$ex[2]."</td>
					</tr>
					<tr>
						<td>День рождения</td>
						<td>".$ex[3]."</td>
					</tr>
					<tr>
						<td>Пол</td>
						<td>".$ex[4]."</td>
					</tr>
					<tr>
						<td>Группа</td>
						<td>".$ex[5]."</td>
					</tr>
					<tr>
						<td>Страна</td>
						<td>".$ex[6]."</td>
					</tr>
					<tr>
						<td>Адрес</td>
						<td>".$ex[7]."</td>
					</tr>
					<tr>
						<td>Телефон</td>
						<td>".$ex[8]."</td>
					</tr>
					<tr>
						<td>Электронная почта</td>
						<td>".$ex[9]."</td>
					</tr>
					<tr>
						<td>Увлечения</td>
						<td>".$ex[10]."</td>
					</tr>
				</table>
				<h4>Дополнительная информация<h4>
					<br>".$ex[11]."
			</div>";
		}
	}
?>