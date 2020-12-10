<html>
<title>Габриелян Елена</title>
<?php
echo 'Вариант 5';
echo "<br />";
echo ('Матрица<br>');
for($i=1;$i<=5;$i++){
for($j=1;$j<=5;$j++){
$mas[$i][$j]=rand(0,5);
echo (' '.$mas[$i][$j]);
}
echo ('<br>');
}
echo ('Сумма квадратов:<br>');
for($i=1;$i<=5;$i++){
$SK=0;
$KS=0;
for($j=1;$j<=5;$j++){
$SK+=$mas[$j][$i]*$mas[$j][$i];
$KS+=$mas[$j][$i];
}
echo ($SK.' ');
}
echo ('<br>');
echo ('Квадрат суммы:<br>');
for($i=1;$i<=5;$i++){
$SK=0;
$KS=0;
for($j=1;$j<=5;$j++){
$KS+=$mas[$j][$i];
}
echo (pow($KS,2).' ');
}
echo ('<br>');
echo ('Разность квадратов по столбцам:<br>');
for($i=1;$i<=5;$i++){
$SK=0;
$KS=0;
$RES=0;
for($j=1;$j<=5;$j++){
$KS+=$mas[$j][$i];
$SK+=$mas[$j][$i]*$mas[$j][$i];
$RES=pow($KS,2)-$SK;
}
echo ($RES.' ');
}
?>
</html>