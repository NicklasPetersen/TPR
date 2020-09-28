<?php include '../app/views/partials/menu.php'; ?>


<br>
<h1>Adjustments</h1><br><br>
<hr><br>

<!-- Here starts the page -->
<div id="adjust-div" class="adjust-div" method="post">
  <table>
    <tr>
      <th>
        <label for="progNo">Choose recipe</label>
      </th>

      <td>
        <input type="number" id="recipeNo" name="recipeNo" value="<?php if(isset($_SESSION['recipe']) ) { echo $_SESSION['recipe']; } ?>">
        <span id="recipeName"><?php if (isset($viewbag['adjust'])) { echo ($viewbag['adjust']['recipe_name']);} ?></span>
      </td>
    </tr>

    <tr>
      <th>
        <label for="vel">Adjust velocity</label>
      </th>
      <td>
        <input type="range" min="1" max="100" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_velocity'];  $_SESSION['vel'] = $viewbag['adjust']['recipe_velocity'];} ?>" class="slider" id="vel">
      </td>
    </tr>
    <tr>
      <th>
        <label for="opMode">Operation mode</label><br>
      </th>
      <td>
        <input id="opNo" type="number" name="opMode" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['Operation_mode_id'];} ?>">
        <span id=opDesc><?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['operation_name'];} ?></span>
      </td>
    </tr>
    <tr>
      <th>
        <label for="packingNo">Packing pattern</label>
      </th>
      <td>
        <input id="patternNo" type="number" name="packingNo" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['packing_pattern_id'];} ?>">
        <span id="patternDesc"><?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['pattern_name'];} ?></span>
      </td>
    </tr>
    <tr>
      <th>
        <label for="cartHeight">Cart height (mm)</label>
      </th>
      <td>
        <input class="boxDesc" id="cartHeight" type="number" name="cartHeight" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_cart_height'];} ?>">
      </td>
    </tr>
    <tr>
      <th>
        <label for="packingNo">Valve delay (ms)</label>
      </th>
      <td>
        <input class="boxDesc" id="valveDelay" type="number" name="valveDelay" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_valve_delay'];} ?>">
      </td>
    </tr>
    <tr>
      <th>
        <label for="packingNo">Number of image retries</label>
      </th>
      <td>
        <input class="boxDesc" id="img_retry" type="number" name="img_retry" value="<?php if (isset($viewbag['adjust'])) {echo $viewbag['adjust']['recipe_image_retry_no'];} ?>">
      </td>
    </tr>
    <tr>
      <th>
        <label for="BoxSize" style="color: blue;">Box length</label>
      </th>
      <td>
        <input type="number" class="boxDesc" id="boxLength" name="boxLength" value="200" style="color: blue;">
      </td>
    </tr>
    <tr>
      <th>
        <label for="BoxSize" style="color: green;">Box width</label>
      </th>
      <td>
        <input type="number" class="boxDesc" id="boxwidth" name="boxWidth" value="200" style="color: green;">
      </td>
    </tr>
    <tr>
      <th>
        <label for="BoxSize" style="color: red;">Box height</label>
      </th>
      <td>
        <input type="number" class="boxDesc" id="boxHeight" name="boxHeight" value="200" style="color: red;">
      </td>
    </tr>
  </table>

  <img src="../../app/views/adjust/box-streger.png" alt="box-img">

  <button type="button"  class="btn" id="adjust-btn" name="adjust-btn">Adjust</button>

</div>





<?php include '../app/views/partials/foot.php'; ?>
