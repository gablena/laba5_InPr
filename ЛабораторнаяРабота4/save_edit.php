<html>
<body>
    <?php
    $mysqli = new mysqli("localhost", "f0474078_OS", "osos", "f0474078_OS");
    if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к БД";
    }
    $old_name = $_GET['name'];
    $new_name = $_GET['new_name'];
    $type = $_GET['type'];
    $digCap = $_GET['digCap'];
    $programmer = $_GET['programmer'];
    $users = $_GET['users'];
    $request="UPDATE OS SET name='$new_name',type='$type', digCap='$digCap',
    programmer='$programmer', users='$users' WHERE name='$old_name'";
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