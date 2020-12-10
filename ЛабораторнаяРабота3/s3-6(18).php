<HTML>
<HEAD> <TITLE> Задание 3.6 В18 Габриелян </TITLE>
</HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
<h2>Вариант 18 задание 6</h2>
Определите, каких букв (строчных или прописных) в нем больше, и 
преобразуйте следующим образом: если больше прописных букв, чем строчных, то все<br>
буквы преобразуются в прописные; если больше строчных, то все буквы
преобразуются в строчные; если поровну и тех и других — текст остается без
изменения<br>
 Введите текст: <br>
       <INPUT type="text" name="a" size="50">
<br>
 <P> <INPUT type="submit" name="obr" value="Заменить">
</FORM>
<?php
$str5 = ($_POST["a"]);
$upper = 0;
$lower = 0;
foreach(preg_split('~~u', $str5, -1, PREG_SPLIT_NO_EMPTY) as $item) {
    if (preg_match('~[A-ZА-ЯЁ]~u', $item)) ++$upper;
    else if (preg_match('~[a-zа-яё]~u', $item)) ++$lower;
}

if ($upper != $lower){
  $case = $upper > $lower ? MB_CASE_UPPER : MB_CASE_LOWER;
  $str5 = mb_convert_case($str5, $case);
  echo $str5;}
else if ($upper = $lower) {echo $_POST["a"];}
echo ("<BR> <A href='index.php'> Вернуться назад </A>");
?>
</BODY> </HTML>