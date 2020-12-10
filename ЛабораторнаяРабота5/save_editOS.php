<html>
<body>
    <?php
    $mysqli = new mysqli("localhost", "f0474078_OS", "osos", "f0474078_OS");
    if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к БД";
    }
    $id_OS = $_GET['id_OS'];
    $name = $_GET['name'];
    $type = $_GET['type'];
    $digCap = $_GET['digCap'];
    $programmer = $_GET['programmer'];
    $users = $_GET['users'];
    $request="UPDATE OS1 SET name='$name',type='$type', digCap='$digCap',
    programmer='$programmer', users='$users' WHERE id_OS='$id_OS'";
    $result = $mysqli->query($request);
    if ($result) {
        echo 'Все сохранено. <a href="index.php"> Вернуться к списку ОС </a>';
    }
    else {
        echo 'Ошибка сохранения. <a href="index.php"> Вернуться к списку ОС</a> ';
    }
    ?>
</body>
</html>



