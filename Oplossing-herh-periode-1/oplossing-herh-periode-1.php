<?php

  session_start();

  if(isset($_POST["clear"])){
    $_SESSION["todoArray"] = array();
    $_SESSION["doneArray"] = array();
  }

  //var_dump($_SESSION["todoArray"]);


  if(isset($_POST["addTodo"]) && isset($_POST["description"]) && $_POST["description"] != ""){
    $_SESSION["todoArray"][] = $_POST["description"];
    //var_dump($_SESSION);
  }

  if(isset($_POST["setDone"])){
    $asInt = (int)$_POST["setDone"];
    $_SESSION["doneArray"][] = $_SESSION["todoArray"][$asInt];
    unset($_SESSION["todoArray"][$asInt]);
  }

  if(isset($_POST["setNotDone"])){
    $asInt = (int)$_POST["setNotDone"];
    $_SESSION["todoArray"][] = $_SESSION["doneArray"][$asInt];
    unset($_SESSION["doneArray"][$asInt]);
  }

  if(isset($_POST["deleteDone"])){
    $asInt = (int)$_POST["deleteDone"];
    unset($_SESSION["doneArray"][$asInt]);
  }

  if(isset($_POST["deleteNotDone"])){
    $asInt = (int)$_POST["deleteNotDone"];
    unset($_SESSION["todoArray"][$asInt]);
  }


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Todo</title>
    <link rel="stylesheet" href="stylesheet.css">
  </head>
  <body>
    <?php if(isset($_POST["addTodo"]) && $_POST["description"] == ""){ ?>
      <p class="error">Ahh, damn. Lege todos zijn niet toegestaan...</p>
    <?php } ?>

    <h1>Todo app</h1>

    <?php if(empty($_SESSION["todoArray"]) && empty($_SESSION["doneArray"])){ ?>
      <p>Je hebt nog geen TODO's toegevoegd. Zo weinig werk of meesterplanner?</p>
    <?php } ?>

    <?php if(!empty($_SESSION["todoArray"]) || !empty($_SESSION["doneArray"])) {  ?>
      <h2>Nog te doen</h2>
    <?php } ?>

    <?php if(!empty($_SESSION["doneArray"]) && empty($_SESSION["todoArray"])){ ?>
      <p>Schouderklopje, alles is gedaan!</p>
    <?php } ?>

    <ul>
    <?php
      if(!empty($_SESSION["todoArray"])){
        foreach( $_SESSION["todoArray"] as $data => $value ):
    ?>

        <form action="oplossing-herh-periode-1.php" method="POST">
          <button type="submit" title="Status wijzigen" id="toggleTodo" name="setDone" value ="<?= $data ?>" class="status not-done">
          <?php echo $value ?>
          </button>
          <button type="submit" title="Verwijderen" name="deleteNotDone" value ="<?= $data ?>">"Verwijder"</button>
        </form>

    <?php endforeach; } ?>
    </ul>


    <?php if(!empty($_SESSION["todoArray"]) || !empty($_SESSION["doneArray"])) { ?>
      <h2>Done and done!</h2>
    <?php } ?>

    <?php if(empty($_SESSION["doneArray"]) && !empty($_SESSION["todoArray"])){ ?>
      <p>Werk aan de winkel...</p>
    <?php } ?>

    <ul>

    <?php
      if(!empty($_SESSION["doneArray"])){
        foreach( $_SESSION["doneArray"] as $data => $value ):
    ?>

        <form action="oplossing-herh-periode-1.php" method="POST">
          <button type="submit" title="Status wijzigen" id="toggleTodo" name="setNotDone" value ="<?= $data ?>" class="status done">
          <?php echo $value ?>
          </button>
          <button type="submit" title="Verwijderen" name="deleteDone" value ="<?= $data ?>">"Verwijder"</button>
        </form>

    <?php endforeach; } ?>
    </ul>


    <h1>Todo toevoegen</h1>
    <form action="oplossing-herh-periode-1.php" method="POST">
      <ul>
        <li>
          <label for="description">Beschrijving</label>
          <input type="text" id="description" name="description">
        </li>
      </ul>
      <input type="submit" id="addTodo" name="addTodo" value="Toevoegen">

      <input type="submit" id="clear" name="clear" value="Reinitialize (debug only)">
    </form>
  </body>
</html>
