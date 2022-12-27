<?php
class Books{
  public function name(){
  echo "Hindi book <br>";
  }
  public function price(){
  echo "900 Rs/- <br>";
  }
}
//To create php object we have to use a  new operator. Here php object is the object of the Books Class. 
$obj = new Books();
$obj->name();
$obj->price();



class Mobile {
    /* Member variables */
    var $price;
    var $title;
    /* Member functions */
    function setPrice($par){
       $this->price = $par;
    }
    function getPrice(){
       echo $this->price ."<br/>";
    }
    function setName($par){
       $this->title = $par;
    }
    function getName(){
       echo $this->title ." <br/>";
    }
 }
$Samsung = new Mobile();
$Xiaomi = new Mobile();
$Iphone = new Mobile();
$Samsung->setName( "SamsungS8" );
$Iphone->setName( "Iphone7s" );
$Xiaomi->setName( "MI4" );
$Samsung->setPrice( 90000 );
$Iphone->setPrice( 65000 );
$Xiaomi->setPrice( 15000 );
// Now you call another member functions to get the values set by in above example
$Samsung->getName();
$Iphone->getName();
$Xiaomi->getName();
$Samsung->getPrice();
$Iphone->getPrice();
$Xiaomi->getPrice();

