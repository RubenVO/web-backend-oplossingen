<?php
  var_dump($_GET);
  
  if(isset($_GET["controller"]) && !empty($_GET["controller"])){
      $controller = $_GET["controller"];
      include("classes/".$controller.".php");
      $bier = new $controller;

      if(isset($_GET["method"]) && !empty($_GET["method"])){
          $method = $_GET["method"];
          $bier->$method();
      }
  }
?>
