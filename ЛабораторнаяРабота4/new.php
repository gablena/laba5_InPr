<html>
<head> <title> Добавление новой ОС</title> </head>
<body>
<H2>Добавить ОС:</H2>
<form action="save_new.php" method="get">
Название: <input name="name" size="40" type="text">
<br>Тип оборудование: <input name="type" size="20" type="text">
<br>Разрядность: <input name="digCap" size="3" type="text">
<br>Разработчик: <input name="programmer" size="40" type="text">
<br>Кол-во пользователей: <input name="users" size="20" type="text">
</textarea>
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться к списку ОС</a>
</body>
</html>
