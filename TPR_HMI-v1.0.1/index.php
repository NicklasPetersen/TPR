<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Connects to database
  require_once("Database.php");
  $object = new Database;
  //$db = $object->conn->connect();

  $msg = "Login";

  // IF submit button is pressed
  IF (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
      $query = "SELECT * FROM tpr_db.user WHERE username = :username AND password = :password";
      $stmt = $object->prepare($query);

      $stmt->execute(
        array(
          'username' => $_POST["username"],
          'password' => $_POST["password"],

        )
      );

      $count = $stmt->rowCount();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($count > 0) {
        $_SESSION["username"] = $result["username"];
        echo "Username and password are correct";
        $msg = $count.'Correct login. Welcome $_SESSION["username"]';
        //header('LOCATION:index.php');
      } else {
        $msg = $count."Incorrect login";
      }
    }
  }

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title>Main page</title>
  </head>

  <body>
    <header>
      <div class="container">
        <div class="logo">
          <img src="img/egamatic-logo.png" height="50" alt="" title="">
        </div>

        <nav>
          <li><a href="users.html">Users</a></li>
          <li><a href="index.html">Pictures</a></li>



        </nav>
        </div>
      </div>
    </header>

    <div class="container">
        <div class="content">

          <?php
            if (isset($msg)) {
              echo '<label class="text-danger">'.$msg.'</label>';
            }
          ?>
          <br><br>

            <form class="" action="" method="post">
              <label for="username">Username: </label><br>
              <input type="text" name="username" id="name" value=""><br><br>
              <label for="password">Password:</label><br>
              <input type="text" name="password" value=""><br><br>
              <input type="submit" name="" value="Submit">
            </form>

              <h2>Welcome: <?php echo $_SESSION["username"] ?></h2>
        </div>
    </div>

  </body>
</html>
