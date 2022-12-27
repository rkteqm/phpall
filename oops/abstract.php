<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abstract</title>
</head>
<body>
    
</body>
</html>
<?php

// *********************************Abstract class*******************************
abstract class Base
{
    function __construct()
    {
        echo "this is abstract class constructor <br>";
    }
    function __destruct()
    {
        echo "this is abstract class destructor <br>";
    }

    // This is abstract function
    abstract function printdata();
}
class Derived extends base
{
    // function __construct()
    // {
    //     echo "\n Derived class constructor<br>";
    // }
    function printdata()
    {
        echo "\n <br>Derived class printdata function<br>";
    }
}
$b1 = new Derived;
$b1->printdata();
