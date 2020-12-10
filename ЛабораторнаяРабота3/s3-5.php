<HTML>
<HEAD> <TITLE> Анкета на характер </TITLE>
</HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
<h2>Анкета "Ваш характер"</h2>
Введите Ваше имя <br>
<INPUT type="text" name="a" size="25"> <br> <br>
Ответьте да или нет на следующи вопросы:<br><br>
1.Считаете ли Вы, что у многих ваших знакомых хороший характер?  <br> 
<input type ="radio" name="v1" value="1"/>Да
<input type ="radio" name="v1" value="2"/>Нет<br>
2.Раздражают ли Вас мелкие повседневные обязанности? <br> 
<input type ="radio" name="v2" value="1"/>Да
<input type ="radio" name="v2" value="2"/>Нет<br>
3.Верите ли Вы, что ваши друзья преданы Вам? <br> 
<input type ="radio" name="v3" value="1"/>Да
<input type ="radio" name="v3" value="2"/>Нет<br>
4.Неприятно ли Вам, когда незнакомый человек делает Вам замечание?<br> 
<input type ="radio" name="v4" value="1"/>Да
<input type ="radio" name="v4" value="2"/>Нет<br>
5.Способны ли Вы ударить собаку или кошку? <br> 
<input type ="radio" name="v5" value="1"/>Да
<input type ="radio" name="v5" value="2"/>Нет<br>
6.Часто ли Вы принимаете лекарства? <br> 
<input type ="radio" name="v6" value="1"/>Да
<input type ="radio" name="v6" value="2"/>Нет<br> 
7.Часто ли Вы меняете магазин, в который ходите за продуктами? <br> 
<input type ="radio" name="v7" value="1"/>Да
<input type ="radio" name="v7" value="2"/>Нет<br>
8.Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись? <br> 
<input type ="radio" name="v8" value="1"/>Да
<input type ="radio" name="v8" value="2"/>Нет<br>
9.Тяготят ли Вас общественные обязанности? <br> 
<input type ="radio" name="v9" value="1"/>Да
<input type ="radio" name="v9" value="2"/>Нет<br>
10.Способны ли Вы ждать более 5 минут, не проявляя беспокойства? <br> 
<input type ="radio" name="v10" value="1"/>Да
<input type ="radio" name="v10" value="2"/>Нет<br>
11. Часто ли Вам приходят в голову мысли о Вашей невезучести? <br> 
<input type ="radio" name="v11" value="1"/>Да
<input type ="radio" name="v11" value="2"/>Нет<br>
12. Сохранилась ли у Вас фигура по сравнению с прошлым?<br> 
<input type ="radio" name="v12" value="1"/>Да
<input type ="radio" name="v12" value="2"/>Нет<br>
13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей? <br> 
<input type ="radio" name="v13" value="1"/>Да
<input type ="radio" name="v13" value="2"/>Нет<br> 
14. Нравится ли Вам семейная жизнь?<br> 
<input type ="radio" name="v14" value="1"/>Да
<input type ="radio" name="v14" value="2"/>Нет<br>
15. Злопамятны ли Вы?<br> 
<input type ="radio" name="v15" value="1"/>Да
<input type ="radio" name="v15" value="2"/>Нет<br>
16. Находите ли Вы, что стоит погода, типичная для данного времени года?<br> 
<input type ="radio" name="v16" value="1"/>Да
<input type ="radio" name="v16" value="2"/>Нет<br>
17. Случается ли Вам с утра быть в плохом настроении? <br> 
<input type ="radio" name="v17" value="1"/>Да
<input type ="radio" name="v17" value="2"/>Нет<br>
18.Раздражает ли Вас современная живопись?<br> 
<input type ="radio" name="v18" value="1"/>Да
<input type ="radio" name="v18" value="2"/>Нет<br>
19.Надоедает ли Вам присутствие чужих детей в доме более одного часа?<br> 
<input type ="radio" name="v19" value="1"/>Да
<input type ="radio" name="v19" value="2"/>Нет<br>
20.Надоедает ли Вам делать лабораторные по PHP?<br> 
<input type ="radio" name="v20" value="1"/>Да
<input type ="radio" name="v20" value="2"/>Нет<br>
<input type="submit" name="otpravit" value="Отправить">
<input type="reset" name="ochistit" value="Очистить">
</FORM>
<?php
if (isset($_POST["v1"]) && isset($_POST["v2"]) && isset($_POST["v3"]) && isset($_POST["v4"]) && isset($_POST["v5"]) &&
isset($_POST["v6"]) && isset($_POST["v7"]) && isset($_POST["v8"]) && isset($_POST["v9"]) && isset($_POST["v10"]) &&
isset($_POST["v11"]) && isset($_POST["v12"]) && isset($_POST["v13"]) && isset($_POST["v14"]) && isset($_POST["v15"]) &&
isset($_POST["v16"]) && isset($_POST["v17"]) && isset($_POST["v18"]) && isset($_POST["v19"]) && isset($_POST["v20"])) {
$name = htmlentities($_POST['a']);
    $counterPoints = 0;
                          
if($_POST['v3'] == '1'){
   $counterPoints++;
}
    
if($_POST['v9'] == '1'){
   $counterPoints++;
}   
 
if($_POST['v10'] == '1'){
   $counterPoints++;
}
 
if($_POST['v13'] == '1'){
   $counterPoints++;
}
 
if($_POST['v14'] == '1'){
   $counterPoints++;
}
 
if($_POST['v19'] == '1'){
   $counterPoints++;
}   
 
if($_POST['v1'] == '2'){
   $counterPoints++;
}
 
if($_POST['v2'] == '2'){
   $counterPoints++;
}
 
if($_POST['v4'] == '2'){
   $counterPoints++;
}   
    
if($_POST['v5'] == '2'){
   $counterPoints++;
}   
 
if($_POST['v6'] == '2'){
   $counterPoints++;
}   
    
if($_POST['v7'] == '2'){
   $counterPoints++;
}   
    
if($_POST['v8'] == '2'){
   $counterPoints++;
}
    
if($_POST['v11'] == '2'){
   $counterPoints++;
}   
    
if($_POST['v12'] == '2'){
   $counterPoints++;
}   
    
if($_POST['v15'] == '2'){
   $counterPoints++;
}   
    
if($_POST['v16'] == '2'){
   $counterPoints++;
}   
    
if($_POST['v17'] == '2'){
   $counterPoints++;
}   
    
if($_POST['v18'] == '2'){
   $counterPoints++;
}  

if($_POST['v19'] == '1'){
   $counterPoints++;
}  

if($_POST['v20'] == '2'){
   $counterPoints++;
}
    
if($counterPoints >= 15){
   $result = ' у Вас покладистый характер';
} elseif($counterPoints < 15 && $counterPoints > 8){
   $result = ' Вы не лишены недостатков, но с вами можно ладить';
} elseif($counterPoints < 8){
   $result = ' Вашим друзьям можно посочувствовать';
}
}
echo $name. ' Ваш результат:'; 
echo $result. " ";
echo ("<BR> <A href='index.php'> Вернуться назад </A>");
?>
</BODY> </HTML>

