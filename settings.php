
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <title>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body { padding-top: 60px; /* 60px to make the container go all the way
      to the bottom of the topbar */ }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/our.css">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
      </script>
    <![endif]-->

    <script language="javascript" type="text/javascript" src="flot/jquery.js"></script>
    <script language="javascript" type="text/javascript" src="flot/jquery.flot.js"></script>
    <script language="javascript" type="text/javascript" src="flot/jquery.flot.resize.js"></script>

    <script src="justGage/resources/js/raphael.2.1.0.min.js"></script>
    <script src="justGage/resources/js/justgage.1.0.1.min.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

  </head>
  <body>
    
    <div id="wrap">

             <!-- NAVBAR
        ================================================== -->
        <div class="navbar-wrapper">
          <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
          <div class="container">

            <div class="navbar navbar-inverse">
              <div class="navbar-inner">
                <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>
                <a class="brand" href="#" style="color:white;">DashBoard</a>
                <div class="nav-collapse collapse">
                  <ul class="nav pull-right">
                    <li><a href="index.php"><i class="icon-box icon-white"></i> Home</a></li>
                  </ul>
                </div><!--/.nav-collapse -->
              </div><!-- /.navbar-inner -->
            </div><!-- /.navbar -->

          </div> <!-- /.container -->
        </div><!-- /.navbar-wrapper -->

        </br>
        </br>

        <!-- TABLE TABLE TABLE TABLE TABLE -->
        <div class="container">

            <div class="row-fluid">
            <div class="well span4" style="overflow-y:auto;" id="tablebox">
                <form>
                  <fieldset>
                    <legend>Edit Widgets</legend>
                    <label>Label name</label>
                    <input type="text" placeholder="Type something…">
                    <span class="help-block">Example block-level help text here.</span>
                    <label class="checkbox">
                      <input type="checkbox"> Check me out
                    </label>
                    <button type="submit" class="btn">Submit</button>
                  </fieldset>
                </form>
                
            </div>
            </div>

        </div>

        <script src="assets/js/bootstrap.js">
        </script>


        <div id="push"></div>
    </div> <!-- Wrapper -->

    <div id="footer">
      <div class="container">
        </br>
        <p class="muted credit">Your Project Page <a href="http://example.com">Demo Project</a> - InternetThings Dashboard <a href="https://github.com/kevinvincent/InternetThings">Github</a>.</p>
      </div>
    </div>
  </body>
</html>
