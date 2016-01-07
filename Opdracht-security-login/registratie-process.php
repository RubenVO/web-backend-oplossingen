<?php

  session_start();

  function generatePassword(){
    $length = 8;
    $upperCase = true;
    $specials = true;
    $numbers = true;
    $generatedPassword="";
    $searchString="abcdefghijklmnopqrstuvwxyz";


    for($i = 0; $i < $length; $i++){
        $generatedPassword = $generatedPassword . $searchString[Rand(0, (strlen($searchString)-1))];
      }
      $_SESSION["generatedPassword"] = $generatedPassword;
      echo $generatedPassword;
    }
    //headerlocation ->google
    generatePassword();

 ?>
