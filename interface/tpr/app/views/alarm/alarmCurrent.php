
  <h3><?= $viewbag['alarm']['deviceWhich'] ?> error: <?= $viewbag['alarm']['alarmId'] ?> <?= $viewbag['alarm']['alarmDesc'] ?></h3>
  <h4><label>Cause</label></h4>
  <p><?= $viewbag['alarm']['alarmCause'] ?></p><br>

  <h4><label>Remedy</label></h4>
  <p><?= $viewbag['alarm']['alarmRemedy'] ?></p><br>
  <p id="alId" hidden><?= $viewbag['alarm']['alarmId'] ?></p>
