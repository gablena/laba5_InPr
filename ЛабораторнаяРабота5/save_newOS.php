<?php
$mysqli = new mysqli("localhost","f0474078_OS", "osos", "f0474078_OS");
if ($mysqli->connect_errno) {
echo "Не удалось подключиться к БД";
}
$name = $_GET['name'];
$type = $_GET['type'];
$digCap = $_GET['digCap'];
$programmer = $_GET['programmer'];
$users = $_GET['users'];
$result = $mysqli->query("INSERT INTO OS1 SET name='$name', type='$type',
digCap='$digCap', programmer='$programmer', users ='$users'");
if ($result){
print "<p>Внесение данных прошло успешно!";
print "<p><a href='index.php'> Вернуться к списку ОС </a>";
}
else{
print "Ошибка сохранения <a href='index.php'> Вернуться к списку ОС </a>";
}
?>


