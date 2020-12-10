<html>
<title>Габриелян Елена</title>
<?php
$S=0;
$C=0;
$A=0;
$B=0;
$Q=rand(0,10);
echo 'Вариант 5';
echo "<br />";
for($i=0;$i<10;$i++){$mass[$i]=rand(0,10);}
echo 'Массив =';
for($i=0;$i<10;$i++){echo $mass[$i], ' ' ;}
echo "<br />";
echo 'Среднее ариф. =';
for($i=0;$i<$Q;$i++){
$S=$S+$mass[$i];
$C++;}
echo $S/$C;
echo "<br />";
for($i=0;$i<10;$i++){
if ($mass[$i]>$S/$C){
$A++;}
else $B++;
}
echo 'Больше ср.ареф. =';
echo $A."<br />";
echo 'Меньше ср.ареф. =';
print $B;
?>
</html>