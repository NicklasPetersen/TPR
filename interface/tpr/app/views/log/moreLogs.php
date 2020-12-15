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

