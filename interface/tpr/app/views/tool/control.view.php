<?php include '../app/views/partials/menu.php'; ?>

<div class="headline">
  <br>
  <h1>Tool Control</h1>

  <br><br>
  <hr><br><br>
</div>

<!-- Here starts the page -->
<div class="control tool">
  <div id="cuttool">
    <h2>Robot Cut Tool</h2><br>

    <label><h4>Close Cut:</h4></label>
    <button id="cut-close" class="toolcontrol" type="button" data-toggle="">Close</button>

    <br>
    <label><h4>Open Cut:</h4></label>
    <button id="cut-open" class="toolcontrol" type="button" data-toggle="">Open</button>

    <br>

    <label><h4>Load Cut:</h4></label>
    <button id="cut-load" class="toolcontrol" type="button" data-toggle="">Load</button>

    <br>

    <label><h4>Deload Cut:</h4></label>
    <button id="cut-deload" class="toolcontrol" type="button" data-toggle="">Deload</button>

  </div>

  <div id="picktool">
    <h2>Robot Pick Tool</h2><br>

    <label><h4>Close Pick:</h4></label>
    <button id="pick-close" class="toolcontrol" type="button" data-toggle="">Close</button>

    <br>

    <label><h4>Open Pick:</h4></label>
    <button id="pick-open" class="toolcontrol" type="button" data-toggle="">Open</button>

  </div>

  <div id="griptool">
    <h2>PLC</h2><br>

    <label><h4>Close Grip:</h4></label>
    <button id="grip-close" class="toolcontrol" type="button" data-toggle="">Close</button>

    <br>

    <label><h4>Open Grip:</h4></label>
    <button id="grip-open" class="toolcontrol" type="button" data-toggle="">Open</button>

    <br>

    <label><h4>Gripper to home:</h4></label>
    <button id="grip-home" class="toolcontrol" type="button" data-toggle="">Home</button>

    <br>    
    <label><h4>Brake:</h4></label>
    <button id="brake-activate" class="toolcontrol" type="button" data-toggle="">Brake</button>

    <br>    
    <label><h4>Brake release:</h4></label>
    <button id="brake-deactivate" class="toolcontrol" type="button" data-toggle="">Brake release</button>
  </div>

</div>


<?php include '../app/views/partials/foot.php'; ?>
