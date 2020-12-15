<?php
foreach($viewbag['alarm'] as $alarm) :
?>
<div class="row" style=" border:1px solid #cbcbcb;">
  <p style="width: 19%; display: inline-block; padding-left: 1em; padding-top: 0.5em;"><?= $alarm['time']?></p>
  <p style="width: 19%; display: inline-block; padding-left: 1em; padding-top: 0.5em;"><?= $alarm['alarmId']?></p>
  <p style="width: 19%; display: inline-block; padding-left: 1em; padding-top: 0.5em;"><?= $alarm['alarmDesc']?></p>
  <p style="width: 19%; display: inline-block; padding-left: 1em; padding-top: 0.5em;"><?= $alarm['alarmCause']?></p>
  <p style="width: 19%; display: inline-block; padding-left: 1em; padding-top: 0.5em;"><?= $alarm['alarmRemedy']?></p>
</div>

<?php endforeach; ?>
<button type="button" class="moreAlarms"  name="moreAlarms"><i class="fas fa-angle-double-down"></i></button>
