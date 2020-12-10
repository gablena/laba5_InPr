<?php
$mysqli = new mysqli("localhost","f0474078_OS", "osos", "f0474078_OS");
if ($mysqli->connect_errno) {
echo "Не удалось подключиться к БД";
}
    $id_OS = $_GET['id_OS'];
    $id_DS = $_GET['id_DS'];
    $dataP = $_GET['dataP'];
    $dataO = $_GET['dataO'];
    $cost = $_GET['cost'];
    $keyOS = $_GET['keyOS'];
$result = $mysqli->query("INSERT INTO DK SET id_OS='$id_OS', id_DS='$id_DS', dataP='$dataP', dataO='$dataO',
                         cost='$cost', keyOS='$keyOS'");
if ($result){
print "<p>Внесение данных прошло успешно!";
print "<p><a href='index2.php'> Вернуться к списку </a>";
}
else{
print "Ошибка сохранения <a href='index2.php'> Вернуться к списку </a>";
}
?>
