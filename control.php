<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Панель управления</title>
</head>

<body>
<?php
require "header.php";
?>

<center><h1>Функциональное меню</h1></center>

<center><a href="panel/update_center.php" target="a_blank"><button>📡Центр обновлений</button></a></center>
<center><a href="panel/tp.php" target="a_blank"><button>🎧Обратная связь</button></a></center>
<center><a href="https://forms.gle/1V3JYtzazATZjFpT8" target="a_blank"><button>✉️Опубликовать проект</button></a></center>
<center><a href="panel/voice.php" target="a_blank"><button>📣Голосование: лучший проект месяца</button></a></center>
<center><a href="panel/report.php" target="a_blank"><button>⚖️Пожаловаться</button></a></center>

<?php
require "ads.php";
?>

</body>
</html>