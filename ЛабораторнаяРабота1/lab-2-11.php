<?php
$a=rand();
print ( $a.'<br>'); 
   for ($i=1; $i<=$a; $i++){  
if ($a % $i==0)      
  echo "$i <br>";
}
?>