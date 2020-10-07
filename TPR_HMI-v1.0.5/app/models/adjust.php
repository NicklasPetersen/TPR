<?php
class Adjust extends Database {

  public function show($id) {
    $part1 = "SELECT *, operation_mode.name as operation_name, packing_pattern.name as pattern_name ";
    $part2 = "FROM recipe ";
    $part3 = "LEFT JOIN operation_mode ON recipe.Operation_mode_id = operation_mode.id ";
    $part4 = "LEFT JOIN packing_pattern ON recipe.packing_pattern_id = packing_pattern.id WHERE recipe_id = :id";


    $sql = $part1 . $part2 . $part3 . $part4;


    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam('id', $id);
    $stmt->execute();
    $recipe = $stmt->fetch();
    if (isset($recipe[0]) && sizeof($recipe) >= 1) {
      //echo (json_encode($recipe));
      return $recipe;// ??= 'default value';
    } else {
      return $id;
    }

  }

  public function update($id) {

  }

}
