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

//////////////////////////////////////////////////////
//////////////////////// MAIN ////////////////////////


// jQuery call
$(document).ready(function(){
  $("#spanOpState").html("Not Operating");
  $(".main-btn").on('click', function(event) {
    var btnId = $(this).attr('id');
    var url = 'main/main';
    var mqttData    = {
      topic: "php-mqtt/main/opState",
      value: btnId,
    }

    $.ajax({
      method: 'post',   // Reques type
      url:  url,      // The page containing php script
      // Can use JSON.stringify for more elements
      data: mqttData,
      success: function(res) {
        console.log(res)
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
        $("#progDesc")      .html();
        $("#vel")           .val(parseInt(res.recipe_velocity));
        $("#opNo")          .val(parseInt(res.Operation_mode_id));
        $("#opDesc")        .html("hey hey");
        $("#patternNo")     .val(parseInt(res.packing_pattern_id));
        $("#patternDesc")   .html(1);
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
        $("#progDesc")      .html();
        $("#vel")           .val(parseInt(res.recipe_velocity));
        $("#opNo")          .val(parseInt(res.Operation_mode_id));
        $("#opDesc")        .html("hey hey");
        $("#patternNo")     .val(parseInt(res.packing_pattern_id));
        $("#patternDesc")   .html(1);
      }
    });
  });
});



// function test() {
//   if($('#adjust-div').is(':visible')){
//     var recipeNumber = $("#recipeNo").val();
//     var data = {
//       recipe: recipeNumber,
//     };
//
//     $.ajax({
//       type: 'post',
//       url:  'adjust/',
//       data: data,
//       success: function() {
//         alert(data['recipe']);
//       },
//       error: function() {
//         alert("It didn't work");
//       }
//     });
//   }
//
// }

// //function showAdjust() {
//   $(document).ready(function(){
//     var recipeNumber = $("#recipeNo").val();
//     var data = {
//       "recipe": recipeNumber
//     }
//     $.ajax({
//       type: 'post',
//       url:  'adjust/',
//       data: recipeNumber,
//       success: function() {
//         alert("Data sent to Adjust model: " . data['recipe'])
//       },
//       error: function() {
//         alert("It didn't work");
//       }
//     });
//   });
//
// //}







// $(document).ready(function(){
//   $('#adjust-form').submit(function(event){
//     event.preventDefault();
//
//     // INPUTS
//     var length = document.getElementById("boxLength").value;
//     var width  = document.getElementById("boxWidth").value;
//     var height  = document.getElementById("boxHeight").value;
//
//     // OUTPUT
//     var result    = document.getElementById('result');
//
//     // make a post request ajax
//     // AJAX request (running in background)
//     $.post("../../app/services/submit.php",
//       {firstname: firstname, lastname: lastname},
//       function(data){
//         result.innerHTML = data;
//       }
//     );
//   });
// });
