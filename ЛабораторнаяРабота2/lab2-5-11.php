<html>
<title>Габриелян Елена</title>
<?php
echo 'Вариант 11';
echo "<br />";
$a=rand(-10,10);
$b=rand(-10,10);
$z=sin(f($a,$b))+sqrt(abs(f($a,$b)));
function f($u,$t){
if ($u>2)
return pow(pow($u,2)+$t,1/3)*sin($t)*sin($t);
elseif ($u<=2)
return log10(abs(($u*$u)/($u+$t)));
}
echo "Ответ = ". $z;
?>
</html>