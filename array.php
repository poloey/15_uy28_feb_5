<?php

/**

echo 
print 
print_r
var_dump
php -S localhost:8000

 */
// numeric, enumerable, index array
$fruits1 = ['apple', 'orange', 'banana', 2];
// associative array
$fruits2 = [
  "f1" => 'apple',
  "f2" => 'orange',
  "f3" => 'banana',
  "f4" => 'mango',

];
echo $fruits1[0];
echo "<br>";
echo $fruits2['f1'];
echo "<br>";

print_r($fruits1);
print_r($fruits2);





