<?php
  class Publish extends MQTTConn {

    /**
     * This function is for sending Start/Pause/stop commands to PLC
     */
     public function MainOperation($data) {
       // Get topic and value for MQTT
       $topic  = $data['topic'];
       $value  = $data['value'];
       $qos    = 1;

       $value = explode('-', $value)[0];

       if ($value !== 0) {
         $this->conn->publish($topic, $value, $qos);
         return $value;
       } else {
         return false;
       }
     }


  }
