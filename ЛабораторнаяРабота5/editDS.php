<html> 
<?php 
$mysqli = new mysqli("localhost", "f0474078_OS", "osos", "f0474078_OS");
    if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к БД";
    }
$id_DS = $_GET['id_DS'];
$result = $mysqli->query("SELECT name_DS, url
FROM DS WHERE id_DS='$id_DS'");
    if ($result){
        while ($st = $result->fetch_array()) {
            $name_DS = $st['name_DS'];
            $url = $st['url'];
        }
    }
print "<form action='save_editDS.php' method='get'>";
print "Название: <input name='name_DS' size='40' type='varchar' value='$name_DS'>";
print "<br>Сайт магазина: <input name='url' size='100' type='varchar' value='$url'>";
print "<input type='hidden' name='id_DS' size='11' type='int' value='$id_DS'>";
print "<input type='submit' name='save' value='Сохранить'>";
print "</form>";
print "<p><a href='index1.php'> Вернуться к списку </a>";
?> 
</html>
