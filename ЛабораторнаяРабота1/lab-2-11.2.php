<?php

 $n = rand(0,500);

{

    for ($i = 1; $i * $i <= $n; $i++)

        for ( $j = 1; $j * $j <= $n; $j++)

            if ($i * $i + $j * $j ==$n) 

            {

                echo $i , "^2 + ",

                    $j , "^2 =" ,
                    ($i*$i+$j*$j), " Можно представить";

                return true;
            }
    echo ($n . " \n".  "невозможно представить");

    return false;
}
?>