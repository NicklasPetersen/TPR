<?php
include '../app/views/partials/menu.php';

?>

<br><br><br>
  <h2>In order to go further, you have to sign-in</h2>
  <br><br>


  <?php
    if (isset($_SESSION['msg'])) {
      echo '<label class="text-danger">'.$_SESSION['msg'].'</label>';
    }
  ?>

    <br><br>

    <form class="fifty" method="POST" action="/tpr/public/user/login">
      <fieldset>
        <legend><h3>Sign in</h3></legend>
        <label>Username</label>
        <br/>
        <input type="text" name="username" id="username" autofocus placeholder="Username"/>
        <br/>


        <label>Password</label>
        <br/>
        <input type="password" name="password" id="password" placeholder="Password"/>
        <br/>
        <br/>
        <button type="submit">Submit</button>
        <br/>
      </fieldset>
    </form>


<?php include '../app/views/partials/foot.php'; ?>
