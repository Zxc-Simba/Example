<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>>Document</title>
</head>
<body>
<form action="example3.php" name="myform" method="post">
    <label>Введите ваши данные: </label><br>
    <p><input  type="text" name="firstname" placeholder="Имя"></p>
    <p><input type="text" name="lastname" placeholder="Фамилия"></p>
    <p><input type="text" name="age" placeholder="Возраст"></p>
    <input type="submit" name="done" value="готово">
</form>
<?php
if(isset($_POST["done"])) {
    if ($_POST["firstname"] == "")
        echo "Введите имя! <br>";
    If ($_POST["lastname"] == "")
        echo "Введите фамилию! <br>";
    If ($_POST["age"] == "")
        echo "Введите возраст! <br>";
    If ($_POST["age"]<18 and $_POST["age"]!=="") {
        echo "Несовершеннолетним доступ заблокирован! <br>";}
    If (isset($_POST["firstname"])) {
        if (isset($_POST["lastname"])) {
            if (isset($_POST["age"]) and $_POST["age"]>18 and $_POST["firstname"]!=="" and $_POST["lastname"]!==""){
    echo "Данные успешно отправлены:";
            }
        }
    }
}
?>
</body>
</html>
