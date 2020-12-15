<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">
    <meta charset="UTF-8">
    <title>TPR HMI</title>
    <link rel="icon" href="/tpr/public/img/EGATEC-icon.png">
    <link rel="stylesheet" href="/tpr/public/styles.css">
    <link rel="stylesheet" href="/tpr/public/bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type"text/css" href="/tpr/public/fontawesome-free-5.14.0-web/css/all.css">
    <!-- <script type="text/javascript" src="./browserMqtt.js"></script> -->

    <script src="/tpr/public/jQuery-3.5.1.min.js"></script>

    <script src="/tpr/public/bundle.js" charset="utf-8"></script>
    <script src="/tpr/public/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>

    <!-- <script type="text/javascript" src="/tpr/public/script.js"></script> -->

</head>
<body>
  <header>
      <div class="container">
        <div class="logo">
          <a href="/tpr/public/user/">
            <img id="logo" src="/tpr/public/img/logo.png" href="" alt="logo" title="">
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
              <li><a href="/tpr/public/main/">          Main</a></li>
              <li><a href="/tpr/public/recipe/">        Choose recipe</a></li>
              <li><a href="/tpr/public/adjust/">        Adjustments</a></li>
              <li><a href="/tpr/public/alarm/">         Alarms</a></li>
              <li><a href="/tpr/public/manual/">        Manual</a></li>
              <li><a href="/tpr/public/setup/">         Setup</a></li>  <!-- input dimensions + calibration + calib check -->
              <li><a href="/tpr/public/log/">           Log</a></li>
              <li><a href="/tpr/public/info/">          Information</a></li>
              <li><a href="/tpr/public/vision/">        Vision control</a></li>
              <li><a href="/tpr/public/tool/">          Tool control</a></li>
              <li><a href="/tpr/public/signup/">        Create user</a></li>
              <li class="divider"></li>
              <li><a href="/tpr/public/user/logout">    Logout</a></li>
            </ul>
          </div>
       </div>

        </nav>


        <div class="state">

          <label id="dataLabel">Date: <span id="spanDate"></span></label>

          <br>
          <label>State: <span id="stateSpan"><?php if (isset($_SESSION['opState'])) { echo $_SESSION['opState']; }?></span></label>

          <br>
          <label>Logged in as:</label>

          <br>
          <span><label><?= $_SESSION['username'] ?></label></span>

        </div>
      </div>

  </header>

    <div class="content">
