<?php

class Test extends Dbh {

  public function getUsers() {
    $sql  = "SELECT * FROM tpr_db.user";
    $stmt = $this->connect()->query($sql);

    while ($row = $stmt->fetch()) {
      echo 'Username: ' . $row['username'] . '<br>' . 'Password: ' . $row['password'];
    }
  }

  public function getUsersStmt($username) {
    $sql  = "SELECT * FROM tpr_db.user WHERE username = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$username]);

    $usernames = $stmt->fetchAll();

    foreach ($usernames as $name) {
      echo 'Username: ' . $name['username'] . '<br>' . 'Password: ' . $name['password'];
    }
  }

  public function setUsersStmt($username, $password) {
    $sql  = "INSERT INTO tpr_db.user(username, password) VALUES (?, ?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$username, $password]);


  }

}
