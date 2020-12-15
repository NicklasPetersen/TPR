<div class="row" style=" border:1px solid #cbcbcb;">
  <label style="width: 19%; padding-left: 1em;">Time</label>
  <label style="width: 19%; padding-left: 1em;">Alarm #</label>
  <label style="width: 19%; padding-left: 1em;">Description</label>
  <label style="width: 19%; padding-left: 1em;">Cause</label>
  <label style="width: 19%; padding-left: 1em;">Remedy</label>
</div>

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
<button id="evenMoreAlarms" type="button" class="moreAlarms"  name="moreAlarms"><i class="fas fa-angle-double-down"></i></button>
