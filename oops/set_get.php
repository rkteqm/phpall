<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>set/get</title>
</head>
<body>
    
</body>
</html>
<?php
class Car{
    function __set($name, $value)
    {
        $this->name = $value;
    }
    function __get($name)
    {
        return $this->name;
    }
}

$bmw = new Car;
$bmw->model = 'S';
echo "Model : ".$bmw->model."<br>";

$mahindra = new Car;
$mahindra->model = 'Black';
echo "Color : ".$mahindra->model."<br>";


// class MyClass
// {

//     private $ID;

//     private function setID($ID)
//     {
//         $this->ID = $ID;
//     }

//     private function getID()
//     {
//         return $this->ID;
//     }


//     public function __set($name, $value)
//     {
//         switch ($name) { //this is kind of silly example, bt shows the idea
//             case 'ID':
//                 return $this->setID($value);
//         }
//     }

//     public function __get($name)
//     {
//         switch ($name) {
//             case 'ID':
//                 return $this->getID();
//         }
//     }
// }


// // $object = new MyClass();
// // $object->ID = 'foo';

// $class = new MyClass();
// $class->PropertyName = "test";
// echo $class->PropertyName;
