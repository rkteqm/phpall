<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>interface</title>
</head>
<body>
    
</body>
</html>
<?php


// ********************************Interface****************************

interface Base
{
    function __construct();

    // This is interface function
    function printdata();
}
class Derived implements base
{
    function __construct()
    {
        echo "\n Derived class constructor";
    }
    function printdata()
    {
        echo "\n <br>Derived class printdata function";
    }
}
$b1 = new Derived;
$b1->printdata();
