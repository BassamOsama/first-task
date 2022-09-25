<?php
class Animal {
    public $family;
    public $food;

    public function __construct($family,$food){
        $this->food=$food;
        $this->family=$family;
    }
    public function getFamily(){
        return $this->family;
    }
    public function setFamily($family){
        $this->family = $family;
    }
    public function getFood(){
        return  $this->food;
    }
    public function setFood($food){
        $this->food = $food;
    }
}
class Cow extends Animal{
    public $owner;
    public function __construct($family, $food)
    {
        parent::__construct($family, $food);
    }
    public function setOwner($owner){
        $this->owner = $owner;
    }
    public function getOwner(){
        return $this->owner;
    }
}
class Lion extends Animal{
    public function __construct($family, $food)
    {
        parent::__construct($family, $food);
    }
}
//*******************************************************
class Person {
    public function greet(){}
}
class English extends Person{
    public function greet()
    {
        return'hi';
    }
}
class German extends Person{
    public function greet()
    {
        return'gretting in german';
    }
}
class French extends Person{
    public function greet()
    {
        return'greeting in french';
    }
}