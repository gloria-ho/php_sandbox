<?php

/*
  this
  is
  a
  multi-line
  comment
*/

echo nl2br("Hello World!\n");
// nl2br() will show line breaks in the html result when using '\n'
echo "<br>";
// a manual html line break can be echoed
echo nl2br(PHP_INT_MAX."\n");

echo "<br>";

$my_var = 1;
// declare variables using '$'
// php is case sensitive
echo nl2br($my_var."\n");

echo "<br>";

$MY_VAR = "Hypertext Pre Processor";
echo nl2br($MY_VAR."\n");
// concatenation in php is done using '.'

echo "<br>";

// PHP also allows you to cast the data type. This is known as explicit casting. The code below demonstrates explicit type casting.
$a = 1;
$b = 1.5;
$c = $a + $b;
$c = $a + (int) $b;
echo nl2br($c."\n");

echo "<br>";

// the var_dump function is used to determine the data type. The code below demonstrates how to use the var_dump function.
$x = 1;
var_dump($x);
$y = 1.5;
var_dump($y);
$z = "I Love PHP";
var_dump($z);
$n = true;
var_dump($n);

echo "<br>";

// arrays in PHP can be both an array and an object
// arrays are can be created by declaring the index value
$my_arr[0] = "Testing array";
echo nl2br($my_arr[0]."\n");
$my_arr[0] = "Replacing the value index 0";
echo nl2br($my_arr[0]."\n");

echo "<br>";

// PHP arrays are 'associative arrays':
// In computer science, an associative array, map, symbol table, or dictionary is an abstract data type composed of a collection of (key, value) pairs, such that each possible key appears at most once in the collection. Operations associated with this data type allow: the addition of a pair to the collection.

// arrays can also be created by using the 'array(index=>);'' syntax
// arrays do not need to start at 0
// but this creates a new array set and overrides any previous declaration of values
$my_arr = array( 1 => "Adding to array again",
                 2 => "And again"
                 );

echo nl2br($my_arr[0]."\n");
// error: "Undefined offset: 0" ($my_arr[0] does not exist now)
echo nl2br($my_arr[1]."\n");
echo nl2br($my_arr[2]."\n");

echo "<br>";



?>