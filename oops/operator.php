<?php

// class and its objects**********************
class Calculation
{
    private $a;
    private $b;

    function userinput($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    function getA()
    {
        return $this->a;
    }

    function getB()
    {
        return $this->b;
    }

    function getSum()
    {
        return $this->a + $this->b;
    }

    function getSub()
    {
        return $this->a - $this->b;
    }

    function getMul()
    {
        return $this->a * $this->b;
    }

    function getDiv()
    {
        return $this->a / $this->b;
    }
}

$calc = new Calculation();
$calc->userinput(50,10);
echo 'a = '. $calc->getA().'<br>';
echo 'b = '. $calc->getB().'<br>';
echo 'Sum of a and b : '.$calc->getSum().'<br>';
echo 'Difference of a and b : '.$calc->getSub().'<br>';
echo 'Multiplication of a and b : '.$calc->getMul().'<br>';
echo 'division of a and b : '.$calc->getDiv().'<br>';
