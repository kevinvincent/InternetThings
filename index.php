
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
    <style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }

      /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }

    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

    }

    </style>
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
                    <li><a href="#about"><i class="icon-cog icon-white"></i> Log</a></li>
                    <li><a href="#contact"><i class="icon-list icon-white"></i> Settings</a></li>
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
                <center><p>Data Sent To Dashboard</p></center>
                <table class="table table-condensed">
                    <tr>
                        <td>1</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                    <tr class="success">
                        <td>2</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                    <tr class="error">
                        <td>4</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Error</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                    <tr class="info">
                        <td>5</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Info</td>
                    </tr>
                    <tr class="warning">
                        <td>5</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Warning</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
                    </tr>
                </table>
            </div>

            <!-- GRAPH GRAPH GRAPH GRAPH -->
            <div class="well span8" id="outer">
                <center><p>Temperature Monitor</p></center>
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
                <div class="well span12">
                      <center>Overall Danger Meter</center>
                      </br>
                      <div class="progress">
                      <div class="bar bar-success" style="width: 35%;"></div>
                      <div class="bar bar-warning" style="width: 20%;"></div>
                      <div class="bar bar-danger" style="width: 10%;"></div>
                    </div>
                </div>
            </div>

        </div>

        <script src="assets/js/bootstrap.js">
        </script>

        <script type="text/javascript">
            $(document).ready(function(){

                $(function () {

                    $("#placeholder").css("width", $("#outer").width());
                    $("#tablebox").css("height", $("#outer").height()+40);
                    
                    var g1 = new JustGage({
                        id: "gauge1",
                        value: 0,
                        min: 0,
                        max: 100,
                        title: "Parameter 1",
                        startAnimationTime: 0
                    });

                    var g2 = new JustGage({
                        id: "gauge2",
                        value: 0,
                        min: 0,
                        max: 100,
                        title: "Parameter 2",
                        startAnimationTime: 0
                    });

                    var g3 = new JustGage({
                        id: "gauge3",
                        value: 0,
                        min: 0,
                        max: 100,
                        title: "Parameter 3",
                        startAnimationTime: 0
                    });

                    var data = [], totalPoints = 300;
                    function getRandomData() {
                        if (data.length > 0)
                            data = data.slice(1);

                        // do a random walk
                        while (data.length < totalPoints) {
                            var prev = data.length > 0 ? data[data.length - 1] : 50;
                            var y = prev + Math.random() * 10 - 5;
                            if (y < 0)
                                y = 0;
                            if (y > 100)
                                y = 100;
                            data.push(y);
                        }

                        // zip the generated y values with the x values
                        var res = [];
                        for (var i = 0; i < data.length; ++i)
                            res.push([i, data[i]])
                        return res;
                    }

                    // setup control widget
                    var updateInterval = 30;
                    var gaugeUpdateInterval = 5000;

                    // setup plot
                    var options = {
                        series: { shadowSize: 0 }, // drawing is faster without shadows
                        yaxis: { min: 0, max: 100 },
                        xaxis: { show: false }
                    };
                    var plot = $.plot($("#placeholder"), [ getRandomData() ], options);

                    function updateGauges() {
                        g1.refresh(Math.floor(Math.random()*101));
                        g2.refresh(Math.floor(Math.random()*101));
                        g3.refresh(Math.floor(Math.random()*101));
                        setTimeout(updateGauges, gaugeUpdateInterval);
                    }
                    function updateGraph() {
                        plot.setData([ getRandomData() ]);
                        plot.draw();
                        setTimeout(updateGraph, updateInterval);
                    }

                    updateGraph();
                    updateGauges();
                });

               $(window).bind('resize', function () { 

                    $("#placeholder").css("width", $("#outer").width());
                    $("#tablebox").css("height", $("#outer").height()+40);

                });

            });
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
