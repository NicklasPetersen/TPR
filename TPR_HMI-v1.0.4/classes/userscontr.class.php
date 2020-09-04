<?php
// For updating database
class UsersContr extends Users {

  public function createUser($username, $password) {
    $this->setUser($username, $password);
  }


}
