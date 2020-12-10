<html> 
<?php 
$mysqli = new mysqli("localhost", "f0474078_OS", "osos", "f0474078_OS");
    if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к БД";
    }
$id_OS = $_GET['id_OS'];
$result = $mysqli->query("SELECT name, type, digCap, programmer, users  FROM OS1 WHERE id_OS='$id_OS'");
    if ($result){
        while ($st = $result->fetch_array()) {
            $name = $st['name'];
            $type = $st['type'];
            $digCap = $st['digCap'];
            $programmer = $st['programmer'];
            $users = $st['users'];
        }
    }
print "<form action='save_editOS.php' method='get'>";
print "Название: <input name='name' size='40' type='varchar' value='$name'>";
print "<br>Тип оборудования: <input name='type' size='20' type='varchar' value='$type'>";
print "<br>Разрядность: <input name='digCap' size='3' type='varchar' value='$digCap'>";
print "<br>Разработчик: <input name='programmer' size='40' type='varchar' value='$programmer'>";
print "<br>Количество пользователей: <input type='varchar' name='users' size='20' value='$users'>";
print "<input type='hidden' name='id_OS' size='11' type='int' value='$id_OS'>";
print "<input type='submit' name='save' value='Сохранить'>";
print "</form>";
print "<p><a href='index.php'> Вернуться к списку ОС </a>";
?> 
</html>

