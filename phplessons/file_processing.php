<?php
  // php has built in file processing functions


  // file_exists - determines whether a file exists or not
  // returns true if the file exists and false if it does not
  // ideal for when creating a new file and checking that the file does not already exist on the server
  /*
    file_exists($filename);
  */
  if (file_exists("my_settings.txt")) {
    echo "file found!";
  } else {
    echo "my_settings.txt does not exist";
  }
  echo "<br/>";


  echo "<br/>";


  // fopen - opens files
  /*
    fopen($file_name, $mode, $use_include_path, $context);
  */
  // $file_name is the name of the file to be opened
  // $mode is the mode in which the file should be opened:
  //    r - read only; from the beginning; returns false if the file doesn't exist
  //    r+ read and write; from the beginning; returns false if the file doesn't exist
  //    w - write only; from the beginning; truncate file to zero length; if the file doesn't exist, attempt to create it
  //    w+ - read and write; truncate file to zero length;  if the file doesn't exist, atttempt to create it
  //    a - write only; append to file at end; if the file doesn't exist, attempt to create it
  //    a+ - read and write; append to file at end; if the file doesn't exist, attempt to create it
  // $use_include_path is optional, default is false, if set to true the function searches in the include path too
  // $context is optional, can be used to specify the context support


  // fwrite - write files
  /*
    fwrite($handle, $string, $length);
  */
  // $handle is the file pointer resource
  // $string is the date to be written in the file
  // %length is opetional, can be used to specify the maximum file length


  // fclose - cdlose a file which is already open
  /*
    fclose($handle);
  */
  // $handle is the file pointer resource


  // EXAMPLE

  $fh = fopen("my_settings.txt", "w")
  or die("Failed to create file");

  $text = <<<_END
    localhost;root;pwd1234;my_database
_END;

fwrite($fh, $text)
or die("Could not write to file");

fclose($fh);

echo "File 'my_settings.txt' written successfully";

?>