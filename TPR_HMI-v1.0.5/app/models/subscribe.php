<?php

/**
 * This class is for subscribing to broker
 */
class Subscribe extends MQTTConn {

  /**
   * This function is for subscribing to mqtt/plc2hmi for finding recipe number
   */
   public function AdjustRecipe() {
     $topic = "mqtt/plc2hmi"; // Topic to subscribe to
     $value = "";             //
     $qos   = 1;              // Quality of service
     $this->conn->subscribe($topic, $value, $qos);
     $this->conn->loop(true);
     $this->conn->close();
     return $value;
   }

}
