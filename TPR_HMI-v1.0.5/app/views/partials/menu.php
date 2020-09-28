<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>TPR HMI</title>
    <link rel="icon" href="/public/img/EGATEC-icon.png">
    <link rel="stylesheet" href="/public/styles.css">
    <link rel="stylesheet" href="/public/bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type"text/css" href="/public/fontawesome-free-5.14.0-web/css/all.css">
    <script src="/public/jQuery-3.5.1.min.js"></script>
    <script src="/public/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/public/script.js"></script>

</head>
<body>
  <header>
      <div class="container">
        <div class="logo">
          <a href="/public/user/">
            <img src="../../../public/img/logo.png" href="pictures.php" alt="logo" title="">
          </a>
        </div>

        <div class="infobar">
          <iframe src="..\..\app\views\partials\infobar.php" scrolling="no" title="infobar"></iframe>
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
              <li><a href="/public/setup/">         Setup</a></li>  <!-- input dimensions + calibration + calib check -->
              <li><a href="/public/recipe/">        New Recipe</a></li>
              <li><a href="/public/log/">           Log</a></li>
              <li><a href="/public/info/contact">   Information</a></li>
              <li><a href="/public/vision/control"> Vision control</a></li>
              <li><a href="/public/tool/control">   Tool control</a></li>
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

          <label>Date: <span id="spanDate"></span></label>

          <br>
          <label>State: <span id="stateSpan"><?php if (isset($_SESSION['opState'])) { echo $_SESSION['opState']; }?></span></label>

          <br>
          <label>Connections:</label>

          <br>
          <table id="connection">
            <tr>
              <th><span id="PLCState">  PLC</span></th>
              <th><span id="CutState">  Cut</span></th>
              <th><span id="PickState"> Pick</span></th>
            </tr>
          </table>
        </div>
      </div>

  </header>

    <div class="content">
