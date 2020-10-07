// For showing date in header
window.onload = function() {

    const vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0)
    var d = new Date();
    var weekday = ["Sun", "Mon", "Tue", "Wed", "Thur", "Fri", "Sat"];
    var monthname = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

    // Set your output to a variable
    if (vw > 1200) {
      var output = weekday[d.getDay()] + " " + d.getDate() + ". " + monthname[d.getMonth()] + " " + d.getFullYear();
    } else {
      var output = weekday[d.getDay()] + " " + d.getDate() + ". " + monthname[d.getMonth()];
    }


    // Target the ID of the span and update the HTML
    document.getElementById("spanDate").innerHTML = output;
};
function ajaxCall(url, commandData) {
  $.ajax({
    method: 'post',
    url: url,
    data: commandData,
    success: function(res) {
      console.log(JSON.parse(res));
    },
    error: function() {
      alert("Error!!");
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
    error: function() {
      alert("Error!!");
    }
  });
}


$(function() {
  if ($('.state').length > 0)  {
    var url = 'public/user/menu';
    $.ajax({
      method: 'post',   // Request type
      url: url,         // The page containing php script
      async: true,
      success:
      function(data, status) {
        var res = JSON.parse(data);
        console.log(data);
        if (res.plc == "TRUE") {
          $("#PLCState").css('text-shadow', '0 0 5px green, 0 0 5px green, 0 0 5px green');
        }
        if (res.cut == "TRUE") {
          $("#CutState").css('text-shadow', '0 0 5px green, 0 0 5px green, 0 0 5px green');
        }
        if (res.pick == "TRUE") {
          $("#PickState").css('text-shadow', '0 0 5px green, 0 0 5px green, 0 0 5px green');
        }

      }
    });
  }
});


// jQuery calls



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
    var recipeNumber = $("#recipeNo").val();
    var recipeNumber = recipeNumber.toString();
    var url = 'update';
    var updateData    = {
      topic: "php-mqtt/hmi2plc/recipe",
      value: recipeNumber,
    }
    ajaxCallUpdate(url, updateData);
  });


  //////////////////////////////////////////////////////
  /////////////////////// MANUAL ///////////////////////
  ///////////////////////// Positive ///////////////////////////
  $(".cartControl, .resetControl, .serviceControl, idleControl").mousedown(function(e) {
    var command = $(this).attr('id');
    var url = 'sendTrue';
    var commandData    = {
      topic: 'php-mqtt/hmi2plc/',
      value: command
    }

    ajaxCall(url, commandData);
  });

  ///////////////////////// Negative ///////////////////////////
  $(".cartControl, .resetControl, .serviceControl, idleControl").mouseup(function(e) {
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
      command: command,
    }
    ajaxCall(url, commandData);
  });

  $("#vision-btn").mouseup(function(e) {
    var command     = 0;
    var url         = 'sendCommand';
    var commandData = {
      topic: "php-mqtt/hmi2plc/vision",
      command: command,
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
      command: command,
    }
    ajaxCall(url, commandData);
  });

  $(".toolcontrol").mouseup(function(e) {
    var command     = 0;
    var url         = 'sendCommand';
    var commandData = {
      topic: "php-mqtt/hmi2plc/tool",
      command: command,
    }
    ajaxCall(url, commandData);
  });

});
