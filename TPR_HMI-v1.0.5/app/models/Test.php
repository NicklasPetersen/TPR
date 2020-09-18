<?php
class Test extends Mqttconn {

  public function publish($name) {
    $this->client->publish('php-mqtt/client/test', $name, 2);
  }

  public function subscribe() {
    $this->client->subscribe('php-mqtt/client/test', $_SESSION['sub'], 2);
  }

}
