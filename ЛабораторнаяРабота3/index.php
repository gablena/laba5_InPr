<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Габриелян Елена</title>
</head>
<body>
<table
border="2"
align="center"
rules="rows"
style="width:100%;">
<tr>
<td>
<!--В ячейке строки создаём ещё одну таблицу для шапки сайта.
Оформление:
border="1" - двойная рамка толщиной в 1px
background="images/168.png" - картинка в шапке сайта, если требуется.
Адрес картинки вы должны вставить свой.
bgcolor="#7FFFD4" - фоновый цвет в шапке, если нет картинки.
cellpadding="10" - отступ содержимого от рамки не менее 10px.
style="width:100%; border-radius:5px;" - добавляем "резиновость"
и закругляем уголки рамки-->
<table
border="5"
background="images/168.png"
bgcolor="#BDB76B"
cellpadding="10"
style="width:100%; border-radius:5px;">
<tr>
<th>
<h1>Лабораторные работы</h1>
<h3>Габриелян Е.В. ПИ-318</h3>
</th>
</tr>
</table>
<table
border="1"
bgcolor="#F0E68C"
cellpadding="10"
style="width:100%; border-radius:5px;">
<tr>
<td
rowspan="2"
style="width:80%">
<h2>Общая информация</h2>
<p style="text-indent:20px">
Здравствуйте!
Я решила немного поиграться с дизайном сайта.
Этот сайт первый, который я разрабатывю самостоятельно,
используя источники интернета.</p>

<p style="text-indent:20px">Мне стало интерресно разобраться в структуре создания 
дизайна сайта. Возможно, я смогу вставить картинку на фон или видео в этой таблице.</p>
</td>
<td bgcolor="#EEE8AA">
<h3>Ссылки на задания</h3>
<p>
<ul>
        <li><a href="http://f0474078.xsph.ru/ЛабораторнаяРабота3/s3-1.html">1 упражнение</a></li>
        <li><a href="http://f0474078.xsph.ru/ЛабораторнаяРабота3/s3-2.php">2 упражнение</a></li>
        <li><a href="http://f0474078.xsph.ru/ЛабораторнаяРабота3/s3-3.php">3 упражнение</a></li>
        <li><a href="http://f0474078.xsph.ru/ЛабораторнаяРабота3/s3-4.php">4 упражнение</a></li>
        <li><a href="http://f0474078.xsph.ru/ЛабораторнаяРабота3/s3-5.php">5 упражнение</a></li>
        <li><a href="http://f0474078.xsph.ru/ЛабораторнаяРабота3/s3-6(8).php">6 упражнение В8</a></li>
        <li><a href="http://f0474078.xsph.ru/ЛабораторнаяРабота3/s3-6(13).php">6 упражнение В13</a></li>
        <li><a href="http://f0474078.xsph.ru/ЛабораторнаяРабота3/s3-6(18).php">6 упражнение В18</a></li>
</ul>
</p>
</td>
</tr>
<tr>
<td
bgcolor="#F5DEB3"
align="center">
<h3>Общая информация</h3>
<p>Моя почта: lena.gabrielyan29@mail.ru</p>
</td>
</tr>
</table>
<table
border="1"
bgcolor="#BDB76B"
height="100"
cellpadding="10"
style="width:100%; border-radius:5px;">
<tr>
<th>
<h3>Дата и время:</h3>
<p> 
<p>
<?php
 $d=date("d.m.Y H:i");
 echo($d);
?>
<ul>

		<h2 align="right"><a href="http://f0474078.xsph.ru/index.php"> Назад &#8617;</a></h2>

</ul>
</th>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>



