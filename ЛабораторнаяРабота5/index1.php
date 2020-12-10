<html>
<head> <title> Цифровые магазины</title> </head>
<h2>Зарегистрированные магазины:</h2>
<table border="1">
<tr>
<th> Название </th>
<th> URL магазина</th>
<th> Редактирование </th>
<th> Удаление</th>
</tr>
<?php
$mysqli = new mysqli("localhost", "f0474078_OS", "osos", "f0474078_OS");
if ($mysqli->connect_errno) {
echo "Не удалось подключиться к БД";
}
// Запрос на выборку сведений о пользователях
$result = $mysqli->query("SELECT id_DS, name_DS, url
FROM DS");
if ($result){
$counter=0;
// Для каждой строки из запроса
while ($row = $result->fetch_array()){
$name_DS = $row['name_DS'];
$url = $row['url'];
$counter++;
echo "<tr>";
 echo "<td>" . $row['name_DS'] . "</td>";
 echo "<td>" . $row['url'] . "</td>";
 echo "<td><a href='editDS.php?id_DS=" . $row['id_DS']. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='deleteDS.php?id_DS=" . $row['id_DS']. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
print "</table>";
print("<p>Всего : $counter </p>");
}
print("<p> <a href='newDS.php'> Добавить </a> </p>");
print("<p> <a href='index2.php'> Цифровые ключи</a> </p>");
print("<p> <a href='index.php'> Операционные системы </a> </p>");
?>
		<h2 align="right"><a href="http://f0474078.xsph.ru/index.php"> Назад &#8617;</a></h2>
</html>
