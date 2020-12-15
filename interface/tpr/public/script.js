
const $ = require('jquery');
//const bootstrap = require('bootstrap/dist/js/bootstrap')
//const subscribe = require('./MQTTSubscribe');


// For showing date in header
window.onload = function() {

    const vw      = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0)
    var d         = new Date();
    var weekday   = ["Sun", "Mon", "Tue", "Wed", "Thur", "Fri", "Sat"];
    var monthname = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

    // Set your output to a variable
    if (vw > 1200) {
      var output = weekday[d.getDay()] + " " + d.getDate() + ". " + monthname[d.getMonth()] + " " + d.getFullYear();
    } else {
      var output = weekday[d.getDay()] + " " + d.getDate() + ". " + monthname[d.getMonth()];
    }


    // Target the ID of the span and update the HTML
    document.getElementById("spanDate").innerHTML = output;

    // subscribe();

};

/////////////////////////////////////////////////////
////////////////// MQTT Subscribe ///////////////////
/////////////////////////////////////////////////////
// function subscription() {
//   //var mqtt = require('mqtt');
//   var client  = mqtt.connect('mqtt://test.mosquitto.org');
//
//   client.on('connect', function () {
//     client.subscribe('presence', function (err) {
//       if (!err) {
//         client.publish('presence', 'Hello mqtt')
//       }
//     })
//   })
//
//   client.on('message', function (topic, message) {
//     // message is Buffer
//     console.log(message.toString())
//     client.end()
//   })
// }




/////////////////// TESTING /////////////////////////
window.addEventListener("load", function() { window. scrollTo(0, 0); });
document.addEventListener("touchmove", function(e) { e.preventDefault() });






/////////////////////////////////////////////////////



function ajaxCall(url, commandData) {
  $.ajax({
    method: 'post',
    url: url,
    data: commandData,
    success: function(res) {
      console.log(JSON.parse(res));

    },
    error: function(e) {
      alert("Error!! " + e);
    }
  });
}


function ajaxCallUpdate(url, commandData) {
  $.ajax({
    method: 'post',
    url: url,
    data: commandData,
    success: function(res) {
      setTimeout(function() {
           location.reload();
        }, 0001);
    },
    error: function(xhr, status, error) {
      var err = eval("(" + xhr.responseText + ")");
      alert(err.Message);
    }
  });
}


// jQuery calls


