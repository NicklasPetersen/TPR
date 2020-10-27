<?php
class Setup extends Database {

  public function updateFrame($data) {
    if  (isset($data['x']) && isset($data['y']) && isset($data['z']) && isset($data['a']) && isset($data['e']) && isset($data['r'])) {

      $id = htmlentities(filter_var($data['type']),FILTER_SANITIZE_STRING);
      $x  = htmlentities(filter_var($data['x']),FILTER_SANITIZE_NUMBER_INT);
      $y  = htmlentities(filter_var($data['y']),FILTER_SANITIZE_NUMBER_INT);
      $z  = htmlentities(filter_var($data['z']),FILTER_SANITIZE_NUMBER_INT);
      $a  = htmlentities(filter_var($data['a']),FILTER_SANITIZE_NUMBER_INT);
      $e  = htmlentities(filter_var($data['e']),FILTER_SANITIZE_NUMBER_INT);
      $r  = htmlentities(filter_var($data['r']),FILTER_SANITIZE_NUMBER_INT);

      $sql 							= "UPDATE tpr_db.frame
                            SET x = :x, y = :y, z = :z, a = :a, e = :e, r = :r
                            WHERE id = :id";
      $stmt 						= $this->conn->prepare($sql);

      $stmt->execute(
        array(
          'id' 	=> $id,
          'x'		=> $x,
          'y'		=> $y,
          'z'		=> $z,
          'a'		=> $a,
          'e'		=> $e,
          'r'		=> $r,
        )
      );
      $_SESSION['error'] = "";
      return true;
    } else {
      $_SESSION['error'] = "You have to input a number is all six fields!";
      return false;
    }
  }


  public function getFrames() {
    $sql  = "SELECT * FROM frame";
    $stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();
    if (isset($result[0]) && sizeof($result) >= 1) {
      for ($i = 0; $i < sizeof($result); $i++) {
        $_SESSION[$result[$i]['id']."-x"] = $result[$i]['x'];
        $_SESSION[$result[$i]['id']."-y"] = $result[$i]['y'];
        $_SESSION[$result[$i]['id']."-z"] = $result[$i]['z'];
        $_SESSION[$result[$i]['id']."-a"] = $result[$i]['a'];
        $_SESSION[$result[$i]['id']."-e"] = $result[$i]['e'];
        $_SESSION[$result[$i]['id']."-r"] = $result[$i]['r'];
      }

      return json_encode($result);
    }
  }


}
