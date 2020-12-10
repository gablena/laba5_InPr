<?php
$mysqli = new mysqli("localhost","f0474078_OS", "osos", "f0474078_OS");
if ($mysqli->connect_errno) {
echo "Не удалось подключиться к БД";
}

$id_DK = $_GET['id_DK'];

$result = $mysqli->query("DELETE FROM DK WHERE id_DK='$id_DK'");

header("Location: index2.php");
exit;
?>
