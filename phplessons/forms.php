<?php
  // forms are used to get input from the user and submit it to the web server for processing
  // ideal for submitting login details to the server
  // POST method - get values submitted via HTTP POST method
  
  // values are not visable in the url
  // no limitation on the length of values since they are submitted via the body of the http
  // lower performance companred to the GET method due to time spent encapsulation the POST values in the HTTP body
  // supports many different types such as string, numeric, binary, etc.
  // results cannot be bookmarked
  $_POST['variable_name'];
  
  // GET method - used to get values submitted via HTTP GET method
  // ideal for search engine forms as it allows the users to bookmark the results
  
  // values are visable in the url
  // has limitation on the length of the values, usually 255 characters, because they displayed in the url
  // has high performance compared to POST method due to the simple nature of appending the values in the URL
  // supports only string data types because the values are displayed in the url
  // results can be bookmarked due to the visibility of the values in the url
  $_GET['variable_name'];







?>