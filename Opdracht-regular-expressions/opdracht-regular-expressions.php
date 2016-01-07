<?php
  session_start();
  $newString = "";
  $replacement = "<span>#</span>";
  //$regex = "[a-d]|[u-z]|" . $_POST["regex"] . "|[color]|[colour]";
  $regex = "[1]\d{3}";
  $regex =
  if(isset($_POST["submit"])){
    if(isset($_POST["regex"]) && isset($_POST["string"])){
      $newString = preg_replace("/" . $regex . "/", $replacement, $_POST["string"]);
    }
    $_SESSION["regex"] = $_POST["regex"];
    $_SESSION["string"] = $_POST["string"];
  }


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RegEx tester</title>
    <style>
      span{
        color: red;
      }
    </style>
  </head>
  <body>
    <h1>RegEx tester</h1>
    <form class="" action="opdracht-regular-expressions.php" method="post">
      <label for="regex">Regugal Expression </label>
      <br>
      <input type="text" id="regex" name="regex" value="<?= (isset($_SESSION["regex"])) ? $_SESSION["regex"] : "" ?>">
      <br>
      <br>
      <label for="string">String </label>
      <br>
      <textarea name="string" rows="8" cols="40"><?= (isset($_SESSION["string"])) ? $_SESSION["string"] : "" ?></textarea>
      <br>
      <input type="submit" name="submit" value="submit">
      <br>
      <br>
    </form>
    <p><?php echo $newString ?></p>
  </body>
</html>
