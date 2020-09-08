<?php include '../app/views/partials/menu.php'; ?>

<br>
<h1>Main</h1><br><br>
<hr>
<br>

<!-- Here starts the page -->
<div class="main">
  <div class="description">
    <h2>Current program: </h2>
    <br>
    <h2>Robot velocity: </h2>
    <br>
    <h2>Run-time: </h2>

  </div>
  <div class="values">
    <label><span id="spanProgram">No program</span></label>
    <br>
    <label><span id="spanVelocity">No velocity</span></label>
    <br>
    <label><span id="spanProgram">Run-time</span></label>

  </div>

  <div class="buttons">
    <button class="start-btn" type="button" data-toggle="" style="background:#00db16;">Start</button>
    <button class="pause-btn" type="button" data-toggle="" style="background:#ebc700;">Pause</button>
    <button class="stop-btn" type="button" data-toggle="" style="background:#eb0000;">Stop</button>

  </div>
</div>
<?php include '../app/views/partials/foot.php'; ?>
