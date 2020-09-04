<?php
class Signup extends Database {

  public function register($username, $password, $password, $password2, $access) {
    $_SESSION['count'] = 0;
    if (isset($username) && isset($access) && isset($password) && isset($password2) {
          // Check username: checks if the username is empty and nothing else.
          $username 					= htmlentities(filter_var($username),FILTER_SANITIZE_STRING);
          $password 					= htmlentities(filter_var($password),FILTER_SANITIZE_STRING);
          $password2 					= htmlentities(filter_var($password2),FILTER_SANITIZE_STRING);
          $phone 							= htmlentities(filter_var($access),FILTER_SANITIZE_NUMBER_INT);

          // If the two password are the same, check whether or not the user in already made
          if ($password === $password2) {
            $sql 							= "SELECT * FROM user WHERE username = :username";
            $stmt 						= $this->conn->prepare($sql);
            $stmt->execute(
              array(
                'username' 		=> $username,
              )
            );

            $_SESSION['count'] = $stmt->rowCount();

            if ($_SESSION['count'] > 0) {
              $_SESSION['message'] = "Username already in use";
            } else {
              // Create user
              // Hashing password using md5(password)
              $sql 							= "INSERT INTO tpr_db.user (username, password, access)
                                    VALUES (:username, :password, :access)";
              $stmt 						= $this->conn->prepare($sql);

              $stmt->execute(
                array(
                  'username' 		=> $username,
                  'password'		=> password_hash($password, PASSWORD_DEFAULT),
                  'access' 			=> $access
                )
              );
            }
          } else {
            // Failed to create user
            $_SESSION['message'] = "The two passwords do not match!";
          }
  } else {
    // Failed to create user
    $_SESSION['message'] 				= "Please enter all fields!";
  }
}

?>
