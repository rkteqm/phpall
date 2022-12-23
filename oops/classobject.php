<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class/objects</title>
</head>
<body>
    
</body>
</html>
<?php

// class and its objects**********************
class Car
{
    public $company;
    public $model;
    public $color;
    public $price;

    function variant($a, $b, $c, $d)
    {
        $this->company = $a;
        $this->model = $b;
        $this->color = $c;
        $this->price = $d;
    }

    function getCompany()
    {
        return $this->company;
    }

    function getModel()
    {
        return $this->model;
    }

    function getColor()
    {
        return $this->color;
    }

    function getPrice()
    {
        return $this->price;
    }
}

// bmw is a new object of car
$bmw = new Car($a, $b, $c, $d);
$bmw->variant("BMW", "S", "Red", 7200000);
echo "Company : " . $bmw->getCompany() . "<br>";
echo "Model : " . $bmw->getModel() . "<br>";
echo "Color : " . $bmw->getColor() . "<br>";
echo "Price : " . $bmw->getPrice() . "<br><br>";

// mahindra is a new object of car
$mahindra = new Car($a, $b, $c, $d);
$mahindra->variant("MAHINDRA", 'Thar', 'Black', 2000000);
echo "Company : " . $mahindra->getCompany() . "<br>";
echo "Model : " . $mahindra->getModel() . "<br>";
echo "Color : " . $mahindra->getColor() . "<br>";
echo "Price : " . $mahindra->getPrice() . "<br><br>";

// tata is a new object of car
$tata = new Car($a, $b, $c, $d);
$tata->variant("TATA", 'nano', 'Red', 150000);
echo "Company : " . $tata->getCompany() . "<br>";
echo "Model : " . $tata->getModel() . "<br>";
echo "Color : " . $tata->getColor() . "<br>";
echo "Price : " . $tata->getPrice() . "<br><br>";