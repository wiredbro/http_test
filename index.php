<?php
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the post data
  $data = $_POST;
  // Initialize an empty string
  $string = "";
  // Loop through the data array
  foreach ($data as $key => $value) {
    // Append the key and value to the string
    $string .= "$key: $value\n";
  }
  // Print the string
  echo $string;
}
// Set the refresh time in seconds
$sec = "10";
// Set the URL of the page to refresh
$page = $_SERVER['PHP_SELF'];
// Send the header with refresh instruction
header ("Refresh: $sec; url=$page");
?>