var alarmCount = 10;
var logCount = 10;
$(document).ready(function(){
  //////////////////////////////////////////////////////
  //////////////////////// MAIN ////////////////////////
  $(".main-btn").on('click', function(event) {
    var btnId = $(this).attr('id');
    var url = 'main';
    var mqttData    = {
      topic: "php-mqtt/hmi2plc/opState",
      value: btnId,
    }

    ajaxCallUpdate(url, mqttData);
  });

  //////////////////////////////////////////////////////
  /////////////////////// ADJUST ///////////////////////
  $("#adjust-btn").on("click", function(e) {
    var recipeNumber    = $("#recipeNo").val();
    var recipeName      = $("#recipeName").val();
    var recipeVelocity  = $("#vel").val();
    var opNo            = $("#opNo").val();
    var patternNo       = $("#patternNo").val();
    var cartHeight      = $("#cartHeight").val();
    var valveDelay      = $("#valveDelay").val();
    var img_retry       = $("#img_retry").val();
    var boxLength       = $("#boxLength").val();
    var boxWidth        = $("#boxWidth").val();
    var boxHeight       = $("#boxHeight").val();

    var url = 'updateRecipe';
    var updateData    = {
      topic: "php-mqtt/hmi2plc/recipe",
      value: recipeNumber,
      recipe: recipeNumber,
      recipeName: recipeName,
      recipeVelocity: recipeVelocity,
      opNo: opNo,
      patternNo: patternNo,
      cartHeight: cartHeight,
      valveDelay: valveDelay,
      img_retry: img_retry,
      boxLength: boxLength,
      boxWidth: boxWidth,
      boxHeight: boxHeight,
    }
    ajaxCallUpdate(url, updateData);
  });

  //////////////////////////////////////////////////////
  /////////////////////// RECIPE ///////////////////////
  $("#recipe-btn").on("click", function(e) {
    var recipeNumber = $("#recipeNoInput").val();
    var recipeNumber = recipeNumber.toString();
    var url = 'update';
    var updateData    = {
      topic: "php-mqtt/hmi2plc/recipe",
      value: recipeNumber
    }
    ajaxCallUpdate(url, updateData);
  });


  //////////////////////////////////////////////////////
  /////////////////////// Alarms ///////////////////////
  $("#moreAlarms, #evenMoreAlarms").on("click", function(e) {
    alarmCount = alarmCount + 10;
    console.log(alarmCount);
    $(".alarm-table").load("getMore", {
      alarmNewCount: alarmCount
    });
  });

  $("#acknowledgeAlarm").on("click", function(e) {
    $(".modal-body").load("currentAlarm", function() {
      jQuery.noConflict();
      jQuery("#alarm-modal").modal({show:true});


    });


  });

  $("#alarmAck").on("click", function(e) {
    var command     = "Acknowledge";
    var url         = 'acknowledgeAlarm';
    var commandData = {
      topic: "php-mqtt/hmi2plc/alarm",
      value: command,
    }
    ajaxCallUpdate(url, commandData);
  });


  //////////////////////////////////////////////////////
  //////////////////////// Logs ////////////////////////
  $(".moreLogs").mouseup(function(e) {
    logCount = logCount + 10;
    $("#log-table").load("getMore", {
      logNewCount: logCount
    });
  });

  //////////////////////////////////////////////////////
  /////////////////////// MANUAL ///////////////////////
  ///////////////////////// Positive ///////////////////////////
  $(".cartControl, .resetControl, .serviceControl, .idleControl").mousedown(function(e) {
    var command = $(this).attr('id');
    var url = 'sendTrue';
    var commandData    = {
      topic: 'php-mqtt/hmi2plc/',
      value: command
    }

    ajaxCall(url, commandData);
  });

  ///////////////////////// Negative ///////////////////////////
  $(".cartControl, .resetControl, .serviceControl, .idleControl").mouseup(function(e) {
    var commandType = $(this).attr('id');
    var url = 'sendFalse';
    var commandData    = {
      topic: 'php-mqtt/hmi2plc/',
      value: commandType
    }
    ajaxCall(url, commandData);
  });


  //////////////////////////////////////////////////////
  /////////////////////// Setup ////////////////////////
  $(".setup-btn").mouseup(function(e) {
    var command     = $(this).attr('id');
    var url         = 'sendCommand';
    var commandData = {
      topic: "php-mqtt/hmi2plc/setup",
      value: command
    };
    ajaxCall(url, commandData);
  });

  $("#program").mouseup(function(e) {
    var command     = $('#program_no').val();
    var url         = 'sendCommand';
    var commandData = {
      topic: "php-mqtt/hmi2plc/program",
      value: command
    };
    ajaxCall(url, commandData);
  });

  $(".calib").mouseup(function(e) {
    var command     = $(this).attr('id');
    var url         = 'sendCommand';
    var commandData = {
      topic: "php-mqtt/hmi2plc/calib",
      value: command
    };
    ajaxCall(url, commandData);
  });

  $(".robot-frame").mouseup(function(e) {
    var command       = $(this).attr('id');
    var commandSplit  = command.split('-');
    var type          = commandSplit[0];

    var x = $("#"+type+"-x").val();
    var y = $("#"+type+"-y").val();
    var z = $("#"+type+"-z").val();
    var a = $("#"+type+"-a").val();
    var e = $("#"+type+"-e").val();
    var r = $("#"+type+"-r").val();
    if (x != "" && y != "" && z != "" && a != "" && e != "" && r != "") {
      var url         = 'updateFrame';
      var commandData = {
        topic: "php-mqtt/hmi2plc/frameUpdate",
        type: type,
        x: x,
        y: y,
        z: z,
        a: a,
        e: e,
        r: r
      };
      ajaxCallUpdate(url, commandData);
    }
  });


  //////////////////////////////////////////////////////
  /////////////////////// Vision ///////////////////////
  $("#vision-btn").mousedown(function(e) {
    var command     = $("#vision-input").val();
    var url         = 'sendCommand';
    var commandData = {
      topic: "php-mqtt/hmi2plc/vision",
      value: command,
    }
    ajaxCall(url, commandData);
  });

  $("#vision-btn").mouseup(function(e) {
    var command     = 0;
    var url         = 'sendCommand';
    var commandData = {
      topic: "php-mqtt/hmi2plc/vision",
      value: command,
    }
    ajaxCallUpdate(url, commandData);
  });


  //////////////////////////////////////////////////////
  /////////////////////// TOOLs ////////////////////////
  $(".toolcontrol").mousedown(function(e) {
    var command     = $(this).attr('id');
    var url         = 'sendCommand';
    var commandData = {
      topic: "php-mqtt/hmi2plc/tool",
      value: command,
    }


    ajaxCall(url, commandData);
  });

  $(".toolcontrol").mouseup(function(e) {
    var command     = '1';
    var url         = 'sendCommand';
    var commandData = {
      topic: "php-mqtt/hmi2plc/tool",
      value: command,
    }
    ajaxCall(url, commandData);
  });

});


///////////////////////////////////////////////
// Alarms
