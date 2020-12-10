<HTML>
<HEAD> <TITLE> Задача 3 Габриелян Е.В.</TITLE> </HEAD>
<head>
    <meta charset="utf-8" />
</head>
<BODY>
<FORM method="POST" action="<?php print $PHP_SELF ?>">
 <P> Введите число N: <INPUT type="text" name="n" size="15">
 <P> Операции для вывода чисел: <BR>
 <SELECT NAME="z" SIZE="1">
 <OPTION VALUE="1" SELECTED> четные
 <OPTION VALUE="2"> нечетные
 <OPTION VALUE="3"> простые
 <OPTION VALUE="4"> составные
 </SELECT>
 <P> <INPUT type="submit" value="Отправить">
</FORM>
<?
switch ($_POST["z"]) {
 case 1:
for($i = 1; $i <= $_POST['n']; $i++) {
        if($i % 2 == 0) {
            echo $i . " ";
        }
    }
 break;
 case 2:
for($i = 1; $i <= $_POST['n']; $i++) {
        if($i % 2 != 0) {
            echo $i . " ";
        }
    }
 break;
 case 3:
for($i=1;$i<=$_POST['n'];$i++)
    {
    if ($i<2)
    continue;
    else
    {
    $check=true;
    for($j=2;$j<$i;$j++)
        {
        if ($i%$j===0) 
        $check=false;
        }
        if ($check===true)
        echo $i." ";
        }
    }
 break;
 case 4:
for($i=1;$i<=$_POST['n'];$i++)
    {
    if ($i<2)
    continue;
    else
    {
    $check=true;
    for($j=2;$j<$i;$j++)
        {
        if ($i%$j===0) 
        $check=false;
        }
        if ($check===false)
        echo $i." ";
        }
    }
 break;
}
echo ("<BR> <A href='index.php'> Вернуться назад </A>");
?>
</BODY> </HTML>