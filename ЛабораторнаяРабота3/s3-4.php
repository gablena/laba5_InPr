<HTML>
<HEAD> <TITLE> Авторизация </TITLE>
</HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 Введите логин: 
       <INPUT type="text" name="a" size="25">
       <INPUT type="hidden" name="h" value="gab_lena">
       <INPUT type="hidden" name="b" value="iv_iv">
       <INPUT type="hidden" name="n" value="klAd_21">
       <INPUT type="hidden" name="m" value="St.Pr">
 <P> <INPUT type="submit" name="obr" value="Продолжить">
</FORM>
<?
if (isset($_POST["obr"])) {
if ($_POST["a"]==$_POST["h"]) { echo ("Здравствуйте, Габриелян Елена Вагеевна!");
 } else {
 if ($_POST["a"]==$_POST["b"]) { echo ("Здравствуйте, Иванов Иван Иванович!");
 } 
else {
 if ($_POST["a"]==$_POST["n"]) { echo ("Здравствуйте, Незвестная Личность!");
 }
 else {
if ($_POST["a"]==$_POST["m"]) { echo ("Здравствуйте, Студент обучающийся на инет-программирование!");
 }
 else 
   { echo ("Вы не зарегистрированный пользователь!"); }
} } }
}
echo ("<BR> <A href='index.php'> Вернуться назад </A>");
?>
</BODY> </HTML>