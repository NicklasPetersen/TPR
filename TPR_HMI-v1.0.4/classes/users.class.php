<?php
// Model of the MVC

class Users extends Dbh {

  protected function getUser($username, $password) {
    $sql  = "SELECT * FROM tpr_db.user WHERE username = ? AND password = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$username, $password]);

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function setUser($username, $password) {
    $sql  = "INSERT INTO tpr_db.user(username, password) VALUES (?, ?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$username, $password]);

  }


}
