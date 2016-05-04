<?php
session_start();

require 'functions.php';
protectPage();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>lol</title>
  </head>
  <body>
    <p>
      <!-- ingelogd nigger! -->
      <?php
        echo "<pre>"; var_dump($_SESSION); echo "</pre>";

        if (LoggedIn()) {
          echo "logged in!<br/>";
        }else {
          echo "please log in!";
        }


        if (isAdmin() == false) {
          echo "false";
        }
        else {
          echo "true";
        }

        // echo "<pre>"; var_dump($_SERVER); echo "</pre>";

        // var_dump($_SERVER);
       ?>

       <a href="logout.php">logout</a>
    </p>
  </body>
</html>
