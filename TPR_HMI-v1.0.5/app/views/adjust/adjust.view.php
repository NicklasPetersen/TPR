<?php include '../app/views/partials/menu.php'; ?>


<br>
<h1>Adjustments</h1><br><br>
<hr><br>

<!-- Here starts the page -->
<div class="adjust-div" method="post">
  <table>
    <tr>
      <th>
        <label for="progNo">Choose program</label>
      </th>

      <td>
        <input type="number" id="progNo" name="progNo" value="1">
        <span id="progDesc">Prog Desc...</span>
      </td>
    </tr>
    <tr>
      <th>
        <label for="vel">Adjust velocity</label>
      </th>
      <td>
        <input type="range" min="1" max="100" value="10" class="slider" id="vel">
      </td>
    </tr>
    <tr>
      <th>
        <label for="opMode">Operation mode</label><br>
      </th>
      <td>
        <input type="number" name="opMode" value="0">
        <span id=opDesc>Op Desc...</span>
      </td>
    </tr>
    <tr>
      <th>
        <label for="packingNo">Packing pattern</label>
      </th>
      <td>
        <input type="number" name="packingNo" value="0">
        <span id="patternDesc">Pack desc...</span>
      </td>
    </tr>
    <tr>
      <th>
        <label for="BoxSize" style="color: blue;">Box length</label>
      </th>
      <td>
        <input type="number" class="boxDesc" id="boxLength" name="boxLength" value="200">
      </td>
    </tr>
    <tr>
      <th>
        <label for="BoxSize" style="color: green;">Box width</label>
      </th>
      <td>
        <input type="number" class="boxDesc" id="boxwidth" name="boxWidth" value="200">
      </td>
    </tr>
    <tr>
      <th>
        <label for="BoxSize" style="color: red;">Box height</label>
      </th>
      <td>
        <input type="number" class="boxDesc" id="boxHeight" name="boxHeight" value="200">
      </td>
    </tr>
  </table>

  <img src="../../app/views/adjust/box-streger.png" alt="box-img">

  <button type="button" class="btn" id="adjust-btn" name="adjust-btn">Adjust</button>

</div>
<!--
<form id="adjust-form" method="post">
  <input type="text" name="firstname" id="firstname" placeholder="Firstname">
  <input type="text" name="lastname" id="lastname" placeholder="Lastname">
  <input type="submit" value="Join"> <br>


</form>

<div id="result">
  <?php echo $_POST['firstname']  ?>
</div>

-->



<?php include '../app/views/partials/foot.php'; ?>
