<?php include '../partials/menu.php';
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

    <form class="fifty" method="POST" action="/public/user/login">
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
        <br/>
        <a href="/TPR_HMI-v1.0.5/public/signup/">Haven't got any account?</a>
      </fieldset>
    </form>


<?php include '../partials/foot.php'; ?>
