<?php

  $username = $_POST['username'];
  $password = $_POST['password'];

  if(!empty($username) && !empty($password)){

    echo "success";

  }else{
    echo "Please fill in all required inputs!";
  }

?>
