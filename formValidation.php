<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {

  $data = trim($data); //Strip unnecessary characters (extra space, tab, newline) from the user input data (with the PHP trim() function)
  
  $data = stripslashes($data); //Remove backslashes (\) from the user input data (with the PHP stripslashes() function)
  
  $data = htmlspecialchars($data); //The htmlspecialchars() function converts special characters to HTML entities. This means that it will replace HTML characters like < and > with &lt; and &gt;. This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.
  
  return $data;
}
?>