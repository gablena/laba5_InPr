<html>
<title>Габриелян Елена</title>
<?php
$S=0;
echo 'Вариант 11';
echo "<br />";
for($i=1;$i<11;$i++){$mass[$i]=rand(0,10);}
echo 'Массив =';
for($i=1;$i<11;$i++){echo $mass[$i], ' ' ;}
echo "<br />";
echo 'Сумма чисел =';
for($i=1;$i<11;$i++){
if (abs($mass[$i])<pow($i,2)){
$S=$S+$mass[$i];}
}
echo $S;
?>
</html>