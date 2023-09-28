<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
<header>
<img src="img/logo.png" width="500px" height="250px">
<center><a href="search.php" alt="Найти игру, приложение или веб приложение"><button>Искать</button></a></center>
<center><a href="control.php" alt="В представлении не нуждается"><button>Меню</button></a></center>
<center><a href="users_list.php" alt="Открыть список пользователей и их проектов"><button>Список пользователей и проектов</button></a></center>
<center><a href="soglashenie.php" alt="Пользовательское соглашение проекта"><button>Пользовательское соглашение</button></a></center>
<?php
echo '<center>'."Сегодня: ".date("d M o").'</center>';
echo '<center>'."Время: ".date("H:i:s").' UTC -4'.'</center>';
$start = "Работаем первый квартал";
setcookie(work, $start, time() + 7776000);
echo '<center>'.$_COOKIE['work'].'</center>';
?>
<div class="a">
</div>

<style>
.a {
	border-bottom: 1px solid silver;
}
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</header>
</body>
</html>