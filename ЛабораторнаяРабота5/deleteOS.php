<?php
$mysqli = new mysqli("localhost","f0474078_OS", "osos", "f0474078_OS");
if ($mysqli->connect_errno) {
echo "Не удалось подключиться к БД";
}

$id_OS = $_GET['id_OS'];

$result = $mysqli->query("DELETE FROM OS1 WHERE id_OS='$id_OS'");

header("Location: index.php");
exit;
?>
