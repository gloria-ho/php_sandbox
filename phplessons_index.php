<?php

/*
  This
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

// The var_dump function is used to determine the data type. The code below demonstrates how to use the var_dump function.
$x = 1;
var_dump($x);
$y = 1.5;
var_dump($y);
$z = "I Love PHP";
var_dump($z);
$n = true;
var_dump($n);

echo "<br>";



?>