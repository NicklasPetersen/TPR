<?php
  class Publish extends MQTTConn {

    /**
     * This function is for sending Start/Pause/stop commands to PLC
     *
     * @return void
     */
     public function MainOperation($data) {
       // Get topic and value for MQTT
       $topic  = $data['topic'];
       $value  = $data['value'];
       $qos    = 1;

       $value = explode('-', $value)[0];

       if ($value !== 0) {
         $this->conn->publish($topic, $value, $qos);
         if ($value == "start") {
           $_SESSION['value'] = "Running";
         } else if ($value == "stop") {
           $_SESSION['value'] = "Stopped";
         } else {
           $_SESSION['value'] = "ERROR!";
         }

         $output = array("topic"=> $topic, "value"=>$_SESSION['value']);
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
       $qos    = 1;

       $value = "1";

       if ($value !== 0) {
         $this->conn->publish($topic, $value, $qos);

         $output = array("topic"=> $topic, "value"=>$value);
         echo json_encode($output);
         exit();
       } else {
         return false;
       }

     }

     /**
      * Send negative value to PLC after the samme command has been sent
      *
      * @return void
      */
     public function manPublishFalse  ($data) {
       $endTopic = $data['value'];
       $endTopic = explode('-', $endTopic)[0];
       $topic = $data['topic'] . $endTopic;
       $qos    = 1;

       $value = "0";

       if ($value !== 0) {
         $this->conn->publish($topic, $value, $qos);

         $output = array("topic"=> $topic, "value"=>$value);
         echo json_encode($output);
         exit();
       } else {
         return false;
       }

     }
  }
