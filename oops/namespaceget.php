<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>namespace</title>
</head>
<body>
    
</body>
</html>
<?php
require_once 'namespace.php';
class Test{
    function message(){
        echo "hello, i am message function at <b>SAME</b> page of Test class<br>";
    }
}

$obj2 = new Test();
$obj2->message();

$obj = new rahul\Test();
$obj->message();
