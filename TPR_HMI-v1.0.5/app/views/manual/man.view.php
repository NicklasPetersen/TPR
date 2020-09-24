<?php include '../app/views/partials/menu.php'; ?>

<br>
<h1>Manual</h1><br><br>
<hr>
<br>

<!-- BOOTSTRAP MODALs HERE -->
<div class="modal fade" id="resetModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Choose reset type</h3>
      </div>
      <div class="modal-body">
        <input id="resetWith-btn" class="btn btn-primary" data-dismiss="modal" value="Release blades">
        <input id="resetWithout-btn" class="btn btn-primary" data-dismiss="modal" value="Do not release blades">
      </div>
      <div class="modal-footer">
        <input class="btn btn-primary" data-dismiss="modal" value="Dismiss">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="serviceStartModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title">Are robots ouside rows?</h2>
      </div>
      <div class="modal-body">
        <input id="serviceStart-btn" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#serviceStopModal" value="Yes">
        <input class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#serviceStopModal" value="No">
      </div>
      <div class="modal-footer">
        <input class="btn btn-primary" data-dismiss="modal" value="Dismiss">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="serviceStopModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title">Finished service?</h2>
      </div>
      <div class="modal-body">
        <input id="serviceStop-btn" class="btn btn-primary" data-dismiss="modal" value="Yes">
        <input class="btn btn-primary" data-dismiss="modal" value="No">
      </div>
      <div class="modal-footer">
        <input class="btn btn-primary" data-dismiss="modal" value="Dismiss">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="idleModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title">Are you sure?</h2>
      </div>
      <div class="modal-body">
        <input id="idle-btn" class="btn btn-primary" data-dismiss="modal" value="Yes">
        <input class="btn btn-primary" data-dismiss="modal" value="No">
      </div>
      <div class="modal-footer">
        <input class="btn btn-primary" data-dismiss="modal" value="Dismiss">
      </div>
    </div>
  </div>
</div>



<!-- Here starts the page -->
<div class="man">
  <!-- Skal bruge to reset knapper, service knap, back to zero, cart movement, -->
  <div class="buttons">
    <table>
      <tr>
        <th>
          <h4>Reset sequence</h4>
        </th>
        <td>
          <button id="man-reset" type="button" class="btn" name="reset" data-toggle="modal" data-target="#resetModal">Reset</button>
        </td>
      </tr>

      <tr>
        <th>
          <h4>Move robot(s) to service position</h4>
        </th>
        <td>
          <button type="button" class="btn" name="service" data-toggle="modal" data-target="#serviceStartModal">Service</button>
        </td>
      </tr>

      <tr>
        <th>
          <h4>Move robots back to idle position</h4>
        </th>

        <td>
          <button type="button" class="btn" name="idle" data-toggle="modal" data-target="#idleModal">Idle</button>
        </td>
      </tr>
    </table>
  </div>

  <div class="cartControl">
    <h2>Cart control</h2>
    <table>
      <tr>

      </tr>
      <tr>

        <td>
          <button type="button" class="btn" name="cart-backward"><i class="fas fa-chevron-left"></i></button>

        </td>

        <td>
          <button type="button" class="btn" name="cart-up" id="up"><i class="fas fa-angle-double-up"></i></button>
        </td>

        <td>
          <button type="button" class="btn" name="cart-down"><i class="fas fa-angle-double-down"></i></button>
        </td>
        <td>
          <button type="button" class="btn" name="cart-forward"><i class="fas fa-chevron-right"></i></button>
        </td>
      </tr>
    </table>


  </div>


</div>
<?php include '../app/views/partials/foot.php'; ?>
