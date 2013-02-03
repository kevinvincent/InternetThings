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
                    var gaugeUpdateInterval = 1000;

                    // setup plot
                    var options = {
                        series: { shadowSize: 0 }, // drawing is faster without shadows
                        yaxis: { min: 0, max: 100 },
                        xaxis: { show: false }
                    };
                    var plot = $.plot($("#placeholder"), [ getRandomData() ], options);

                    function getFromServer(id) {
                        var xmlhttp;
                        if (window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();}
                        else{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}
                        xmlhttp.open("GET","get.php?id="+id,false);
                        xmlhttp.send();
                        if (xmlhttp.readyState==4 && xmlhttp.status==200)
                        {
                            obj = JSON && JSON.parse(xmlhttp.responseText) || $.parseJSON(xmlhttp.responseText);
                            return obj.val;
                        }
                        else {
                            return 0;
                        }
                    }

                    function updateGauges() {
                        var dat = getFromServer("gauge1");
                        g1.refresh(dat);
                        g2.refresh(dat);
                        g3.refresh(dat);
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