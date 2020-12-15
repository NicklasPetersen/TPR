<?php include '../app/views/partials/menu.php'; ?>

<div class="headline">
  <img class="loading" src="/tpr/public/img/loading.gif" alt="">
  <br>
  <h1>Vision</h1>

  <br><br>
  <hr><br>
</div>

<!-- Here starts the page -->
<div class="control">
  <div class="control-table">
    <div class="cut">
      <h3>Stationary camera</h3>

      <span><label>Start cam calibration</label></span>
      <span>2</span>
      <br>

      <span><label>New position for calibration</label></span>
      <span>3</span>
      <br>

      <span><label>End cam calibration</label></span>
      <span>4</span>
      <br>

      <span><label>Start plant check</label></span>
      <span>8</span>
      <br>

      <span><label>Stop plant check</label></span>
      <span>9</span>
      <br>

      <span><label>Get plant data</label></span>
      <span>10</span>
      <br>

      <span><label>Test Get plant data</label></span>
      <span>11</span>
      <br>
    </div>

    <div class="pick">
      <h3>Robot pick camera</h3>

      <span><label>Start cam calibration</label></span>
      <span>5</span>
      <br>

      <span><label>New position for calibration</label></span>
      <span>6</span>
      <br>

      <span><label>End cam calibration</label></span>
      <span>7</span>
      <br>

      <span><label>Get plant data</label></span>
      <span>12</span>
      <br>

      <span><label>Test Get plant data</label></span>
      <span>13</span>
      <br>
    </div>

    <div class="diverse">
      <h3>Diverse</h3>

      <span><label>Hello world</label></span>
      <span>1</span>
      <br>

      <span><label>Restart</label></span>
      <span>14</span>
      <br>

      <span><label>Shutdown</label></span>
      <span>15</span>
      <br>
    </div>
  </div>


  <div class="commands">
    <h3>Send vision commands:</h3>

    <input id="vision-input" pattern="[0-9]*" type="number" name="vision-command" min="0" max="20" placeholder="Enter command">
    <button id="vision-btn" name="send-command">Send command</button>
    <br>

  </div>

  <div class="vision-pic">
    <iframe src="/tpr/public/img/logo.png" width="300" height="200"></iframe>
  </div>




</div>
<?php include '../app/views/partials/foot.php'; ?>
