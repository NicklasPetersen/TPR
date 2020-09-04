<?php

class UsersView extends Users {

  public function showUser($username, $password) {
    $results = $this->getUser($username, $password);
    echo "Username: " . $results[0]['username'];
  }
}
