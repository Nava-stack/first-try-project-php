<?php
  $username = $_POST["username"];
  $password = $_POST["password"];

  if ($username == "admin" && $password =="123") {
    echo "<h1 style = 'color:green;'> Login Successfully</h1>";
  } else {
    echo "<h1 style = 'color:red;'> Invalid username or password</h1>";
  }
  
?>