<?php include '../app/views/partials/menu.php'; ?>

<div class="modal fade" id="alarm-modal" role="dialog">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h2>Alarm</h2>
      </div>
      <div class="modal-body">


      </div>
      <div class="modal-footer">
        <input id="alarmAck" type="submit" class="btn btn-primary" value="Acknowledge">
      </div>
    </div>
  </div>
</div>

<div class="headline">
  <br>
  <h1>Alarm</h1>

  <br><br>
  <hr><br>
</div>

<!-- Here starts the page -->
<div class="alarm-div">
  <!-- Trigger the modal with button -->
  <button id="acknowledgeAlarm" type="button"  name="Acknowledge">Acknowledge Alarm</button>
  <br><br>

  <div id="alarm-table" class="alarm-table">
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
    <button id="moreAlarms" class="moreAlarms" type="button"  name="moreAlarms"><i class="fas fa-angle-double-down"></i></button>
  </div>

</div>
<?php include '../app/views/partials/foot.php'; ?>
