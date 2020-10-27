<?php include '../app/views/partials/menu.php'; ?>

<div class="headline">
  <img class="loading" src="/public/img/loading.gif" alt="">
  <br>
  <h1>Main</h1>

  <br><br>
  <hr><br>
</div>

<!-- Here starts the page -->

<div class="main">
  <div class="description">
    <h2>Current program: </h2>
    <label><span id="spanProgram"><?php echo $_SESSION['program_name']; ?></span></label>
    <br>
    <h2>Robot velocity: </h2>
    <label><span id="spanVelocity"><?php echo $_SESSION['velocity'];?></span></label>
    <br>
    <h2>Operation state: </h2>
    <label><span id="spanOpState"><?php echo $_SESSION['opState']; ?></span></label>

  </div>
  <!--<div class="values">

    <br>

    <br>


  </div>-->

  <div class="buttons">
    <button onsubmit="return acall()" class="main-btn fas fa-play" id="start-btn" type="button" data-toggle="" style="background:#00db16;"></button>
    <button onsubmit="return acall()" class="main-btn fas fa-pause" id="pause-btn" type="button" data-toggle="" style="background:#ebc700;"></button>
    <button onsubmit="return acall()" class="main-btn fas fa-stop" id="stop-btn" type="button" data-toggle="" style="background:#eb0000;"></button>

  </div>
  <input id="hidden-input" class="hidden" type="number" name="" value="1">
</div>
<?php include '../app/views/partials/foot.php'; ?>
