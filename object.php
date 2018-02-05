<?php 

/**
encapsulation
  public 
  protected 
  private
inheritance 
polymorphism (poly)
overloading 
overriding

class 
object 
properties 
method 
 */

class Hello {
  public $firstname = 'sumon';
  public $lastname = 'ahmed';
  public $email = 'sumon@gmail.com';
  public function fullName() {
    return "{$this->firstname} {$this->lastname}";
  }
}

class World extends Hello{
  public $firstname = 'arif';
}

$obj = new World();
echo $obj->fullName() ;


