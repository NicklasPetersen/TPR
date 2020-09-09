<?php include '../app/views/partials/menu.php'; ?>

<br>
<h1>Manual</h1><br><br>
<hr>
<br>

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
          <button type="button" class="btn" name="resetWith">Reset</button>
        </td>
      </tr>

      <tr>
        <th>
          <h4>Move robot(s) to service position</h4>
        </th>
        <td>
          <button type="button" class="btn" name="service">Service</button>
        </td>
      </tr>

      <tr>
        <th>
          <h4>Move robots back to idle position</h4>
        </th>

        <td>
          <button type="button" class="btn" name="idle">Idle</button>
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
