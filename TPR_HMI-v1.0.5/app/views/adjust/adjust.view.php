<?php include '../app/views/partials/menu.php'; ?>

<div class="headline">
  <img class="loading" src="/public/img/loading.gif" alt="">
  <br>
  <h1>Adjustments</h1>

  <br><br>
  <hr>
</div>


<!-- Here starts the page -->
<div id="adjust-div" class="adjust-div" method="post">
  <div class="block">
    <label for="progNo">Choose recipe</label>
    <input type="number" id="recipeNo" name="recipeNo" value="<?php if(isset($_SESSION['recipe']) ) { echo $_SESSION['recipe']; } ?>">
    <span id="recipeName"><?php if (isset($viewbag['adjust'])) { echo ($viewbag['adjust']['recipe_name']);} ?></span>
  </div>


  <div class="block">
    <label for="vel">Adjust velocity</label>
    <input type="range" min="1" max="100" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_velocity'];  $_SESSION['vel'] = $viewbag['adjust']['recipe_velocity'];} ?>" class="slider" id="vel">
  </div>

  <div class="block">
    <label for="opMode">Operation mode</label>
    <input id="opNo" type="number" name="opMode" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['Operation_mode_id'];} ?>">
    <span id=opDesc><?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['operation_name'];} ?></span>
  </div>

  <div class="block">
    <label for="packingNo">Packing pattern</label>
    <input id="patternNo" type="number" name="packingNo" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['packing_pattern_id'];} ?>">
    <span id="patternDesc"><?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['pattern_name'];} ?></span>
  </div>

  <div class="block">
    <label for="cartHeight">Cart height (mm)</label>
    <input class="boxDesc" id="cartHeight" type="number" name="cartHeight" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_cart_height'];} ?>">
  </div>

  <div class="block">
    <label for="packingNo">Valve delay (ms)</label>
    <input class="boxDesc" id="valveDelay" type="number" name="valveDelay" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_valve_delay'];} ?>">
  </div>

  <div class="block">
    <label for="packingNo">Image retries</label>
    <input class="boxDesc" id="img_retry" type="number" name="img_retry" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_image_retry_no'];} ?>">
  </div>

  <div class="box">
    <img id="box_img_laptop" src="/public/img/box-streger.png" alt="box-img">
    <div class="block">
      <label for="BoxSize" style="color: blue;">Box length</label>
      <input type="number" class="boxDesc" id="boxLength" name="boxLength" value="200" style="color: blue;">
    </div>

    <div class="block">
      <label for="BoxSize" style="color: green;">Box width</label>
      <input type="number" class="boxDesc" id="boxwidth" name="boxWidth" value="200" style="color: green;">
    </div>

    <div class="block">
      <label for="BoxSize" style="color: red;">Box height</label>
      <input type="number" class="boxDesc" id="boxHeight" name="boxHeight" value="200" style="color: red;">
    </div>

    <img id="box_img_tablet" src="/public/img/box-streger.png" alt="box-img">
  </div>

  <button type="button"  class="btn" id="adjust-btn" name="adjust-btn">Adjust</button>
</div>





<?php include '../app/views/partials/foot.php'; ?>
