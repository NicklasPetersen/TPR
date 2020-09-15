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



$(document).ready(function(){
  $('#adjust-form').submit(function(event){
    event.preventDefault();

    // INPUTS
    var firstname = document.getElementById("firstname").value;
    var lastname  = document.getElementById("lastname").value;

    // OUTPUT
    var result    = document.getElementById('result');

    // make a post request ajax
    // AJAX request (running in background)
    $.post("../../app/services/submit.php",
      {firstname: firstname, lastname: lastname},
      function(data){
        result.innerHTML = data;
      }
    );
  });
});


$(document).ready(function(){
  $('#adjust-form').submit(function(event){
    event.preventDefault();

    // INPUTS
    var length = document.getElementById("boxLength").value;
    var width  = document.getElementById("boxWidth").value;
    var height  = document.getElementById("boxHeight").value;

    // OUTPUT
    var result    = document.getElementById('result');

    // make a post request ajax
    // AJAX request (running in background)
    $.post("../../app/services/submit.php",
      {firstname: firstname, lastname: lastname},
      function(data){
        result.innerHTML = data;
      }
    );
  });
});
