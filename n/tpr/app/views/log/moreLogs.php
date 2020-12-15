<?php
foreach($viewbag['log'] as $log) :
?>
<div class="row" style=" border:1px solid #cbcbcb;">
  <p style="width: 15%; display: inline-block; padding-left: 1em; padding-top: 0.5em;"><?= $log['time']?></p>
  <p style="width: 15%; display: inline-block; padding-left: 1em; padding-top: 0.5em;"><?= $log['runTime']?></p>
  <p style="width: 15%; display: inline-block; padding-left: 1em; padding-top: 0.5em;"><?= $log['imageAmount']?></p>
  <p style="width: 15%; display: inline-block; padding-left: 1em; padding-top: 0.5em;"><?= $log['stickoutCut']?></p>
  <p style="width: 15%; display: inline-block; padding-left: 1em; padding-top: 0.5em;"><?= $log['retry']?></p>
  <p style="width: 15%; display: inline-block; padding-left: 1em; padding-top: 0.5em;"><?= $log['success']?></p>
</div>

<?php endforeach; ?>
<button id="moreLogs" class="moreLogs" type="button"  name="moreLogs"><i class="fas fa-angle-double-down"></i></button>
