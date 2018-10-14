<?php

  ////////////////////////////////////////////////////////////
  // built in functions
  ////////////////////////////////////////////////////////////

  //
  // STRING FUNCTIONS - manipulate string data
  //

  // strtolower - convert all string characters to lower case letters
  echo strtolower("Gloria"); // gloria
  echo "<br/>";

  // strtoupper - convert all string characters to upper case letters
  echo strtoupper("Gloria"); // GLORIA
  echo "<br/>";

  // strlen - used to count the number of characters in a string, including spaces between letters
  echo strlen("This is a test string for counting."); // 35
  echo "<br/>";

  // explode - convert strings into an array table
  $explode_example = explode(';',"host=localhost; db=sales; uid=rood; pwd=demo");
  print_r($explode_example); // Array ( [0] => host=localhost [1] => db=sales [2] => uid=rood [3] => pwd=demo ) 
  echo "<br/>";

  // substr - return part of the string
  // accepts 3 parameters: the string to be shortened, the position of the starting point, the number of characters to be returned
  $substr_str = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo corrupti voluptates aspernatur inventore dolorum asperiores, voluptatibus impedit consequuntur modi facilis!";
  echo substr($substr_str, 0, 12); // Lorem ipsum 
  echo "<br/>";

  // str_replace - replace specified values in a given string
  // accepts 3 arguments: the text to be replaced, the replacement text, the text that is analyzed
  echo str_replace("the", "that","the laptop is very expensive"); // that laptop is very expensive
  echo "<br/>";

  // sha1 - calculate the SHA-1 hash of a string value
  echo sha1("password"); // 5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8
  echo "<br/>";

  // md5 - calculate the md5 hash of a string value
  echo md5("password"); //9f961034ee4de758baf4de09ceeb1a75
  echo "<br/>";

  // str_word_count - count the number of words in a string
  echo str_word_count("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, eius repellendus. Suscipit dignissimos quam sit modi! Expedita vel dolor eligendi."); // 20
  echo "<br/>";

  // ucfirst - make the first character of the string upper case
  echo ucfirst("respect"); // Respect
  echo "<br/>";

  // lcfirst - make the first character of the string lower case
  echo lcfirst("RESPECT"); // rESPECT
  echo "<br/>";


  echo "<br/>";


  //
  // NUMERIC FUNCTiONS - returns numeric results
  //

  // is_number - accepts an argument and returns true or 1 if it's numberic and false or 0 if it's not
  if(is_numeric("guru")){
    echo "true";
  } else {
    echo "false";
  }
  // false
  echo "<br/>";

  // number_format - format a numeric value using digit separators and decimal points
  echo number_format(2509763); // 2,509,663
  echo "<br/>";

  // rand - generate a random number
  echo rand(); // random number
  echo "<br/>";
  echo rand(1, 10);
  echo "<br/>";

  // round - round off a number with decimals to the nearesy whole value
  echo round(3.14); // 3
  echo "<br/>";

  // sqrt - returns the square root of a number
  echo sqrt(100); // 10
  echo "<br/>";

  // cos - returns the cosine
  echo cos(45); // 0.52532198881773
  echo "<br/>";

  // sin returns the sine
  echo sin(45); // 0.85090352453412
  echo "<br/>";

  // tan - returns the tangent
  echo tan(45); // 1.6197751905439
  echo "<br/>";

  // pi - constand that returns the value of pi
  echo pi(); // 3.1415926535898
  echo "<br/>";
  
  // date fucntion - format Unix date and time to human readable format
  // set the default timezone to use
  date_default_timezone_set("EST");
  echo date("l");
  echo "<br/>";
  echo date("l jS \of F Y h:i:s A");
  echo "<br/>";
  echo date("l F d,Y h:i:s A e");
  echo "<br/>";
  if (date("L") == 1) {
    echo "This is a leap year, how exciting!";
  } else {
    echo "This is not a leap year, how boring.";
  }
  echo "<br/>";


  echo "<br/>";
  

  ////////////////////////////////////////////////////////////
  // defining functions
  ////////////////////////////////////////////////////////////
  
  // function nsmes mudt start with a letter or underscore but not a number
  // the function name must be unique
  // the function name must not containe spaces
  
  function add_numbers(){
    echo 1 + 2;
  }
  add_numbers(); // 3
  echo "<br/>";

  function display_name($name) {
    echo "Hello " . $name;
  }
  display_name("Gloria");
  echo "<br/>";

  function kilometers_to_miles($kilometers = 0) {
    $miles_scale = 0.62;
    return $kilometers * $miles_scale;
  }
  echo kilometers_to_miles(100); // 62

?>