<?php
$mysqli = new mysqli("localhost","f0474078_OS", "osos", "f0474078_OS");
if ($mysqli->connect_errno) {
echo "Не удалось подключиться к БД";
}

$name = $_GET['name'];

$result = $mysqli->query("DELETE FROM OS WHERE name='$name'");

header("Location: index.php");
exit;
?>
