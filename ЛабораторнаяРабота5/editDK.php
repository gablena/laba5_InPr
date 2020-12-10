<html> 
<?php 
$mysqli = new mysqli("localhost", "f0474078_OS", "osos", "f0474078_OS");
    if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к БД";
    }
$id_DK1 = $_GET['id_DK'];
$result = $mysqli->query("SELECT id_DK, dataP, dataO, OS1.id_OS as id_OS, OS1.name as name,
                                DS.id_DS as id_DS, DS.name_DS as name_DS,
                                cost, keyOS
FROM DK
LEFT JOIN OS1 ON DK.id_OS=OS1.id_OS
LEFT JOIN DS ON DK.id_DS=DS.id_DS
WHERE DK.id_DK='$id_DK1'");
    if ($result){
        while ($st = $result->fetch_array()) {
            $id_DK = $st['id_DK'];
            $id_OS = $st['id_OS'];
            $name = $st['name'];
            $id_DS = $st['id_DS'];
            $name_DS = $st['name_DS'];
            $dataP = $st['dataP'];
            $dataO = $st['dataO'];
            $cost = $st['cost'];
            $keyOS = $st['keyOS'];
        }
    }
print "<form action='save_editDK.php' method='get'>";
 
                //id os
                $result = $mysqli->query("SELECT id_OS, name FROM OS1 WHERE id_OS <> '$id_OS' ");
                echo "<br>ОС: <select name='id_OS'>";
                echo "<option selected value=' $id_OS'>$name</option>";
                if ($result){
                while ($row = $result->fetch_array()){
                $id_OS = $row['id_OS'];
                $name = $row['name'];
                echo "<option value='$id_OS'>$name</option>";
                }
                }
                echo "</select>";
                
                //id DS
                $result = $mysqli->query("SELECT id_DS, name_DS FROM DS WHERE id_DS <> '$id_DS'");
                echo "<br>Магазин: <select name='id_DS'>";
                 echo "<option selected value='$id_DS'>$name_DS</option>";
                if ($result){
                while ($row = $result->fetch_array()){
                $id_DS = $row['id_DS'];
                $name_DS = $row['name_DS'];
                echo "<option value='$id_DS'>$name_DS</option>";
                }
                }
                echo "</select>";
print "<br>Дата приобретения: <input name='dataP' size='50' type='date' placeholder='dd-mm-yyyy' value='$dataP'>";
print "<br>Дата окончания действия: <input name='dataO' size='50' type='date' placeholder='dd-mm-yyyy' value='$dataO'>";
print "<br>Сумма: <input name='cost' size='11' type='int' value='$cost'>";
print "<br>Ключ: <input type='varchar' name='keyOS' size='40' value='$keyOS'>";
print "<input type='hidden' name='id_DK' size='11' value='$id_DK1'>";
print "<input type='submit' name='save' value='Сохранить'>";
print "</form>";
print "<p><a href='index2.php'> Вернуться к списку цифровых ключей </a>";
?> 
</html>
