<?php include '../app/views/partials/menu.php'; ?>


<br>
<h1>Adjustments</h1><br><br>
<hr>
<!-- Here starts the page -->
<div id="adjust-form" method="post">
  <label for="progNo">Choose program</label><br>
  <input type="number" id="progNo" name="progNo" value="1">
  <span id="progDesc"></span>
  <br><br>

  <label for="vel">Adjust velocity</label><br>
  <input type="range" id="vel" name="vel" value="10">

  <label for="opMode">Operation mode</label><br>
  <input type="number" name="opMode" value="0">

  <br><br>

  <label for="packingNo"></label>Packing pattern<br>
  <input type="number" name="packingNo" value="0">
  <span id="patternDesc"></span><br><br>

  <label for="BoxSize">Box length</label><br>
  <input type="number" id="boxLength" name="boxLength" value="200"><br>

  <label for="BoxSize">Box width</label><br>
  <input type="number" id="boxwidth" name="boxWidth" value="200"><br>

  <label for="BoxSize">Box height</label><br>
  <input type="number" id="boxHeight" name="boxHeight" value="200"><br>
  <button type="button" name="button" onClick="drawCube()"></button>


</div>

<form id="adjust-form" method="post">
  <input type="text" name="firstname" id="firstname" placeholder="Firstname">
  <input type="text" name="lastname" id="lastname" placeholder="Lastname">
  <input type="submit" value="Join"> <br>


</form>

<div id="result">
  <?php echo $_POST['firstname']  ?>
</div>





<?php include '../app/views/partials/foot.php'; ?>
