<?php include '../app/views/partials/menu.php'; ?>

<div class="headline">
  <br>
  <h1>Setup</h1>

  <br><br>
  <hr><br><br>
</div>

<!-- BOOTSTRAP MODAL(s) HERE -->
<div class="modal fade" id="accept-modal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3>Are the robot outside the rows?</h3>
      </div>
      <div class="modal-body">
        <input id="calib-yes-btn" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#choose-calib-modal" value="Yes">
        <input id="calib-no-btn" class="btn btn-primary" data-dismiss="modal" value="No">
      </div>
      <div class="modal-footer">
        <input class="btn btn-primary" data-dismiss="modal" value="Dismiss">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="choose-calib-modal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Choose Calibration type</h3>
      </div>
      <div class="modal-body">
        <h4>Stereo calibration</h4>
        <input id="he-cut-start" class="btn btn-primary calib" data-dismiss="modal" data-toggle="modal" data-target="#he-Modal" value="Stationary camera">
        <input id="he-pick-start" class="btn btn-primary calib" data-dismiss="modal" data-toggle="modal" data-target="#he-Modal" value="Pick-mounted camera">
        <br><br>
        <h4>Hand-Eye calibration</h4>
        <input id="ee-cut-start" class="btn btn-primary calib" data-dismiss="modal" data-toggle="modal" data-target="#ee-cut-Modal" value="Stationary camera">
        <input id="ee-pick-start" class="btn btn-primary calib" data-dismiss="modal" data-toggle="modal" data-target="#ee-pick-Modal" value="Pick-mounted camera">
      </div>
      <div class="modal-footer">
        <input class="btn btn-primary" data-dismiss="modal" value="Dismiss">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="he-Modal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Mount calibration plate on Robot Cut</h3>
      </div>
      <div class="modal-body">

        <input id="calib-mounted" class="btn btn-primary calib" data-dismiss="modal" data-toggle="modal" data-target="#he-finish-Modal" value="Continue">

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="he-finish-Modal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">When calibration finished, remove calibration plate</h3>
      </div>
      <div class="modal-body">

        <input id="calib-unmounted" class="btn btn-primary calib" data-dismiss="modal"value="Plate removed">

      </div>
    </div>
  </div>
</div>

