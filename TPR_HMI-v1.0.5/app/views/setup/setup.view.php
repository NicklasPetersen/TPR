<?php include '../app/views/partials/menu.php'; ?>

<br>
<h1>Setup</h1><br><br>
<hr><br>

<!-- Here starts the page -->
<div class="setup">
  <!-- Robot connection + input dimensions + calibration + calib check -->

  <table>
    <tr>
      <th>
        <h2>Robot connection</h2>
      </th>
      <th>
        <button type="button" name="connect">Connect</button>
        <button type="button" name="disconnect">Disconnect</button>
      </th>
    </tr>

    <tr>
      <td>
        <label>New tool-frame: Robot Cut</label>
      </td>
      <td>
        <input type="number" name="cut-tool-x" placeholder="X">
        <input type="number" name="cut-tool-y" placeholder="Y">
        <input type="number" name="cut-tool-z" placeholder="Z">
        <input type="number" name="cut-tool-a" placeholder="A">
        <input type="number" name="cut-tool-e" placeholder="E">
        <input type="number" name="cut-tool-r" placeholder="R">
      </td>
    </tr>

    <tr>
      <td>
        <label>New tool-frame: Robot Pick</label>
      </td>
      <td>
        <input type="number" name="pick-tool-x" placeholder="X">
        <input type="number" name="pick-tool-y" placeholder="Y">
        <input type="number" name="pick-tool-z" placeholder="Z">
        <input type="number" name="pick-tool-a" placeholder="A">
        <input type="number" name="pick-tool-e" placeholder="E">
        <input type="number" name="pick-tool-r" placeholder="R">
      </td>
    </tr>

    <tr>
      <td>
        <label>New work-frame: Robot Cut</label>
      </td>
      <td>
        <input type="number" name="cut-work-x" placeholder="X">
        <input type="number" name="cut-work-y" placeholder="Y">
        <input type="number" name="cut-work-z" placeholder="Z">
        <input type="number" name="cut-work-a" placeholder="A">
        <input type="number" name="cut-work-e" placeholder="E">
        <input type="number" name="cut-work-r" placeholder="R">
      </td>
    </tr>

    <tr>
      <td>
        <label>New work-frame: Robot Pick</label>
      </td>
      <td>
        <input type="number" name="pick-work-x" placeholder="X">
        <input type="number" name="pick-work-y" placeholder="Y">
        <input type="number" name="pick-work-z" placeholder="Z">
        <input type="number" name="pick-work-a" placeholder="A">
        <input type="number" name="pick-work-e" placeholder="E">
        <input type="number" name="pick-work-r" placeholder="R">
      </td>
    </tr>
  </table>




  <!-- INput: Tool elementer + work-frame +  -->

</div>


<?php include '../app/views/partials/foot.php'; ?>
