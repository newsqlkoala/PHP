<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>oh oh php</title>
</head>
<body>
<h1>hello world php</h1>
<?php


//    echo phpinfo();
    echo "this is PHP echo<br>";
//    for ($i = 16; $i<=22 ; $i +=2)
//    { echo "<p style='font-size:".$i."pt'>koal2a</p>";}
class Animal {
    private $animalType;
    protected $position;
    protected function move($x,$y){}
}

class Cat extends Animal
{
    private $name;
   //private $position;
    function __construct($n)
    {
        $this->name = $n;
        $this->position = ["x"=>0, "y"=>0];
    }
    function move($dx, $dy) {
        $this->position["x"] += $dx;
        $this->position["y"] += $dy;
        $outx =  $this->position["x"] ;
        $outy =  $this->position["y"] ;
        echo "$this->name :  $outx, $outy<br>";
    }
}

$cat = new Cat("kitty");
$cat->move(3,4);
$cat->move(3,4);


?>




</body>
</html>