<?php

/**
 * This class is for subscribing to broker
 */
class Subscribe extends MQTTConn {

  /**
   * This function is for subscribing to mqtt/plc2hmi for finding recipe number
   */
   public function adjustRecipe() {

   }

   /**
    * When main page is loaded, the operation state needs to be visible:
    * connect to broker, and get the last state:
    */
   public function mainOperation() {
     $topic           = "mqtt/plc2hmi/opState";
     $qos             = 0;
     $output;

     $this->conn->subscribe($topic, function ($topic, $message) {
       if ($message == "start") {
         $_SESSION['value'] = "Running";
       } else if ($message == "stop") {
         $_SESSION['value'] = "Stopped";
       }
       $output = array('topic' => $topic, 'message' => $_SESSION['value']);
       if (isset($output) && sizeof($output) >= 1) {

         echo (json_encode($output));
         die();
         $this->conn->close();
       }
     }, $qos);
     $this->conn->loop(true);
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
