<?php
declare(strict_types = 1);
include 'includes/autoloader.inc.php';

?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="container">
      <div class="content">
        <?php
          $usersObj = new UsersView();
          $usersObj->showUser("egatec", "5250");

        ?>
      </div>
    </div>

  </body>
</html>
