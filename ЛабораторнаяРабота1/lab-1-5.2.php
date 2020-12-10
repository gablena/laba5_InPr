<?php
$a = rand(-20,20);
$d = rand(-20,20); 
$c = rand(-20,20);
echo '<br> a ='. $a;
echo '<br> d ='. $d;
echo '<br> c ='. $c;
echo '<br>';
print ('(4*c+d-1)/(c-(a/2))' .  '=' . ((4*$c+$d-1)/($c-($a/2))) . '<br>');
?>