<?php
$mysqli = new mysqli("localhost","f0474078_OS", "osos", "f0474078_OS");
if ($mysqli->connect_errno) {
echo "Не удалось подключиться к БД";
}
$name_DS = $_GET['name_DS'];
$url = $_GET['url'];
$result = $mysqli->query("INSERT INTO DS SET name_DS='$name_DS', url='$url'");
if ($result){
print "<p>Внесение данных прошло успешно!";
print "<p><a href='index1.php'> Вернуться к списку </a>";
}
else{
print "Ошибка сохранения <a href='index1.php'> Вернуться к списку </a>";
}
?>