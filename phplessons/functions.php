<?php
  // string functions
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


?/