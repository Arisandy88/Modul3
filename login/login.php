<?php
  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];

    if($username == "figo" && $password == "1234"){
      header("location: read.php");
      $_SESSION['user'] = $username;
    }
    else{
      header("location: form-login.php");
    }

?>
