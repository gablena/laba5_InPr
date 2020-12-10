<?php
$mysqli = new mysqli("localhost","f0474078_OS", "osos", "f0474078_OS");
if ($mysqli->connect_errno) {
echo "Не удалось подключиться к БД";
}

$id_DS = $_GET['id_DS'];

$result = $mysqli->query("DELETE FROM DS WHERE id_DS='$id_DS'");

header("Location: index1.php");
exit;
?>
