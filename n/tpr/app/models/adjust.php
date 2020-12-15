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
      return $recipe;
    } else {
      return $id;
    }

  }

  // public function getCurrent() {
  //   $sql = "SELECT recipe_id FROM currentValues;";
  //   $stmt = $this->conn->prepare($sql);
	// 	$stmt->execute();
	// 	$result = $stmt->fetchAll();
  //   if (isset($result[0]) && sizeof($result) > 0) {
  //     $_SESSION['recipe'] = $result[0];
  //     return true;
  //   } else {
  //     return false;
  //   }
  //
  // }

  public function updateCurrent($reipe) {
    // Declare variables
    $id = htmlentities(filter_var($recipe['recipe']), FILTER_SANITIZE_NUMBER_INT);

    // Create SQL statement
    $sql  = "UPDATE currentValues (recipe_id) VALUES (:id)";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(
      array(
        'id' => $id
      )
    );
    return true;
  }





  public function updateRecipe ($recipe) {
    // Declare variables
    $id               = htmlentities(filter_var($recipe['recipe']),FILTER_SANITIZE_NUMBER_INT);
    $recipeName       = htmlentities(filter_var($recipe['recipeName']),FILTER_SANITIZE_STRING);
    $recipeVelocity   = htmlentities(filter_var($recipe['recipeVelocity']),FILTER_SANITIZE_NUMBER_INT);
    $opNo             = htmlentities(filter_var($recipe['opNo']),FILTER_SANITIZE_NUMBER_INT);
    $patternNo        = htmlentities(filter_var($recipe['patternNo']),FILTER_SANITIZE_NUMBER_INT);
    $cartHeight       = htmlentities(filter_var($recipe['cartHeight']),FILTER_SANITIZE_NUMBER_INT);
    $valveDelay       = htmlentities(filter_var($recipe['valveDelay']),FILTER_SANITIZE_NUMBER_INT);
    $img_retry        = htmlentities(filter_var($recipe['img_retry']),FILTER_SANITIZE_NUMBER_INT);
    $boxLength        = htmlentities(filter_var($recipe['boxLength']),FILTER_SANITIZE_NUMBER_INT);
    $boxWidth         = htmlentities(filter_var($recipe['boxWidth']),FILTER_SANITIZE_NUMBER_INT);
    $boxHeight        = htmlentities(filter_var($recipe['boxHeight']),FILTER_SANITIZE_NUMBER_INT);



    // Find the top recipe
    $sql = "SELECT COUNT(recipe_id) AS id FROM tpr_db.recipe";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $idNum = $stmt->fetch();
    $_SESSION['adjust-msg'] = $id;
    /*
    * If the top ID is higher equal the chosen id, update the table
    * If not, Insert a new recipe
    */

    if (isset($idNum) && ($id <= $idNum['id'])) {
      // Check whether or not all fields are filled
      if (isset($id) && isset($recipeName) && isset($recipeVelocity) && isset($opNo) && isset($patternNo) && isset($cartHeight) && isset($valveDelay) &&
            isset($img_retry) && isset($boxLength) && isset($boxWidth) && isset($boxHeight)) {

              // Prepare query
              $part1 = "UPDATE tpr_db.recipe SET recipe_name = :name, recipe_velocity = :vel, Operation_mode_id = :opNo, ";
              $part2 = "packing_pattern_id = :patternNo, recipe_valve_delay = :valveDelay, recipe_cart_height = :cartHeight, ";
              $part3 = "recipe_image_retry_no = :img_retry, recipe_box_length = :boxLength, recipe_box_width = :boxWidth, recipe_box_height = :boxHeight ";
              $part4 = "WHERE recipe_id = :id";
              $sql  = $part1 . $part2 . $part3 . $part4;

              $stmt = $this->conn->prepare($sql);
              $array = array(
                'id' 	        => $id,
                'name'        => $recipeName,
                'vel'         => $recipeVelocity,
                'opNo'        => $opNo,
                'patternNo'   => $patternNo,
                'valveDelay'  => $valveDelay,
                'cartHeight'  => $cartHeight,
                'img_retry'   => $img_retry,
                'boxLength'   => $boxLength,
                'boxWidth'    => $boxWidth,
                'boxHeight'   => $boxHeight,
              );

              $stmt->execute(
                $array
              );
              return true;
      } else {
        $_SESSION['adjust_msg'] = "Not working";
      }
    } else {
      $sql = "INSERT INTO tpr_db.recipe (recipe_name, recipe_velocity, Operation_mode_id, packing_pattern_id,
        recipe_valve_delay, recipe_cart_height, recipe_image_retry_no, recipe_box_length, recipe_box_width,
        recipe_box_height) VALUES (:name, :vel, :opNo, :patternNo, :valveDelay, :cartHeight, :img_retry, :boxLength,
        :boxWidth, :boxHeight)";

      $stmt   = $this->conn->prepare($sql);
      $array  = array(
        'name'        => $recipeName,
        'vel'         => $recipeVelocity,
        'opNo'        => $opNo,
        'patternNo'   => $patternNo,
        'valveDelay'  => $valveDelay,
        'cartHeight'  => $cartHeight,
        'img_retry'   => $img_retry,
        'boxLength'   => $boxLength,
        'boxWidth'    => $boxWidth,
        'boxHeight'   => $boxHeight,
      );
      $stmt->execute(
        $array
      );

      $_SESSION['adjust_msg'] = "No recipe #" . $id . "! Created new recipe #" . ($idNum['id']+1) . " called: " . $recipeName;
      $_POST['recipe'] = $idNum['id'] + 1;
    }

  }

}
