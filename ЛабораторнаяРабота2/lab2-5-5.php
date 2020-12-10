<html>
<title>Габриелян Елена</title>
<?php
echo 'Вариант 5';
echo "<br />";
$a=rand(-10,10);
$b=rand(-10,10);
$z=f($a,pow($b,2)-$a)+f($a,$b);
function f($u,$t){
if ($u>=0 && $t>=0)
return $u - 2*$t;
elseif ($u<0 && $t>=0)
return $u+$t;
elseif ($u>=0 && $t<0)
return pow($u,2)-2*$t;
elseif ($u<0 && $t<0)
return $u*$t+3*$t;
}
echo "Ответ = ". $z;
?>
</html>