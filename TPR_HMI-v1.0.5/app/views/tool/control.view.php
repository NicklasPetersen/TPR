<?php include '../app/views/partials/menu.php'; ?>

<br>
<h1>Tool Control</h1><br><br>
<hr>

<!-- Here starts the page -->
<div class="control">
  <div id="cuttool">
    <h2>Robot Cut Tool:</h2><br>
      <table>
        <tr>
          <td>
            <label><h4>Close Cut:</h4></label>
          </td>

          <th>
            <button class="toolcontrol" type="button" data-toggle="">Close</button>
          </th>
        </tr>

        <tr>
          <td>
            <label><h4>Open Cut:</h4></label>
          </td>
          <th>
            <button class="toolcontrol" type="button" data-toggle="">Open</button>
          </th>
        </tr>

        <tr>
          <td>
            <label><h4>Load Cut:</h4></label>
          </td>
          <th>
            <button class="toolcontrol" type="button" data-toggle="">Load</button>
          </th>
        </tr>

        <tr>
          <td>
            <label><h4>Deload Cut:</h4></label>
          </td>
          <th>
            <button class="toolcontrol" type="button" data-toggle="">Deload</button>
          </th>
        </tr>
      </table>

  </div>

  <div id="picktool">
    <h2>Robot Pick Tool</h2><br>

    <table>
      <tr>
        <td>
          <label><h4>Close Pick:  </h4></label>
        </td>
        <th>
          <button class="toolcontrol" type="button" data-toggle="">Close</button>
        </th>
      </tr>

      <tr>
        <td>
          <label><h4>Open Pick:  </h4></label>
        </td>
        <th>
          <button class="toolcontrol" type="button" data-toggle="">Open</button>
        </th>
      </tr>
    </table>

  </div>

  <div id="griptool">
    <h2>Gripper</h2><br>

    <table>
      <tr>
        <td>
          <label><h4>Close Grip:  </h4></label>
        </td>
        <th>
          <button class="toolcontrol" type="button" data-toggle="">Close</button>
        </th>
      </tr>

      <tr>
        <td>
          <label><h4>Open Grip:  </h4></label>
        </td>
        <th>
          <button class="toolcontrol" type="button" data-toggle="">Open</button>
        </th>
      </tr>

      <tr>
        <td>
          <label><h4>Gripper to home:  </h4></label>
        </td>
        <th>
          <button class="toolcontrol" type="button" data-toggle="">Home</button>
        </th>
      </tr>
    </table>

  </div>

</div>


<?php include '../app/views/partials/foot.php'; ?>
