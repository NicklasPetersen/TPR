<?php include '../app/views/partials/menu.php'; ?>

<div class="headline">
  <img class="loading" src="/tpr/public/img/loading.gif" alt="">
  <br>
  <h1>Log</h1>

  <br><br>
  <hr><br>
</div>

<!-- Here starts the page -->
<div class="log">

  <div id="log-table" class="log-table">
    <div class="row" style=" border:1px solid #cbcbcb;">
      <label style="width: 15%; padding-left: 1em;">Time</label>
      <label style="width: 15%; padding-left: 1em;">Run time</label>
      <label style="width: 15%; padding-left: 1em;">images taken</label>
      <label style="width: 15%; padding-left: 1em;">Stick-outs cut</label>
      <label style="width: 15%; padding-left: 1em;">Image configuration change</label>
      <label style="width: 15%; padding-left: 1em;">Cut completed</label>
    </div>

    <?php
    foreach($viewbag['log'] as $log) :
    ?>
    <div class="row" style=" border:1px solid #cbcbcb;">
      <p style="width: 15%; display: inline-block; padding-left: 1em; padding-top: 0.5em;"><?= $log['time']?></p>
      <p style="width: 15%; display: inline-block; padding-left: 1em; padding-top: 0.5em;"><?= $log['minutes']?></p>
      <p style="width: 15%; display: inline-block; padding-left: 1em; padding-top: 0.5em;"><?= $log['imageAmount']?></p>
      <p style="width: 15%; display: inline-block; padding-left: 1em; padding-top: 0.5em;"><?= $log['stickoutCut']?></p>
      <p style="width: 15%; display: inline-block; padding-left: 1em; padding-top: 0.5em;"><?= $log['retry']?></p>
      <p style="width: 15%; display: inline-block; padding-left: 1em; padding-top: 0.5em;"><?= $log['success']?></p>
    </div>

    <?php endforeach; ?>
    <button id="moreLogs" class="moreLogs" type="button"  name="moreLogs"><i class="fas fa-angle-double-down"></i></button>
  </div>


</div>
<?php include '../app/views/partials/foot.php'; ?>
