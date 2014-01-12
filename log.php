
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
                <center><h4>Data Sent To Dashboard</h4></center>
                <form>
                  <fieldset>
                    <legend>Legend</legend>
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

            <!-- GRAPH GRAPH GRAPH GRAPH -->
            <div class="well span8" id="outer">
                <center><h4>Temperature Monitor</h4></center>
                <div id="placeholder" style="width:600px;height:300px"></div>
            </div>
            </div>

        </div>

        <!-- INDICATORS INDICATORS INDICATORS -->
        <div class="container">

            <div class="row-fluid">
                <div class="well span4">
                    <center>
                    <div id="gauge1" style="width:200px; height:160px"></div>
                    </center>
                </div>
                <div class="well span4">
                    <center>
                    <div id="gauge2" style="width:200px; height:160px"></div>
                    </center>
                </div>
                <div class="well span4">
                    <center>
                    <div id="gauge3" style="width:200px; height:160px"></div>
                    </center>
                </div>
            </div>

        <!-- METER METER METER METER METER -->

            <div class="row-fluid">
                <div class="well span4">
                      <center><h4>Overall Danger Meter</h4></center>
                      </br>
                      <div class="progress">
                      <div class="bar bar-success" style="width: 35%;"></div>
                      <div class="bar bar-warning" style="width: 20%;"></div>
                      <div class="bar bar-danger" style="width: 20%;"></div>
                    </div>
                </div>
                <div class="well span8">
                    <center><h4>Progress Meter</h4></center>
                      </br>
                    <div class="progress progress-striped active">
                      <div class="bar" style="width: 40%;"></div>
                    </div>
                </div>

            </div>

            <!-- METER METER METER METER METER -->

            <div class="row-fluid">
                <div class="well span4">
                      <center><h4>Overall Danger Meter 2</h4></center>
                      </br>
                      <div class="progress">
                      <div class="bar bar-success" style="width: 35%;"></div>
                      <div class="bar bar-warning" style="width: 20%;"></div>
                      <div class="bar bar-danger" style="width: 20%;"></div>
                    </div>
                </div>
                <div class="well span8">
                    <center><h4>Text Box</h4></center>
                      </br>
                    <p>String From Connected Device: Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Duis bibendum, lacus sed feugiat tempor, augue dui molestie dui, id accumsan purus ipsum a quam.
                        In vel sapien orci. Sed lobortis rhoncus dictum. Aenean elementum elementum nunc et sodales.
                        Vivamus risus nulla, ultricies quis accumsan eget, convallis at odio.
                        Suspendisse accumsan dignissim tortor sit amet porttitor.
                        Ut dignissim nibh nec lacus ullamcorper et semper ante mollis.
                    </p>
                </div>
            </div>

        </div>

        <script src="assets/js/bootstrap.js">
        </script>

        <script type="text/javascript" src="assets/js/our.js"></script>

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
