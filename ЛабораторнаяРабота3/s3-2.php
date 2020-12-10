<HTML>
<HEAD> <TITLE> Калькулятор </TITLE> </HEAD>
<head>
    <meta charset="utf-8" />
</head>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
a: <INPUT type="text" name="a" size="3">
b: <INPUT type="text" name="b" size="3">
 <p><label for="font">Выберите действие: </label><select name="font" id="font">
                <option value="summation">Сложить</option>
                <option value="subtraction">Вычесть</option>
                <option value="miltiply">Умножить</option>
                <option value="division">Разделить</option>
            </select>
        </p>
 <P> <INPUT type="submit" name="obr" value="Вперед!">
</FORM>
<?
$s2="Результат: ";
switch ($_POST["font"]) {
 case summation:
 $s1=$_POST["a"]+$_POST["b"];
 break;
 case subtraction:
 $s1=$_POST["a"]-$_POST["b"];
 break;
 case miltiply:
 $s1=$_POST["a"]*$_POST["b"];
 break;
 case division:
 $s1=$_POST["a"]/$_POST["b"];
 break;
}
echo ($s2 . $s1);
echo ("<BR> <A href='index.php'> Вернуться назад </A>");
?>
</BODY> </HTML>