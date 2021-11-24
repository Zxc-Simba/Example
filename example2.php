<!doctype html>
<html lang="en">
<head>
    < metacharset="UTF-8">
    <title>>Document</title>
</head>
<body>
<?php
class Animal {

}

class Fish extends Animal {

}


class Mammals extends Animal {

}

class Bird extends Animal {

}


class Manager {
    public function Create($teils, $wings, $animal_kingdom, $legs){
        $this ->legs = $legs;
        $this ->teils = $teils;
        $this ->wings = $wings;
        $this ->animal_kingdom = $animal_kingdom;
    }
}

echo "<br>";



class Cage {
    public $CageArray = array();
}

class birdCage extends Cage {
   public function showArr(){
       var_dump($this ->CageArray);
       echo "<br>";
   }
   public function pullCage($x){
       $this->x=$x;
       return array_push($this->CageArray, $x);
   }
   public function deleteCage($x){
       $this->x=$x;
       unset($this->CageArray, $x);
   }
}



class fishCage extends Cage {
    public function showArr(){
        var_dump($this ->CageArray);
        echo "<br>";}

    public function pullCage($x){
        $this->x=$x;
        return array_push($this->CageArray, $x);
    }
    public function deleteCage($x){
        $this->x=$x;
        unset($this->CageArray, $x);
    }
}

class mammalCage extends Cage {
    public function showArr(){
        var_dump($this ->CageArray);
        echo "<br>";}

    public function pullCage($x){
        $this->x=$x;
        return array_push($this->CageArray, $x);
    }
    public function deleteCage($x){
        $this->x=$x;
        unset($this->CageArray, $x);
    }

}
$birdCage = new birdCage();
$fishCage = new fishCage();
$mammalCage = new mammalCage();


$className = "Obj_";
$arr = array();
for ($i=1; $i<11; $i++) {
    $king = array("bird", "fish", "mammals");
    $randKing = array_rand($king, 1);
    $className = "Obj_" . $i;
    if ($randKing==0) {
        $randTails = random_int(0, 1);
        $randWings = random_int(0, 4);
        $randLegs = random_int(0, 2);
        $className = new Manager();
        $className ->Create($randTails, $randWings, 'bird', $randLegs);
        print_r($className);
        array_push($arr, $className);
    }
    elseif ($randKing==1) {
        $randTails = random_int(0, 5);
        $randWings = random_int(0, 2);
        $randLegs = random_int(0, 0);
        $className = new Manager();
        $className ->Create($randTails, $randWings, "fish", $randLegs);
        print_r($className);
        array_push($arr, $className);
    }
    else {
        $randTails = random_int(0, 1);
        $randWings = random_int(0, 0);
        $randLegs = random_int(0, 4);
        $className = new Manager();
        $className ->Create($randTails, $randWings, "mammals", $randLegs);
        print_r($className);
        array_push($arr, $className);
    }
    echo "<br>";
}
var_dump($arr);
echo "<br>";
echo "<br>";


class Keeper {
    public function b($array, $d, $r) {
        foreach ($array as $value) {
            if ($value->animal_kingdom==$r) {
                $d->pullCage($value);
            }
        }
    }
    public function delete($array, $d, $r){
        foreach ($array as $value) {
            if ($value->animal_kingdom==$r) {
                $d->deleteCage($value);
            }
        }
    }
    public function f($array, $d, $r) {
        foreach ($array as $value) {
            if ($value->animal_kingdom==$r) {
                $d->pullCage($value);
            }
        }
    }
    public function m($array, $d, $r) {
        foreach ($array as $value) {
            if ($value->animal_kingdom==$r) {
                $d->pullCage($value);
            }
        }
    }
}
$bird = new Keeper();
$bird->b($arr, $birdCage, 'bird');
echo "Клетка для птиц" . "<br>";
$birdCage->showArr();
echo "<br>";
$fish = new Keeper();
$fish->f($arr, $fishCage, "fish");
echo "Клетка для рыб" . "<br>";
$fishCage->showArr();
echo "<br>";
$mammal = new Keeper();
$mammal->m($arr, $mammalCage, "mammals");
echo "Клетка для млекопитающих" . "<br>";
$mammalCage->showArr();
echo "<br>";
echo "клетки для птиц и рыб из которых удалили объекты с помощью функции delete" . "<br>";
$bird->delete($arr, $birdCage, "bird");
$birdCage->showArr();
$fish->delete($arr, $fishCage, "fish");
$fishCage->showArr();

?>

</body>
</html>