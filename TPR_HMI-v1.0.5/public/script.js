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

function drawCube() {
  const COLOR_BG    = "black";
  const COLOR_CUBE  = "yellow";
  const SPEED_X     = 0.05; //rps
  const SPEED_Y     = 0.05; //rps
  const SPEED_Z     = 0.05; //rps
  const POINT3D     = function(x, y, z) {this.x = x; this.y = y; this.z = z;}

  // set up the canvas and context
  var canvas = document.createElement("canvas");
  document.body.appendChild(canvas);
  var ctx = canvas.getContext("2d");

  // dimensions
  var h = 200;
  var w = 200;
  canvas.height = h;
  canvas.width = w;

  // colors and lines
  ctx.fillStyle = COLOR_BG;
  ctx.strokeStyle = COLOR_CUBE;
  ctx.lineWidth = w / 100;
  ctx.lineCap = "round";

  // cubeparameters
  var cx = document.getElementById('boxLength') / 10;
  var cy = document.getElementById('boxWidth') / 10;
  var cz = document.getElementById('boxHeight') / 10;
  var size = h / 4;

  var vertices = [
    new POINT3D(cx - size, cy - size, cz - size),
    new POINT3D(cx + size, cy - size, cz - size),
    new POINT3D(cx + size, cy + size, cz - size),
    new POINT3D(cx - size, cy + size, cz - size),
    new POINT3D(cx - size, cy - size, cz + size),
    new POINT3D(cx + size, cy - size, cz + size),
    new POINT3D(cx + size, cy + size, cz + size),
    new POINT3D(cx - size, cy + size, cz + size)
  ];

  var edges = [
    [0, 1], [1,2], [2,3], [3,0], // Back face
    [4,5], [5,6], [6,7], [7,4], // Front face
    [0,4], [1, 5], [2,6], [3,7]  // connecting sides
  ];

  var timeDelta, timeLast = 0;
  requestAnimationFrame(loop);


}

function loop(timeNow) {
  timeDelta = timeNow - timeLast;
  timeLast = timeNow;

  // background
  ctx.fillRect(0, 0, w, h);

  for (let edge of edges) {
    ctx.beginPath();
    ctx.moveTo(vertices[edge[0]].x, vertices[edge[0]].y);
    ctx.lineTo(vertices[edge[1]].x, vertices[edge[1]].y);
    ctx.stroke();
  }

  // Call the next frame
  requestAnumationFrame(loop);
}

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
