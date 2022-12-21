<?php

// class and its objects**********************
class Car
{
    private $company;
    private $model;
    private $color;
    private $price;

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
$bmw = new Car();
$bmw->variant("BMW", "S", "Red", 7200000);
echo "Company : " . $bmw->getCompany() . "<br>";
echo "Model : " . $bmw->getModel() . "<br>";
echo "Color : " . $bmw->getColor() . "<br>";
echo "Price : " . $bmw->getPrice() . "<br><br>";

// mahindra is a new object of car
$mahindra = new Car();
$mahindra->variant("MAHINDRA", 'Thar', 'Black', 2000000);
echo "Company : " . $mahindra->getCompany() . "<br>";
echo "Model : " . $mahindra->getModel() . "<br>";
echo "Color : " . $mahindra->getColor() . "<br>";
echo "Price : " . $mahindra->getPrice() . "<br><br>";

// tata is a new object of car
$tata = new Car();
$tata->variant("TATA", 'nano', 'Red', 150000);
echo "Company : " . $tata->getCompany() . "<br>";
echo "Model : " . $tata->getModel() . "<br>";
echo "Color : " . $tata->getColor() . "<br>";
echo "Price : " . $tata->getPrice() . "<br><br>";