<!-- Here starts the page -->
<div class="setup">
  <!-- Robot connection + input dimensions + calibration + calib check -->
  <div class="rob-conn">
    <h2>Robot connection</h2>
    <button class="setup-btn" id="rob-con" type="button" name="connect">Connect</button>
    <button class="setup-btn" id="rob-discon"type="button" name="disconnect">Disconnect</button>
  </div>

  <div class="cut-tool">
    <h3>Choose program</h3>
    <input id="program_no" type="number" pattern="[0-9]*" name="program" placeholder="Program number" min="1" max="10" value="<?php echo $_SESSION['program']; ?>">
    <button id="program" class="robot-frame" type="button" name="button">Update</button>
  </div>

  <div class="cut-tool">
    <label>New tool-frame: Robot Cut</label>
    <input id="ct-x" type="number" pattern="[0-9]*" name="cut-tool-x" placeholder="X" min="1" max="1000" value="<?php echo $_SESSION['ct-x']; ?>">
    <input id="ct-y" type="number" pattern="[0-9]*" name="cut-tool-y" placeholder="Y" min="1" max="1000" value="<?php echo $_SESSION['ct-y']; ?>">
    <input id="ct-z" type="number" pattern="[0-9]*" name="cut-tool-z" placeholder="Z" min="1" max="1000" value="<?php echo $_SESSION['ct-z']; ?>">
    <input id="ct-a" type="number" pattern="[0-9]*" name="cut-tool-a" placeholder="A" min="-180" max="180" value="<?php echo $_SESSION['ct-a']; ?>">
    <input id="ct-e" type="number" pattern="[0-9]*" name="cut-tool-e" placeholder="E" min="0" max="180" value="<?php echo $_SESSION['ct-e']; ?>">
    <input id="ct-r" type="number" pattern="[0-9]*" name="cut-tool-r" placeholder="R" min="-180" max="180" value="<?php echo $_SESSION['ct-r']; ?>">
    <button id="ct-update" class="robot-frame" type="button" name="button">Update</button>
  </div>

  <div class="pick-tool">
    <label>New tool-frame: Robot Pick</label>
    <input id="pt-x" type="number" pattern="[0-9]*" name="pick-tool-x" placeholder="X" min="1" max="1000" value="<?php echo $_SESSION['pt-x']; ?>">
    <input id="pt-y" type="number" pattern="[0-9]*" name="pick-tool-y" placeholder="Y" min="1" max="1000" value="<?php echo $_SESSION['pt-y']; ?>">
    <input id="pt-z" type="number" pattern="[0-9]*" name="pick-tool-z" placeholder="Z" min="1" max="1000" value="<?php echo $_SESSION['pt-z']; ?>">
    <input id="pt-a" type="number" pattern="[0-9]*" name="pick-tool-a" placeholder="A" min="-180" max="180" value="<?php echo $_SESSION['pt-a']; ?>">
    <input id="pt-e" type="number" pattern="[0-9]*" name="pick-tool-e" placeholder="E" min="0" max="180" value="<?php echo $_SESSION['pt-e']; ?>">
    <input id="pt-r" type="number" pattern="[0-9]*" name="pick-tool-r" placeholder="R" min="-180" max="180" value="<?php echo $_SESSION['pt-r']; ?>">
    <button id="pt-update" class="robot-frame" type="button" name="button">Update</button>
  </div>

  <div class="cut-work">
    <label>New work-frame: Robot Cut</label>
    <input id="cw-x" type="number" pattern="[0-9]*" name="cut-work-x" placeholder="X" min="-1000" max="1000" value="<?php echo $_SESSION['cw-x']; ?>">
    <input id="cw-y" type="number" pattern="[0-9]*" name="cut-work-y" placeholder="Y" min="-1000" max="1000" value="<?php echo $_SESSION['cw-y']; ?>">
    <input id="cw-z" type="number" pattern="[0-9]*" name="cut-work-z" placeholder="Z" min="-1000" max="1000" value="<?php echo $_SESSION['cw-z']; ?>">
    <input id="cw-a" type="number" pattern="[0-9]*" name="cut-work-a" placeholder="A" min="-180" max="180" value="<?php echo $_SESSION['cw-a']; ?>">
    <input id="cw-e" type="number" pattern="[0-9]*" name="cut-work-e" placeholder="E" min="0" max="180" value="<?php echo $_SESSION['cw-e']; ?>">
    <input id="cw-r" type="number" pattern="[0-9]*" name="cut-work-r" placeholder="R" min="-180" max="180" value="<?php echo $_SESSION['cw-r']; ?>">
    <button id="cw-update" class="robot-frame" type="button" name="button">Update</button>
  </div>

  <div class="pick-work">
    <label>New work-frame: Robot Pick</label>
    <input id="pw-x" type="number" pattern="[0-9]*" name="pick-work-x" placeholder="X" min="-1000" max="1000" value="<?php echo $_SESSION['pw-x']; ?>">
    <input id="pw-y" type="number" pattern="[0-9]*" name="pick-work-y" placeholder="Y" min="-1000" max="1000" value="<?php echo $_SESSION['pw-y']; ?>">
    <input id="pw-z" type="number" pattern="[0-9]*" name="pick-work-z" placeholder="Z" min="-1000" max="1000" value="<?php echo $_SESSION['pw-z']; ?>">
    <input id="pw-a" type="number" pattern="[0-9]*" name="pick-work-a" placeholder="A" min="-180" max="180" value="<?php echo $_SESSION['pw-a']; ?>">
    <input id="pw-e" type="number" pattern="[0-9]*" name="pick-work-e" placeholder="E" min="0" max="180" value="<?php echo $_SESSION['pw-e']; ?>">
    <input id="pw-r" type="number" pattern="[0-9]*" name="pick-work-r" placeholder="R" min="-180" max="180" value="<?php echo $_SESSION['pw-r']; ?>">
    <button id="pw-update" class="robot-frame" type="button" name="button">Update</button>
  </div>


  <div class="calib">
    <label>Start calibration</label>
    <button type="button" name="calib-btn" data-toggle="modal" data-target="#accept-modal">Calibrate</button>

    <br>

    <label>Check calibration</label>
    <button class="setup-btn" id="calib-check" type="button" name="calib-check">Check</button>
  </div>

</div>


<?php include '../app/views/partials/foot.php'; ?>
