<?php

  $conn = new mysqli('localhost','root','root','hreserver');

  if($conn->connect_error){
    echo $error -> $conn->connect_error;
  }

 ?>
