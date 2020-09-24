// For showing date in header
  window.onload = function() {
      var d = new Date();
      var weekday = ["Sun", "Mon", "Tue", "Wed", "Thur", "Fri", "Sat"];
      var monthname = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

      // Set your output to a variable
      var output = weekday[d.getDay()] + " " + d.getDate() + ". " + monthname[d.getMonth()] + " " + d.getFullYear();

      // Target the ID of the span and update the HTML
      document.getElementById("spanDate").innerHTML = output;
  };

$(function() {
  if ($('.state').length > 0)  {
    var url = 'user/menu';

    $.ajax({
      method: 'post',   // Request type
      url: url,         // The page containing php script
      success:
      function(data, status) {
        alert(data);
        var res = JSON.parse(data);
        if (data.plc == "true") {
          $("#PLCState").css('text-shadow', '0 0 5px green, 0 0 5px green, 0 0 5px green');
        }
        if (data.cut == "true") {
          $("#CutState").css('text-shadow', '0 0 5px green, 0 0 5px green, 0 0 5px green');
        }
        if (data.pick == "true") {
          $("#PickState").css('text-shadow', '0 0 5px green, 0 0 5px green, 0 0 5px green');
        }

      }
    });
  }
});

//////////////////////////////////////////////////////
//////////////////////// MAIN ////////////////////////
// jQuery calls
$(function() {
  if ($('div.main').length > 0 || $(".main-btn").click())  {
    var url = 'opState';   // URL to function that gets opState from broker

    $.ajax({
      method: 'post',   // Request type
      url: url,         // The page containing php script
      success:
      function(mainData, status) {
        var res = JSON.parse(mainData);
        console.log(res);

        $("#spanOpState").html(res['message']);
        $("#stateSpan").html(res['message']);
      }
    });
  }
});


$(document).ready(function(){
  $(".main-btn").on('click', function(event) {
    var btnId = $(this).attr('id');
    var url = 'main';
    var mqttData    = {
      topic: "php-mqtt/hmi2plc/opState",
      value: btnId,
    }

    $.ajax({
      method: 'post',   // Reques type
      url:  url,      // The page containing php script
      // Can use JSON.stringify for more elements
      data: mqttData,
      success: function(res) {
        var output = JSON.parse(res);
        console.log(output)
      },
      error: function() {
        alert("Error");
      }

    });
  });
});







//////////////////////////////////////////////////////
/////////////////////// ADJUST ///////////////////////
$(document).ready(function(){

    var recipeNumber = $("#recipeNo").val();
    var recipeNumber = recipeNumber.toString();
    var url = 'adjust/';
    var updateData    = {
      recipe  : recipeNumber,
    }

    $.ajax({
      method: 'post',   // Request type
      url: url,         // The page containing php script
      // Can use JSON.stringify for more elements
      data: updateData,
      success:
      function(data, status) {
        var res = JSON.parse(data);
        $("#recipeName")    .html(res.recipe_name);
        $("#progNo")        .val(parseInt(res.program_id));
        $("#progDesc")      .html(res.program_name);
        $("#vel")           .val(parseInt(res.recipe_velocity));
        $("#opNo")          .val(parseInt(res.Operation_mode_id));
        $("#opDesc")        .html(res.operation_name);
        $("#patternNo")     .val(parseInt(res.packing_pattern_id));
        $("#patternDesc")   .html(res.pattern_name);
      }
    });
});

// jQuery call
$(document).ready(function(){
  $("#adjust-btn").on("click", function(e) {
    var recipeNumber = $("#recipeNo").val();
    var recipeNumber = recipeNumber.toString();
    var url = 'adjust/show';
    var updateData    = {
      recipe  : recipeNumber,
    }

    $.ajax({
      method: 'post',   // Request type
      url: url,         // The page containing php script
      // Can use JSON.stringify for more elements
      data: updateData,
      success:
      function(data, status) {
        var res = JSON.parse(data);
        $("#recipeName")    .html(res.recipe_name);
        $("#progNo")        .val(parseInt(res.program_id));
        $("#progDesc")      .html(res.program_name);
        $("#vel")           .val(parseInt(res.recipe_velocity));
        $("#opNo")          .val(parseInt(res.Operation_mode_id));
        $("#opDesc")        .html(res.operation_name);
        $("#patternNo")     .val(parseInt(res.packing_pattern_id));
        $("#patternDesc")   .html(res.pattern_name);
      }
    });
  });
});




//////////////////////////////////////////////////////
/////////////////////// MANUAL ///////////////////////
$(document).ready(function() {
  ///////////////////////// Positive ///////////////////////////
  $("#resetWith-btn, #resetWithout-btn, #serviceStart-btn, #serviceStop-btn, #idle-btn").mousedown(function(e) {
    var commandType = $(this).attr('id');
    var url = 'sendTrue';
    var commandData    = {
      topic: 'php-mqtt/hmi2plc/',
      value: commandType
    }

    $.ajax({
      method: 'post',   // Request type
      url: url,         // The page containing php script
      // Can use JSON.stringify for more elements
      data: commandData,
      success:
      function(data, status) {
        console.log(JSON.parse(data))
      }
    });
  });

  ///////////////////////// Negative ///////////////////////////
  $("#resetWith-btn, #resetWithout-btn, #serviceStart-btn, #serviceStop-btn, #idle-btn").mousedown(function(e) {
    var commandType = $(this).attr('id');
    var url = 'sendFalse';
    var commandData    = {
      topic: 'php-mqtt/hmi2plc/',
      value: commandType
    }

    $.ajax({
      method: 'post',   // Request type
      url: url,         // The page containing php script
      // Can use JSON.stringify for more elements
      data: commandData,
      success:
      function(data, status) {
        console.log(JSON.parse(data))
      }
    });
  });

});
