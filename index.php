
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
    </style>
  </head>
  <body>
    
    <div class="navbar navbar-fixed-top navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="#">
            DashBoard
          </a>
        </div>
      </div>
    </div>

    <div id="wrap">
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
            <div class="well span8" id="outer">
                <center><p>Temperature Monitor</p></center>
                <div id="placeholder" style="width:600px;height:300px"></div>
            </div>
            </div>

        </div>

        <div class="container">

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

        </div>

        <script src="assets/js/bootstrap.js">
        </script>

        <script type="text/javascript">
            $(document).ready(function(){

               $(function () {

                    $("#tablebox").css("height", $("#outer").height()+40);

                    var nl = $("#outer").height();
                    var nw = $("#outer").width();
     
                    $("#placeholder").css("height", nl);
                    $("#placeholder").css("width", nw);

                    var d1 = [];
                    for (var i = 0; i < 14; i += 0.5)
                        d1.push([i, Math.sin(i)]);

                    var d2 = [[0, 3], [4, 8], [8, 5], [9, 13]];

                    // a null signifies separate line segments
                    var d3 = [[0, 12], [7, 12], null, [7, 2.5], [12, 2.5]];
                    
                    $.plot($("#placeholder"), [ d1, d2, d3 ]);

                    var g1 = new JustGage({
                        id: "gauge1",
                        value: 25,
                        min: 0,
                        max: 100,
                        title: "Parameter 1",
                        startAnimationTime: 2500,
                        startAnimationType: "bounce"
                    });

                    var g2 = new JustGage({
                        id: "gauge2",
                        value: 50,
                        min: 0,
                        max: 100,
                        title: "Parameter 2",
                        startAnimationTime: 2500,
                        startAnimationType: "bounce"
                    });

                    var g3 = new JustGage({
                        id: "gauge3",
                        value: 75,
                        min: 0,
                        max: 100,
                        title: "Parameter 3",
                        startAnimationTime: 2500,
                        startAnimationType: "bounce"
                    });

                });

               $(window).bind('resize', function () { 

                    var nl = $("#outer").height();
                    var nw = $("#outer").width();
     
                    $("#placeholder").css("height", nl);
                    $("#placeholder").css("width", nw);

                    var d1 = [];
                    for (var i = 0; i < 14; i += 0.5)
                        d1.push([i, Math.sin(i)]);

                    var d2 = [[0, 3], [4, 8], [8, 5], [9, 13]];

                    // a null signifies separate line segments
                    var d3 = [[0, 12], [7, 12], null, [7, 2.5], [12, 2.5]];
                    
                    $.plot($("#placeholder"), [ d1, d2, d3 ]);

                    $("#tablebox").css("height", $("#outer").height()+40);

                });

            });
        </script>

        <div id="push"></div>
    </div> <!-- Wrapper -->

    <div id="footer">
      <div class="container">
        </br>
        <p class="muted credit">Your Project Page <a href="http://martinbean.co.uk">PROJECT</a> - InternetThings Dashboard <a href="https://github.com/kevinvincent/InternetThings">Github</a>.</p>
      </div>
    </div>
  </body>
</html>
