<?php include '../app/views/partials/menu.php';
?>
<br>
<h1>Publish test</h1><br><br>
<hr>
<br>

<div class="mqtt-test">
  <form class="fifty" action="/public/test/publish" method="post">
    <input type="text" name="name1" value="" placeholder="input here...">
    <input type="submit" name="submit" value="submit">
  </form>
</div>


<?php
include '../app/views/partials/foot.php';
