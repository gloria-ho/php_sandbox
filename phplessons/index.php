<?php

  /*
    this
    is
    a
    multi-line
    comment
  */

  // nl2br() will show line breaks in the html result when using '\n'
  echo nl2br("Hello World!\n"); // Hello World!

  // a manual html line break can be echoed
  echo "<br>";
  echo nl2br(PHP_INT_MAX."\n"); // 9223372036854775807

  echo "<br>";

  // declare variables using '$'
  $my_var = 1;
  echo nl2br($my_var."\n"); // 1

  echo "<br>";

  // php is case sensitive
  $MY_VAR = "Hypertext Pre Processor";

  // concatenation in php is done using '.'  
  echo nl2br($MY_VAR."\n"); // Hypertext Pre Processor
  
  echo "<br>";

  // PHP also allows you to cast the data type. This is known as explicit casting. The code below demonstrates explicit type casting.
  $a = 1;
  $b = 1.5;
  $c = $a + $b;
  $c = $a + (int) $b;
  echo nl2br($c."\n"); // 2


  echo "<br>";

  // the var_dump function is used to determine the data type. The code below demonstrates how to use the var_dump function.
  $x = 1;
  var_dump($x); // int(1)
  echo "<br>";
  $y = 1.5;
  var_dump($y); // float(1.5)
  echo "<br>";
  $z = "I Love PHP";
  var_dump($z); // string(10) "I Love PHP"
  echo "<br>";
  $n = true;
  var_dump($n); // bool(true) 

  echo "<br>";
  echo "<br>";

  // arrays in PHP can be both an array and an object
  // arrays can be created by declaring the index value
  // tyoes of PHP arrays: numeric, PHP associative, multi-dimensional

  // numeric arrays use a numeric access key to reference a memory slot in an array variable
  $my_arr[0] = "Testing array";
  echo nl2br($my_arr[0]."\n"); // Testing array
  $my_arr[0] = "Replacing the value index 0";
  echo nl2br($my_arr[0]."\n"); // Replacing the value index 0

  echo "<br>";

  // PHP associative arrays use descriptive names for id keys.
  // "In computer science, an associative array, map, symbol table, or dictionary is an abstract data type composed of a collection of (key, value) pairs, such that each possible key appears at most once in the collection. Operations associated with this data type allow: the addition of a pair to the collection."

  // arrays can also be created by using the 'array(index=>);'' syntax
  // arrays do not need to start at 0
  // but declaring values this way creates a new array set and overrides any previous declaration of values
  $my_arr = array(
    1 => "Adding to array again",
    2 => "And again"
  );

  echo nl2br($my_arr[0]."\n"); // Notice: "Undefined offset: 0" ($my_arr[0] does not exist now)
  echo nl2br($my_arr[1]."\n"); // Adding to array again
  echo nl2br($my_arr[2]."\n"); // And again

  echo "<br>";

  // multi dimentional arrays are used to group related data together

  $movies = array(
    "comedy" => array(
      "Pink Panther",
      "John English",
      "See No Evil Hear No Evil"
    ),
    "action" => array(
      "Die Hard",
      "Expendables"
    ),
    "epic" => array(
      "The Lord of the Rings"
    ),
    "romance" => array(
      "Romeo and Julet"
    )
  );

  print_r($movies); // Array ( [comedy] => Array ( [0] => Pink Panther [1] => John English [2] => See No Evil Hear No Evil ) [action] => Array ( [0] => Die Hard [1] => Expendables ) [epic] => Array ( [0] => The Lord of the Rings ) [romance] => Array ( [0] => Romeo and Julet ) ) 

  echo "<br>";
  echo "<br>";

  // another way to define a multi dimensional array as follows

  $films = array(
    "comedy" => array(
      0 => "Pink Panther",
      1 => "John English",
      2 => "See No Evil Hear No Evil"
    ),
    "action" => array(
      0 => "Die Hard",
      1 => "Expendables"
    ),
    "epic" => array(
      0 => "The Lord of the Rings"
    ),
    "romance" => array(
      0 => "Romeo and Juliet"
    )
  );

  print_r($films); // Array ( [comedy] => Array ( [0] => Pink Panther [1] => John English [2] => See No Evil Hear No Evil ) [action] => Array ( [0] => Die Hard [1] => Expendables ) [epic] => Array ( [0] => The Lord of the Rings ) [romance] => Array ( [0] => Romeo and Juliet ) ) 

  echo "<br>";
  echo "<br>";
  echo $films["comedy"][0]; // Pink Panther

  echo "<br>";
  echo "<br>";

  $lecturers = array("Mr. Jones", "Mr. Banda", "Mrs. Smith");
  echo count($lecturers); // 3

  echo "<br>";
  echo "<br>";

   // the is_array function is used to determine if a variable is an array or not

   echo is_array($lecturers); // 1

   echo "<br>";
   echo "<br>";

  // the sort function is used to sort arrays by the values
  // if the values are alphanumeric, it sorts in alphabetical order
  // if the values are umeric, it sorts them in ascending order
  // it removes the existig access keys and adds new numeric keys
  // the output of this function is a numeric array
  $persons = array(
    "Mary" => "Female",
    "John" => "Male",
    "Mirriam" => "Female"
  );

  print_r($persons); // Array ( [Mary] => Female [John] => Male [Mirriam] => Female ) 
  echo "<br>";
  echo "<br>";
  sort($persons);
  print_r($persons); // Array ( [0] => Female [1] => Female [2] => Male )
  
  echo "<br>";
  echo "<br>";

  // the ksort function is used to sort the array using the key

  $persons = array(
    "Mary" => "Female",
    "John" => "Male",
    "Mirriam" => "Female"
  );

  ksort($persons);
  print_r($persons); // Array ( [John] => Male [Mary] => Female [Mirriam] => Female ) 

  echo "<br>";
  echo "<br>";

  // the asort function is used to sort the array using the value

  $persons = array(
    "Mary" => "Female",
    "John" => "Male",
    "Mirriam" => "Female"
  );

  asort($persons);
  print_r($persons); // Array ( [Mary] => Female [Mirriam] => Female [John] => Male ) 

  echo "<br>";
  echo "<br>";

  // if else statement syntax:

  $if_a = 10;
  $if_b = 20;
  if ($if_a > $if_b) {
    echo "$if_a is greater than $if_b";
  } else {
    echo "$if_b is greater than $if_a";
  }

  echo "<br>";
  echo "<br>";

  // switch statement syntax:
  $switch_a = 100;
  switch ($switch_a){
    case "0":
      echo "$switch_a is zero.";
    break;

    case "1":
      echo "$switch_a is one.";
    break;

    default:
      echo "$switch_a is neither zero or one.";
      break;
  }

  echo "<br>";
  echo "<br>";

  
  echo "<br>";
  echo "<br>";
?>