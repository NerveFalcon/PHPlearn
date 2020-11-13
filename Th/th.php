<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>php th</title>
</head>
<body>
	<form action="index.php" method="post">
		<label for="text">Text</label>
		<textarea name="text" id="text"></textarea>
		<select name="sel">
			<option value="1">Mon</option>
			<option value="2">Tue</option>
		</select>
		<input type="checkbox" name="option[]" id="1">1
		<input type="checkbox" name="option[]" id="2">2

		<input type="radio" name="contact[]" id="contactChoice1" value="1">
		<label for="contactChoise1">1</label>

		<input type="radio" name="contact[]" id="contactChoice2" value="2">
		<label for="contactChoise2">2</label>
		<input type="submit" value="Go">
	</form>
</body>
</html>