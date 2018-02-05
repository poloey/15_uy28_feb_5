7 ta 

# variable 

~~~php
$name = 'sumon';
~~~

# constant

by convension constant name usually uppercase    

~~~php
const NAME = 'sumon';
or 
define('NAME', 'sumon');
~~~

# datatype 

* scalar
  * number 
    * integer  
    * floating point
  * boolean
  * string (we can write string in 4 ways)
    * single quote
    * double quote (support string interpolation)
    * heredoc (support string interpolation)
    * nowdoc

* composite
  * array
    * index array

      ~~~php
      $fruits = ['apple', 'orange','banana'];
      ~~~

    * associative array    

      ~~~php
        $fruits = [
          "f1" => 'apple',
          "f2" => 'orange',
          "f3" => 'banana'
        ];
      ~~~

  * object 
    Object is instance of a class. using new keyword we can get object from a class.

    ~~~php
    $object = new stdClass();

    class Hello {
      public $properties = 'some value';
      public function method() {

      }
    }
    $object  = new Hello();
    $object->properties;
    $object->method();
    ~~~

    encapsulation, inheritance, polymorphism, overloading, overriding    

# control flow 

* conditional   

~~~php

if () {

} else if () {

} else {

}

# ternary

2 + 2 === 5 ? 'if things' : 'else things';

# switch 

switch($case) {
  case 'somevalue': 
    "do somthing";
    break;
  case 'somevalue': 
    "do somthing";
    break;
  case 'somevalue': 
    "do somthing";
    break;
  default:
    "do else things";
}

~~~


* iterative

~~~php
# for loop
for ($i = 0; $i < 100; $i++) {
  echo $i;
}


# while loop    

$i = 0;

while ( $i < 100;) {
  echo $i;
  $i++;
} 

~~~

# functions

~~~php
echo "value";
print($string);
print_r($array);
var_dump($array);
count($array);
die();
die;
~~~

# operator

~~~
. = concatenation operator
+ = additional operator

~~~


# namespace 

~~~php
namespace Dhaka;
class Hello {

}

namespace Borishal;
class Hello {

}


use Dhaka\Hello;
use Borishal\Hello;

~~~


### difference with js     

in js we access object using `.` notation. In php we use `->`.      

in js we use `+` as concatenation operator. In php we use `.` as concatenations operator    


## How to make a mini php server         

here port 8000 could be any 4 digit number      

~~~bash
php -S localhost:8000
~~~







