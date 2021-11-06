<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

//Задание 1
$arr = ["арбуз", "артем", "андрей", "дыня", "аргентина", "футболл", "марина", "ларец", "дом"];
$A = [];
$B = [];
$subString = "ар";

foreach ($arr as $value) {
    $find = (strpos($value, $subString));
    if ($find === false)
        array_push($B, $value);
    else array_push($A, $value);
}

echo "Задание №1 </br>";
var_dump($A);
echo "</br>";
var_dump($B);
echo "</br>";




//Задание 2
$arrNumb = [1, 5, 2, 7, 9, 3, 14];
for ($i=0; $i<count($arrNumb)-1; $i++) {
    for ($k=1; $k<count($arrNumb)-$i-1; $k++) {
        $elem1 = $arrNumb[$k];
        $elem2 = $arrNumb[$k+1];
        if ($elem1>$elem2) {
            $arrNumb[$k] = $elem2;
            $arrNumb[$k+1] = $elem1;
        }
    }
}
echo "Задание №2 </br>";
var_dump($arrNumb);
echo "</br>";





//Задание 3
$userName="arnoldschwarzeniggger";
$lenName=strlen($userName);
echo "Задание 3 </br>";
if ($lenName%2===0) {
    echo "Girl!";
}
else echo "Boy!"
?>
</body>
</html>
