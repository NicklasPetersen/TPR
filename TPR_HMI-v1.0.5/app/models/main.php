<?php
class Main extends Database {

  public function showProgram($id) {
    $sql = "SELECT * FROM program WHERE id = :id";

    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam('id', $id);
    $stmt->execute();
    $program = $stmt->fetch();
    if (isset($program[0]) && sizeof($program) >= 1) {
      $_SESSION['program_name'] = $program['name'];
      return $program;// ??= 'default value';
    } else {
      return $id;
    }

  }

  public function show($id) {
    $sql = "SELECT * FROM recipe WHERE recipe_id = :id";

    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam('id', $id);
    $stmt->execute();
    $recipe = $stmt->fetch();
    if (isset($recipe[0]) && sizeof($recipe) >= 1) {
      $_SESSION['velocity'] = $recipe['recipe_velocity'];
    } else {
      return $id;
    }

  }

  public function update($id) {

  }

}
