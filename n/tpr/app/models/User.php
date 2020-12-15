<?php

class User extends Database {

	public $name;

	public function login($username, $password) {
		$sql											= "SELECT * FROM tpr_db.user WHERE username = :username";
		$stmt 										= $this->conn->prepare($sql);
		$stmt->execute(
			array(
				'username' => $username,
			)
		);
		$result = $stmt->fetchAll();
		if (isset($result[0]) && sizeof($result) >= 1 && $result[0]['username'] == $username) {
			// Hashing password in order to check if the password is correct

			//$verification = password_verify();
			if (password_verify($password, $result[0]['password'])) {
				$_SESSION['logged_in'] 	= true;
				$_SESSION['username'] 	= $result[0]['username'];
				$_SESSION['access']			= $result[0]['access'];

				return true;
			} else {
				$_SESSION['msg'] = "Incorrect login";
			}
		} else {
			$_SESSION['msg'] = "Incorrect login";
		}


		return false;
	}

}
