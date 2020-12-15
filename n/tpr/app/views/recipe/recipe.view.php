<?php include '../app/views/partials/menu.php'; ?>

<div class="headline">
  <br>
  <h1>Choose recipe</h1>

  <br><br>
  <hr><br>
</div>

<!-- Here starts the page -->
<div class="recipe">
  <div class="block">
    <label>Choose recipe</label>
    <input class="number" type="number" pattern="[0-9]*" id="recipeNoInput" name="recipeNo" value="<?php if(isset($_SESSION['recipe']) ) { echo $_SESSION['recipe']; } ?>">
    <span class="desc" id="recipeNameSpan"><?php if (isset($viewbag['adjust'])) { echo ($viewbag['adjust']['recipe_name']);} ?></span>
  </div>


  <div class="block">
    <label>Velocity</label>
    <input id="recipeVel" type="range" min="1" max="100" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_velocity'];  $_SESSION['vel'] = $viewbag['adjust']['recipe_velocity'];} ?>" class="slider">
  </div>

  <div class="block">
    <label>Operation mode</label>
    <span class="number" id="recipeOpNo"><?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['Operation_mode_id'];} ?></span>
    <span class="desc" id=recipeOpDesc><?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['operation_name'];} ?></span>
  </div>

  <div class="block">
    <label>Packing pattern</label>
    <span class="number" id="recipePatternNo"><?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['packing_pattern_id'];} ?></span>
    <span class="desc" id="recipePatternDesc"><?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['pattern_name'];} ?></span>
  </div>

  <div class="block">
    <label>Cart height (mm)</label>
    <span class="boxDesc" id="recipeCartHeight"><?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_cart_height'];} ?>mm</span>
  </div>

  <div class="block">
    <label>Valve delay (ms)</label>
    <span class="boxDesc" id="recipeValveDelay"><?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_valve_delay'];} ?>ms</span>
  </div>

  <div class="block">
    <label>Image retries</label>
    <span class="boxDesc" id="recipeImg_retry"><?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_image_retry_no'];} ?> retries</span>
  </div>

  <div class="box">
    <img id="box_img_laptop" src="/tpr/public/img/box-streger.png" alt="box-img">
    <div class="block">
      <label style="color: blue;">Box length</label>
      <span class="boxDesc" id="recipeBoxLength" style="color: blue;"><?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_box_length'];} ?></span>
    </div>

    <div class="block">
      <label style="color: green;">Box width</label>
      <span class="boxDesc" id="recipeBoxwidth" style="color: green;"><?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_box_width'];} ?></span>
    </div>

    <div class="block">
      <label style="color: red;">Box height</label>
      <span class="boxDesc" id="recipeBoxHeight" style="color: red;"><?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_box_height'];} ?></span>
    </div>

    <img id="box_img_tablet" src="/tpr/public/img/box-streger.png" alt="box-img">
  </div>
  <button type="button"  class="btn" id="recipe-btn" name="adjust-btn">Adjust</button>
</div>


<?php include '../app/views/partials/foot.php'; ?>
