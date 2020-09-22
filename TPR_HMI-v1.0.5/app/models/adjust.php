<?php
class Adjust extends Database {

  public function show($data) {
    if (isset($data['recipe'])) {
      $id = $data['recipe'];
    } else {
      return false;
    }

    $sql  = "SELECT * FROM tpr_db.recipe WHERE tpr_db.recipe.recipe_id = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam('id', $id);
    $stmt->execute();
    $recipe = $stmt->fetch();
    if (isset($recipe[0]) && sizeof($recipe) >= 1) {

      /*$_SESSION['recipe_name']            = $recipe['recipe_name'];
      $_SESSION['program_id']             = $recipe['program_id'];
      $_SESSION['recipe_velocity']        = $recipe['recipe_velocity'];
      $_SESSION['packing_pattern_id']     = $recipe['packing_pattern_id'];
      $_SESSION['operation_mode_id']      = $recipe['Operation_mode_id'];
      $_SESSION['recipe_valve_delay']     = $recipe['recipe_valve_delay'];
      $_SESSION['recipe_image_retry_no']  = $recipe['recipe_image_retry_no'];
      $_SESSION['recipe_cart_height']     = $recipe['recipe_cart_height'];*/

      echo (json_encode($recipe));
      die();
      // $recipe;
    } else {

      return $id;
    }

  }

  public function update($id) {

  }

}
