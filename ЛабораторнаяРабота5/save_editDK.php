<html>
<body>
    <?php
    $mysqli = new mysqli("localhost", "f0474078_OS", "osos", "f0474078_OS");
    if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к БД";
    }
    $id_DK = $_GET['id_DK'];
    $id_OS = $_GET['id_OS'];
    $id_DS = $_GET['id_DS'];
    $dataP = $_GET['dataP'];
    $dataO = $_GET['dataO'];
    $cost = $_GET['cost'];
    $keyOS = $_GET['keyOS'];
    $request="UPDATE DK SET id_OS='$id_OS',id_DS='$id_DS', dataP='$dataP',
    dataO='$dataO', cost='$cost', keyOS='$keyOS' WHERE id_DK='$id_DK'";
    $result = $mysqli->query($request);
    if ($result) {
        echo 'Все сохранено. <a href="index2.php"> Вернуться к списку ОС </a>';
    }
    else {
        echo 'Ошибка сохранения. <a href="index2.php"> Вернуться к списку ОС</a> ';
    }
    ?>
</body>
</html>
