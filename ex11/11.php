<?php
	class Anketa
	{
		public $secName;
		public $firstName;
		public $patron;
		public $date;
		public $gender;
		public $group;
		public $country;
		public $addres;
		public $telephone;
		public $email;
		public $hobby;
		public $about;
		public function __construct() {
		}
		public function Fill(string $sName, string $firstName, string $patron, string $date, string $gender, string $group, string $country, string $addres, string $telephone, string $email, string $hobby, string $about) {
			$this->secName = $sName;
			$this->firstName = $firstName;
			$this->patron = $patron;
			$this->date = $date;
			$this->gender = $gender;
			$this->group = $group;
			$this->country = $country;
			$this->addres = $addres;
			$this->telephone = $telephone;
			$this->email = $email;
			$this->hobby = $hobby;
			$this->about = $about;
		}
		public static function Hobby()
		{
			$hobby = "";
			$hob = array_keys($_POST["hobby"]);
			foreach ($hob as $key => $value)
			$hobby .= $value." <br>";
			return $hobby;
		}
		public static function Gender()
		{
			$gender = array_keys($_POST["gender"], "on");
			return $gender[0];
		}
		public static function Country()
		{
			switch ($_POST["country"]) {
				case 'ru':
					return "Россия";
					break;
				case 'en':
					return "США";
					break;
				case 'uk':
					return "Великобоитания";
					break;
				case 'ge':
					return "Германия";
					break;
				default:
					return "не опознана";
					break;
			}
		}
		public static function Check()
		{
			$req = "Заполните обязательные поля(отмеченные \\\"*\\\")";
			$alm = "Ваш адрес электронной почты должен оканчиваться на \\\".ru\\\"";
			if (($_POST["SecName"] == NULL) || ($_POST["FirstName"] == NULL) || ($_POST["Patronymic"] == NULL) || ($_POST["mail"] == NULL))
				echo "<script>alert(\"$req\")</script>";
			elseif (substr($_POST["mail"], -3) != ".ru")
				echo "<script>alert(\"$alm\")</script>";
			else 
				return 1;
		}
		public function Convert()
		{
			return "\n".$this->secName."|".$this->firstName."|".$this->patron."|".$this->date."|".$this->gender."|".$this->group."|".$this->country."|".$this->addres."|".$this->telephone."|".$this->email."|".$this->hobby."|".$this->about;
		}
		public function Upload(string $path)
		{
			if (is_readable($path)) 
				file_put_contents($path, $this->Convert(), FILE_APPEND);
			else {
				$f = fopen($path, "w");
				fclose($f);
				file_put_contents($path, $this->Convert(), FILE_APPEND);
			}
		}
	}
	$path = "../content/files/accounts.txt";
	$A = new Anketa();
	$A->Fill($_POST["SecName"], $_POST["FirstName"], $_POST["Patronymic"], $_POST["date"], $A->Gender(), $_POST["group"], $A->Country(), $_POST["addres"], $_POST["tel"], $_POST["mail"], $A->Hobby(), $_POST["about"]);
	if($A->Check())
		$A->Upload($path);
?>