<html>
<head> <title> Сведения о цифровых ключах</title> </head>
<h2>Цифровые ключи:</h2>
<table border="1">
<tr>
<th> ОС</th> <th> Цифровой магазин</th>
<th> Дата покупки </th>
<th> Дата окончания </th>
<th> Сумма </th> <th> Ключ </th>
<th> Редактирование </th> <th> Удаление </th>
</tr>
<?php
$mysqli = new mysqli("localhost", "f0474078_OS", "osos", "f0474078_OS");
if ($mysqli->connect_errno) {
echo "Не удалось подключиться к БД";
}
// Запрос на выборку сведений о пользователях
$result = $mysqli->query("SELECT id_DK, dataP, dataO, OS1.name as id_OS, DS.name_DS as id_DS, cost, keyOS
FROM DK
LEFT JOIN OS1 ON DK.id_OS=OS1.id_OS
LEFT JOIN DS ON DK.id_DS=DS.id_DS");
if ($result){
$counter=0;
// Для каждой строки из запроса
while ($row = $result->fetch_array()){
$id_OS = $row['id_OS'];
$id_DS = $row['id_DS'];
$dataP = $row['dataP'];
$dataO = $row['dataO'];
$cost = $row['cost'];
$keyOS = $row['keyOS'];

$dataP= date('d-m-Y', strtotime($dataP));
$dataO = date('d-m-Y', strtotime($dataO));
$counter++;
echo "<tr>";
echo "<td>" . $row['id_OS'] . "</td>";
echo "<td>" . $row['id_DS'] . "</td>";
echo "<td>" . $dataP . "</td>";
echo "<td>" . $dataO . "</td>";
echo "<td>" . $row['cost'] . "</td>";
 echo "<td>" . $row['keyOS'] . "</td>";
 echo "<td><a href='editDK.php?id_DK=" . $row['id_DK']. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='deleteDK.php?id_DK=" . $row['id_DK']. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
print "</table>";
print("<p>Всего : $counter </p>");
}
print("<p> <a href='newDK.php'> Добавить </a> </p>");
print("<p> <a href='index1.php'> Цифровые магазины</a> </p>");
print("<p> <a href='index.php'> Операционные системы </a> </p>");
?>
		<h2 align="right"><a href="http://f0474078.xsph.ru/index.php"> Назад &#8617;</a></h2>
</html>
