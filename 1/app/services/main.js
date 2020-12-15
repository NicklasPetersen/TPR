
var $ = jQuery = require('jquery');

const subscribe = require('./MQTTSubscribe');


var alarm = subscribe.subscribe('mqtt/plc2hmi/alarms')
if (alarm != 0) {
    var url = 'alarm';
    var data    = {
      topic: "php-mqtt/hmi2plc/alarm",
      value: alarm
    }

    $.ajax({
      method: 'post',
      url: url,
      data: data,
      success: function(res) {
        setTimeout(function() {
             location.reload();
          }, 0001);
      },
      error: function() {
        alert("Error!!");
      }
    });
}
