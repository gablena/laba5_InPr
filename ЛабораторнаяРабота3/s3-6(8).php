<HTML>
<HEAD> <TITLE> Задание 3.6 В8 Габриелян </TITLE>
</HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
Вывести заданный текст, удалив из него повторные вхождения каждого символа. <br>
 Введите предложение: <br>
       <INPUT type="text" name="a" size="50">
 <P> <INPUT type="submit" name="obr" value="Удалить повторяющие символы">
</FORM>

<?php
$a = ($_POST["a"]);
$a = preg_split("//u", $a); 
$b = array();
foreach ($a as $v)
{
    if (in_array($v, $b))
        continue;
    $b[] = $v;
}
$a = implode($b);
echo $a;
echo ("<BR> <A href='index.php'> Вернуться назад </A>");
?>
</BODY> </HTML>