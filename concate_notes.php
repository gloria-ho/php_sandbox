<? php

// String concatenation
$a = "hello"
$b = " world!"
$c = $a . $b
// hello world!

// Get evens only
$arr = [1,2,3,4,5,6,7,8,9];
$func = function ($d) {
  return $d % 2 == 0;
};
$c = array_filter($arr, $func);

// Map over an array
$arr = [1,2,3,4,5,6,7,8,9];
$func = function ($d) {
  return $d * 2;
};
$c = array_map($func, $arr);

/* 
  Keep in mind the ordering of each parameter of array_map()
  and array_filter(). They are swapped. This threw me off in the beginning too.
  Even today, I check the docs for the order of the parameters to make sure it's right.
*/

foreach ($arr as $index => $a) {
  // do something inside here
}

?>