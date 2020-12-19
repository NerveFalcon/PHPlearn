<?php session_start();

function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;  
    while (strlen($code) < $length) {
		$code .= $chars[mt_rand(0,$clen)];  
    }
    return $code;
}

$path = "../content/files/users.txt";
$users = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
if(isset($_POST['reg']))
{
	$err = array();
	# проверям логин
	if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login'])) {
		$err[] = "Логин может состоять только из букв английского алфавита и цифр";
	}
	if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30){
		$err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
	}
	# проверяем, не сущестует ли пользователя с таким именем
	foreach ($users as $line_num => $line) {
		$ex = explode("|", $line);
		if ($_POST["login"] == $ex[1]) {
			$err[] = "Пользователь с таким логином уже существует в базе данных";
		}
	}
	# Если нет ошибок, то добавляем в БД нового пользователя
	if(count($err) == 0){
		$login = $_POST['login'];
		# Убераем лишние пробелы и делаем шифрование
		$password = md5(trim($_POST['password']));
		$ex = array(5);
		$_SESSION["userID"] = $ex[0] = count($users);
		$_SESSION["userLogin"] = $ex[1] = $login;
		$_SESSION["userPass"] = $ex[2] = $password;
		$_SESSION["hash"] = $ex[3] = md5(generateCode(10));
		$ex[4] = $_SERVER['REMOTE_ADDR'];
		$user = "\n".$ex[0]."|".$ex[1]."|".$ex[2]."|".$ex[3]."|".$ex[4];
		file_put_contents($path, $user, FILE_APPEND);
	}
	else{
		print "<b>При регистрации произошли следующие ошибки:</b><br>";
		foreach($err AS $error){
			print $error."<br>";
		}
	}
}
# Функция для генерации случайной строки
elseif(isset($_POST['auth'])){
	$data = array(5);
	foreach ($users as $line_num => $line) {
		$ex = explode("|", $line);
		if($ex[1] == $_POST["login"])
			$data = explode("|", $line);
	}
	if (empty($data[2])) {
		echo "вы ввели не правильный логин/пароль";
	}
	if ($data[2] == md5($_POST["password"])) {
        # Генерируем случайное число и шифруем его
        $hash = md5(generateCode(10));
	}
	else{
		echo "вы ввели не правильный пароль";
	}
		$insip = $_SERVER['REMOTE_ADDR'];
	# Записываем в БД новый хеш авторизации и IP
	$data[3] = $hash;
	$data[4] = $insip;
	# Ставим куки
	setcookie("id", $data[4], time()+60*60*24*30);
	setcookie("hash", $hash, time()+60*60*24*30);
	# Переадресовываем браузер на страницу проверки нашего скрипта
}
else{
	print "Вы ввели неправильный логин/пароль";
}
?>