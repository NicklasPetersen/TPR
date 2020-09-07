// For showing date in header
function showDate() {
  var currentDate = new Date();
  var day         = currentDate.getDay();
  var month       = currentDate.getMonth();
  var year        = currentDate.getYear();
  var fullDate    = day + "/" + month + "/" + year;

  return fullDate;
}

window.onload = function() {
    var d = new Date();
    var weekday = ["Sun", "Mon", "Tue", "Wed", "Thur", "Fri", "Sat"];
    var monthname = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

    // Set your output to a variable
    var output = weekday[d.getDay()] + " " + d.getDate() + ". " + monthname[d.getMonth()] + " " + d.getFullYear();

    // Target the ID of the span and update the HTML
    document.getElementById("spanDate").innerHTML = output;
};
