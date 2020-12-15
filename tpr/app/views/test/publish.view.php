<?php include '../app/views/partials/menu.php';
require '/vendor/php-mqtt/client/src/MQTTClient.php';

$server   = 'some-broker.example.com';
$port     = 1883;
$clientId = 'test-publisher';

$mqtt = new MQTTClient($server, $port, $clientId);
$mqtt->connect();
$mqtt->publish('php-mqtt/client/test', $_POST['name1'], 0);
$mqtt->close();



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
