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
    <h2>Operation state: </h2>

  </div>
  <div class="values">
    <label><span id="spanProgram"><?php echo $viewbag['program']; ?></span></label>
    <br>
    <label><span id="spanVelocity"><?php echo $viewbag['main_info']['mqtt/plc2hmi/velocity'];?></span></label>
    <br>
    <label><span id="spanOpState"><?php echo $_SESSION['opState']; ?></span></label>

  </div>

  <div class="buttons">
    <button onsubmit="return acall()" class="main-btn fas fa-play" id="start-btn" type="button" data-toggle="" style="background:#00db16;"></button>
    <button onsubmit="return acall()" class="main-btn fas fa-pause" id="pause-btn" type="button" data-toggle="" style="background:#ebc700;"></button>
    <button onsubmit="return acall()" class="main-btn fas fa-stop" id="stop-btn" type="button" data-toggle="" style="background:#eb0000;"></button>

  </div>
  <input id="hidden-input" class="hidden" type="number" name="" value="1">
</div>
<?php include '../app/views/partials/foot.php'; ?>
