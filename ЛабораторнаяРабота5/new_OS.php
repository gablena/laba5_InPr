<html>
<head> <title> Добавление новой ОС</title> </head>
<body>
<H2>Добавить ОС:</H2>
<form action="save_newOS.php" method="get">
Название: <input name="name" size="40" type="varchar">
<br>Тип оборудование: <input name="type" size="20" type="varchar">
<br>Разрядность: <input name="digCap" size="3" type="varchar">
<br>Разработчик: <input name="programmer" size="40" type="varchar">
<br>Кол-во пользователей: <input name="users" size="20" type="varchar">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться к списку ОС</a>
</body>
</html>

