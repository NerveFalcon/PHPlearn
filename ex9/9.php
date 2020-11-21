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
	foreach ($find as $key => $line_num) {
		echo "$line_num ";
	}
	}
?>