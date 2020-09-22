<?php

class Test extends MQTTConn {

  public function publish($name) {
    $this->conn->publish('php-mqtt/client/test', $name, 1);
  }

  public function subscribe() {
    $this->conn->subscribe('php-mqtt/client/test', function ($topic, $message) {
    echo sprintf("Received message on topic [%s]: %s\n", $topic, $message);
    }, 1);
    $this->conn->loop(true);

  }

}
