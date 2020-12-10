<?
if ($_POST["a"]>$_POST["b"]) {
 echo ("большее из двух чисел а = $a");
 print_r($_POST["a"]);
} else {
 $_POST["a"]<$_POST["b"];
 echo ("большее из двух чисел b =");
 print_r($_POST["b"]);
 }
echo ("<BR> <A href='index.php'> Вернуться назад </A>");
?> 