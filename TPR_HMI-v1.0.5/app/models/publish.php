<?php
  class Publish extends MQTTConn {

    private $qos = 1;

    /**
     * This function is for sending Start/Pause/stop commands to PLC
     *
     * @return void
     */
     public function MainOperation($data) {
       // Get topic and value for MQTT
       $topic  = $data['topic'];
       $value  = $data['value'];

       $value = explode('-', $value)[0];

       if ($value !== 0) {
         $this->conn->publish($topic, $value, $this->qos);
         if ($value == "start") {
           $_SESSION['value'] = "Running";
         } else if ($value == "stop") {
           $_SESSION['value'] = "Stopped";}
         else if ($value == "pause") {
           $_SESSION['value'] = "Paused";
         } else {
           $_SESSION['value'] = "ERROR!";
         }

         $output = array("topic"=> $topic, "value"=>$value);
         echo json_encode($output);
         exit();
       } else {
         return false;
       }
     }

     /**
      * Send positive value to PLC
      *
      * @return void
      */
     public function manPublishTrue  ($data) {
       $endTopic = $data['value'];
       $endTopic = explode('-', $endTopic)[0];
       $topic = $data['topic'] . $endTopic;

       $value = "1";

       if ($value !== 0) {
         $this->conn->publish($topic, $value, $this->qos);

         $output = array("topic"=> $topic, "value"=>$value);
         echo json_encode($output);
         exit();
       } else {
       }

     }

     /**
      * Send negative value to PLC after the same command has been sent
      *
      * @return void
      */
     public function manPublishFalse  ($data) {
       $endTopic = $data['value'];
       $endTopic = explode('-', $endTopic)[0];
       $topic = $data['topic'] . $endTopic;

       $value = "0";

       if ($value !== 0) {
         $this->conn->publish($topic, $value, $this->qos);

         $output = array("topic"=> $topic, "value"=>$value);
         echo json_encode($output);
         exit();
       } else {
       }
     }

     /**
      * Send command
      * $data contains topic and value to be sent to broker
      *
      * @return void
      */
     public function sendCommand($data) {
       // Get topic and value for MQTT
       $topic  = $data['topic'];
       $value  = $data['value'];

       if ($value !== 0) {
         $this->conn->publish($topic, $value, $this->qos);
         $output = array("topic"=> $topic, "value"=>$value);
         echo json_encode($output);
       } else {
         return false;
       }
     }
  }
