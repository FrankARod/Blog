<html>
<head>
	<title>Dice Roll</title>
</head>
<body>
	<?
		if ($guess == $face_number) {
			echo "$guess was correct!";
		} else {
			echo "WRONG! The correct answer was $face_number";
		}
	?>
</body>
</html>