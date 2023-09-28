<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
<?php
$input = $_GET['vvod'];

if($input == "quite") {
	header('Location: quite/index.php');
	exit;
}

else {
	echo '<center>'."Ничего не найдено! Вы будете переброшены на главную через несколько секунд".'</center>';
}
?>
</body>
</html>