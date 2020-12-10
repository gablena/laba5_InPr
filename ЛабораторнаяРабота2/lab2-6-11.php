<html>
<title>Габриелян Елена</title>
<?php
echo 'Вариант 11';
echo "<br />";
echo ('Матрица<br>');
for($i=1;$i<=5;$i++){
for($j=1;$j<=5;$j++){
$mas[$i][$j]=rand(0,5);
echo (' '.$mas[$i][$j]);
}
echo ('<br>');
}
echo ('Новая матрица<br>');
for($i=1;$i<=5;$i++){
for($j=1;$j<=5;$j++){
$mas[$i][$j]=$mas[$i][$j-1]+$mas[$i][$j+1];
echo (' '.$mas[$i][$j]);
}
echo ('<br>');
}
?>
</html>