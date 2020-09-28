<?php

/**
 * This class is for subscribing to broker
 */
class Subscribe extends MQTTConn {

   /**
    * When a page first loads, call this function with a given topic
    * connect to broker, and get the last state:
    * @return json
    */

    public function subscribe1($topic) {
      $qos             = 0;

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
          }
        }
      }, $qos);
      $this->conn->loop(true);
    }

    public function subscribe2($topic1, $topic2) {
      $qos             = 0;
      $output = array($topic1=> "", $topic2=> "");

      $this->conn->subscribe($topic1, function ($topic1, $message) {
        if ($message != "") {
            $this->conn->interrupt();
            $output[$topic1] = $message;
        }
      }, $qos);

      $this->conn->subscribe($topic2, function ($topic2, $message) {
        if ($message != "") {
            $this->conn->interrupt();
            $output[$topic1] = $message;
        }
      }, $qos);
      $this->conn->loop(true);
      return $output;
    }



   /**
    * Find PLC/Cut/Pick State
    * @return json
    */
   public function menu() {
     $topic        = "mqtt/plc2hmi/#";

     $qos             = 0;
     $temp = array("topic" => "", "message" => "");
     //$output          = array('plc'=>, 'cut'=>, 'pick'=>);

     $this->conn->subscribe($topic, function ($topic, $message) {
        $output = array('topic' => $topic, 'message' => $message);
       if (isset($output) && sizeof($output) >= 3) {
         echo (json_encode($output));
         die();
         $this->conn->close();
       }
     }, $qos);
     $this->conn->loop(true);
   }

}
