<?php

/**
 * This class is for subscribing to broker
 */
class Subscribe extends MQTTConn {
  private $qos             = 0;
   /**
    * When a page first loads, call this function with a given topic
    * connect to broker, and get the last state:
    * @return json
    */

  public function subscribe1($topic) {
    $this->conn->subscribe($topic, function ($topic, $message) {
      if ($message != "") {
        if ($topic == "mqtt/plc2hmi/opState") {
          if ($message == "start") {
            $_SESSION['opState'] = "Running";
          } else if ($message == "stop") {
            $_SESSION['opState'] = "Stopped";
          }
          $this->conn->interrupt();
          return $message;

        } else if ($topic == "mqtt/plc2hmi/recipe") {
          $_SESSION['recipe'] = $message;
          $this->conn->interrupt();
          return $message;
        } else if ($topic == "mqtt/plc2hmi/velocity") {
          $_SESSION['velocity'] = $message;
          $this->conn->interrupt();
          return $message;
        } else if ($topic == "mqtt/plc2hmi/program") {
          $_SESSION['program'] = $message;
          $this->conn->interrupt();
          return $message;
        }
      }
    }, $this->qos);
    $this->conn->loop(true);
  }

  public function subscribe2($topic1, $topic2) {
    $output = array($topic1=> "", $topic2=> "");

    $this->conn->subscribe($topic1, function ($topic1, $message) {
      if ($message != "") {
          $this->conn->interrupt();
          $output[$topic1] = $message;
      }
    }, $this->qos);

    $this->conn->subscribe($topic2, function ($topic2, $message) {
      if ($message != "") {
          $this->conn->interrupt();
          $output[$topic1] = $message;
      }
    }, $this->qos);
    $this->conn->loop(true);
    return $output;
  }


  public function subscribeAlarm() {
    $topic        = "mqtt/plc2hmi/alarm";

    $this->conn->subscribe($topic, function ($topic, $message) {
      if ($message != "") {
          $output = array('topic' => $topic, 'message' => $message);
          echo (json_encode($output));
          $this->conn->interrupt();
          return $output;
      }
    }, $this->qos);
    $this->conn->loop(true);
  }

}
