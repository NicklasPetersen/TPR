<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../../../public/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="/public/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <header>
      <div class="container">
        <div class="logo">
          <a href="/public/user/">
            <img src="..\..\app\views\partials\logo.png" href="pictures.php" alt="logo" title="">
          </a>
        </div>

        <div class="infobar">
          <h1> Infobar here! </h1>
        </div>
        <div class="menuClass">
          <nav>
           <div class="dropdown" id="down1">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
              Menu
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="/public/home/">          Main</a></li>
              <li><a href="/public/adjust/">        Adjustments</a></li>
              <li><a href="/public/alarm/">         Alarms</a></li>
              <li><a href="/public/manual/">        Manual</a></li>
              <li><a href="/public/log/">           Log</a></li>
              <li><a href="/public/info/contact">   Information</a></li>
              <li><a href="/public/vision/control"> Vision control</a></li>
              <li><a href="/public/tool/control">   Tool control</a></li>
              <li><a href="/public/robot/connect">  Robot connection</a></li>
              <li class="divider"></li>
              <li><a href="/public/user/logout">    Logout</a></li>
            </ul>
          </div>


          <div class="dropdown" id="down2">
           <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
             logout
           <span class="caret"></span></button>
           <ul class="dropdown-menu">
             <li><a href="/public/user/logout">Logout</a></li>
           </ul>
         </div>
       </div>

        </nav>


        <div class="state">
          <br>
          <label>Date: <span id="spanDate"></span></label>


          <br>
          <br>
          <label><span>State: </span></label>
        </div>
      </div>

  </header>

    <div class="content">
