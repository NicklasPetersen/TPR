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
    <table class="vision-table">
      <tr>
        <td>
          <label>Robot Cut</label>
        </td>

        <td>
          <label>Robot Pick</label>
        </td>

        <td>
          <label>Diverse</label>
        </td>
      </tr>
        <td>
          <table>
            <tr>
              <td>
                <p>Calib cam</p>
              </td>

              <th>
                <p>2</p>
              </th>
            </tr>

            <tr>
              <td>
                <p>Get new position</p>
              </td>

              <th>
                <p>3</p>
              </th>
            </tr>

            <tr>
              <td>
                <p>End Calib</p>
              </td>

              <th>
                <p>4</p>
              </th>
            </tr>

            <tr>
              <td>
                <p>Get plant data</p>
              </td>

              <th>
                <p>10</p>
              </th>
            </tr>

            <tr>
              <td>
                <p>Test coordinate</p>
              </td>

              <th>
                <p>11</p>
              </th>
            </tr>


          </table>
        </td>
      <!---------------------------------------------------------->
        <td>
          <table>
            <tr>
              <td>
                <p>Calib cam</p>
              </td>

              <th>
                <p>5</p>
              </th>
            </tr>

            <tr>
              <td>
                <p>Get new position</p>
              </td>

              <th>
                <p>6</p>
              </th>
            </tr>

            <tr>
              <td>
                <p>End calib</p>
              </td>

              <th>
                <p>7</p>
              </th>
            </tr>

            <tr>
              <td>
                <p>Get plant data</p>
              </td>

              <th>
                <p>12</p>
              </th>
            </tr>

            <tr>
              <td>
                <p>Test coordinate</p>
              </td>

              <th>
                <p>13</p>
              </th>
            </tr>

          </table>
        </td>
      <!---------------------------------------------------------->
        <td>
          <table>
            <tr>
              <td>
                <p>Hello World</p>
              </td>

              <th>
                <p>1</p>
              </th>
            </tr>

            <tr>
              <td>
                <p>Start plant check</p>
              </td>

              <th>
                <p>8</p>
              </th>
            </tr>

            <tr>
              <td>
                <p>Stop plant check</p>
              </td>

              <th>
                <p>9</p>
              </th>
            </tr>

            <tr>
              <td>
                <p>Restart</p>
              </td>

              <th>
                <p>14</p>
              </th>
            </tr>

            <tr>
              <td>
                <p>Shutdown</p>
              </td>

              <th>
                <p>15</p>
              </th>
            </tr>

          </table>
        </td>
      <!---------------------------------------------------------->



    </table>
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
