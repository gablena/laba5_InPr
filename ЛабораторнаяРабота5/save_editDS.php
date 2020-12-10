<html>
<body>
    <?php
    $mysqli = new mysqli("localhost", "f0474078_OS", "osos", "f0474078_OS");
    if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к БД";
    }
    $id_DS = $_GET['id_DS'];
    $name_DS = $_GET['name_DS'];
    $url = $_GET['url'];
    $request="UPDATE DS SET name_DS='$name_DS',url='$url' WHERE id_DS='$id_DS'";
    $result = $mysqli->query($request);
    if ($result) {
        echo 'Все сохранено. <a href="index1.php"> Вернуться к списку ОС </a>';
    }
    else {
        echo 'Ошибка сохранения. <a href="index1.php"> Вернуться к списку ОС</a> ';
    }
    ?>
</body>
</html>