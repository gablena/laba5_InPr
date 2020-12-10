<HTML>
<HEAD> <TITLE> Задание 3.6 В13 Габриелян </TITLE>
</HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
<h2>Вариант 13 задание 6</h2>
Пользователем задается произвольный текст и два символа. <br>Подсчитать, сколько раз в
тексте встречается каждый из символов.<br>
 Введите текст: <br>
       <INPUT type="text" name="a" size="50">
<br>
 Введите символ первый: <br>
       <INPUT type="text" name="b" size="25">
<br>
 Введите символ второй: <br>
       <INPUT type="text" name="c" size="25">
<br>
 <P> <INPUT type="submit" name="obr" value="Посчитать">
</FORM>
<?php
$txt = mb_strtolower ($_POST["a"]);
$t1 = mb_strtolower ($_POST["b"]);
$t2 = mb_strtolower ($_POST["c"]);
$s=substr_count($txt, $t1);
$s1=substr_count($txt, $t2);
echo $s;
echo ' ';
echo $s1;
echo ("<BR> <A href='index.php'> Вернуться назад </A>");
?>
</BODY> </HTML>
