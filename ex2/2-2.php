<?php
	$person [0]["Sname"] = "Иванов";
	$person [0]["Fname"] = "Иван";
	$person [0]["Addres"] = "Санкт-Петербург";
	$person [0]["Phone"] = "+79998765432";
	$person [0]["Mail"] = "IvanovI@mail.com";

	$person [1]["Sname"] = "Сидоров";
	$person [1]["Fname"] = "Николай";
	$person [1]["Addres"] = "Санкт-Петербург";
	$person [1]["Phone"] = "+79998765432";
	$person [1]["Mail"] = "SidorovN@mail.com";

	$person [2]["Sname"] = "Фадеев";
	$person [2]["Fname"] = "Ярослав";
	$person [2]["Addres"] = "Москва";
	$person [2]["Phone"] = "+79998765432";
	$person [2]["Mail"] = "FadeevYa@mail.com";
	
	foreach ($person as $num) {
		foreach ($num as $key => $value) {
			echo $key.": ".$value;
			echo "<br>";
		}
		echo "<br>";
	}
?>