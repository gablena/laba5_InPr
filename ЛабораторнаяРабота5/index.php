<html>
<head> <title> Сведения о ОС сайта</title> </head>
<h2>Зарегистрированные ОС:</h2>
<table border="1">
<tr>
<th> Название </th> <th> Тип оборудования </th>
<th> Разрядность </th>
<th> Разработчик</th> <th> Кол-во пользователей </th>
<th> Редактировать </th> <th> Удалить </th>
</tr>
<?php
$mysqli = new mysqli("localhost", "f0474078_OS", "osos", "f0474078_OS");
if ($mysqli->connect_errno) {
echo "Не удалось подключиться к БД";
}
// Запрос на выборку сведений о пользователях
$result = $mysqli->query("SELECT id_OS, name, type, digCap, programmer, users
FROM OS1");
if ($result){
$counter=0;
// Для каждой строки из запроса
while ($row = $result->fetch_array()){
$name = $row['name'];
$type = $row['type'];
$square = $row['square'];
$population = $row['population'];
$region = $row['region'];
$counter++;
echo "<tr>";
 echo "<td>" . $row['name'] . "</td>";
 echo "<td>" . $row['type'] . "</td>";
 echo "<td>" . $row['digCap'] . "</td>";
 echo "<td>" . $row['programmer'] . "</td>";
 echo "<td>" . $row['users'] . "</td>";
 echo "<td><a href='editOS.php?id_OS=" . $row['id_OS']. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='deleteOS.php?id_OS=" . $row['id_OS']. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
print "</table>";
print("<p>Всего : $counter </p>");
}
print("<p> <a href='new_OS.php'> Добавить </a> </p>");
print("<p> <a href='index1.php'> Цифровые магазины </a> </p>");
print("<p> <a href='index2.php'> Цифровые ключи </a> </p>");
print("<p> <a href='gen_pdf.php'>  Скачать pdf-файл </a> </p>");
print("<p> <a href='gen_xls.php'>  Скачать xls-файл </a> </p>");
?>
		<h2 align="right"><a href="http://f0474078.xsph.ru/index.php"> Назад &#8617;</a></h2>
</html>
