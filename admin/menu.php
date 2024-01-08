<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dropdown menu dengan Bootstrap</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="navbar.css" rel="stylesheet">

  </head>
  <body>
<div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!--header saat mobile version-->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Proweb</a>
          </div><!--end header saat mobile version-->

          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Web design</a></li>
                  <li><a href="#">Web Application</a></li>
                  <li><a href="#">Internet Marketing</a></li>
                </ul>
              </li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>


    </div> <!-- /container -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>