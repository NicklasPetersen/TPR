<?php
class Main extends Database {

  public function showProgram($id) {
    $sql = "SELECT * FROM program WHERE id = :id";

    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam('id', $id);
    $stmt->execute();
    $program = $stmt->fetch();
    if (isset($program[0]) && sizeof($program) >= 1) {

      return $program['program_name'];// ??= 'default value';
    } else {
      return $id;
    }

  }

}
