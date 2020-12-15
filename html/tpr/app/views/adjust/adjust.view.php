<?php include '../app/views/partials/menu.php'; ?>

<div class="headline">
  <img class="loading" src="/tpr/public/img/loading.gif" alt="">
  <br>
  <h1>Adjustments</h1>

  <br><br>
  <hr>
</div>

<?php if (isset($_SESSION['adjust_msg'])) { echo( "<h3>" . $_SESSION['adjust_msg'] . "</h3>");} ?>
<!-- Here starts the page -->
<div id="adjust-div" class="adjust-div" method="post">
  <div class="block">
    <label for="progNo">Choose recipe</label>
    <input type="number" pattern="[0-9]*" id="recipeNo" name="recipeNo" value="<?php if(isset($_SESSION['recipe']) ) { echo $_SESSION['recipe']; } ?>">
    <input class="text" type="text" id="recipeName" name="recipeName" value="<?php if (isset($viewbag['adjust'])) { echo ($viewbag['adjust']['recipe_name']);} ?>">
  </div>


  <div class="block">
    <label for="vel">Adjust velocity</label>
    <input type="range" min="1" max="100" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_velocity'];  $_SESSION['vel'] = $viewbag['adjust']['recipe_velocity'];} ?>" class="slider" id="vel">
  </div>

  <div class="block">
    <label for="opMode">Operation mode</label>
    <input id="opNo" type="number" pattern="[0-9]*" name="opMode" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['Operation_mode_id'];} ?>">
    <span id=opDesc><?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['operation_name'];} ?></span>
  </div>

  <div class="block">
    <label for="packingNo">Packing pattern</label>
    <input id="patternNo" type="number" pattern="[0-9]*" name="packingNo" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['packing_pattern_id'];} ?>">
    <span id="patternDesc"><?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['pattern_name'];} ?></span>
  </div>

  <div class="block">
    <label for="cartHeight">Cart height (mm)</label>
    <input class="boxDesc" id="cartHeight" type="number" pattern="[0-9]*" name="cartHeight" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_cart_height'];} ?>">
  </div>

  <div class="block">
    <label for="packingNo">Valve delay (ms)</label>
    <input class="boxDesc" id="valveDelay" type="number" pattern="[0-9]*" name="valveDelay" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_valve_delay'];} ?>">
  </div>

  <div class="block">
    <label for="packingNo">Image retries</label>
    <input class="boxDesc" id="img_retry" type="number" pattern="[0-9]*" name="img_retry" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_image_retry_no'];} ?>">
  </div>

  <div class="box">
    <img id="box_img_laptop" src="/tpr/public/img/box-streger.png" alt="box-img">
    <div class="block">
      <label for="BoxSize" style="color: blue;">Box length</label>
      <input type="number" pattern="[0-9]*" class="boxDesc" id="boxLength" name="boxLength" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_box_length'];} ?>" style="color: blue;">
    </div>

    <div class="block">
      <label for="BoxSize" style="color: green;">Box width</label>
      <input type="number" pattern="[0-9]*" class="boxDesc" id="boxWidth" name="boxWidth" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_box_width'];} ?>" style="color: green;">
    </div>

    <div class="block">
      <label for="BoxSize" style="color: red;">Box height</label>
      <input type="number" pattern="[0-9]*" class="boxDesc" id="boxHeight" name="boxHeight" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_box_height'];} ?>" style="color: red;">
    </div>

    <img id="box_img_tablet" src="/tpr/public/img/box-streger.png" alt="box-img">
  </div>

  <button type="button"  class="btn" id="adjust-btn" name="adjust-btn">Adjust</button>
</div>





<?php include '../app/views/partials/foot.php'; ?>
