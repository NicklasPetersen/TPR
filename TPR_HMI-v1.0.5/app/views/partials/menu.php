<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../../../public/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="/mvc/public/script.js"></script>
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
          <nav>

           <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
              Users
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="/public/user/all">All</a></li>
              <li><a href="#">One</a></li>
            </ul>
          </div>

          <div class="dropdown">
           <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
             logout
           <span class="caret"></span></button>
           <ul class="dropdown-menu">
             <li><a href="/public/user/logout">Logout</a></li>
           </ul>
         </div>


        </nav>
      </div>
    </div>
  </header>

    <div class="content">
