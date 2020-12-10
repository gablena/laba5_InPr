<html>
<head> <title> Добавление нового цифрового ключа</title> </head>
<body>
<H2>Добавить ЦК:</H2>
<form action="save_newDK.php" method="get">
<?
$mysqli= new mysqli("localhost", "f0474078_OS", "osos", "f0474078_OS");
if ($mysqli->connect_errno) {
echo "Невозможно подключиться к серверу";
}
//id os
$result = $mysqli->query("SELECT id_OS, name FROM OS1");
echo "<br>ОС: <select name='id_OS'>";

if ($result){
while ($row = $result->fetch_array()){
$id_OS = $row['id_OS'];
$name = $row['name'];
echo "<option value='$id_OS'>$name</option>";
}
}
echo "</select>";
//id DS
$result = $mysqli->query("SELECT id_DS, name_DS FROM DS");
echo "<br>Магазин: <select name='id_DS'>";

if ($result){
while ($row = $result->fetch_array()){
$id_DS = $row['id_DS'];
$name_DS = $row['name_DS'];
echo "<option value='$id_DS'>$name_DS</option>";
}
}
echo "</select>";
?>

<br>Дата покупки: <input name="dataP" placeholder="dd-mm-yyyy" type="date">
<br>Дата окончания: <input name="dataO" placeholder="dd-mm-yyyy" type="date">
<br>Сумма: <input name="cost" size="40" type="varchar">
<br>Ключ: <input name="keyOS" size="11" type="int">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index2.php"> Вернуться к списку цифровых магазинов</a>
</body>
</html>


</form>


