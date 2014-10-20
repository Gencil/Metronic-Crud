var Charts = function () {

    return {

        initCharts: function () {
            if (!jQuery.plot) {
                return;
            }

            function showChartTooltip(x, y, xValue, yValue) {
                $('<div id="tooltip" class="chart-tooltip">'+yValue+'<\/div>').css({
                    position: 'absolute',
                    display: 'none',
                    top: y - 40,
                    left: x - 40,
                    border: '0px solid #ccc',
                    padding: '2px 6px',
                    'background-color': '#fff',
                }).appendTo("body").fadeIn(200);
            }

            var data = [];
            var totalPoints = 250;

            // random data generator for plot charts

            function getRandomData() {
                if (data.length > 0) data = data.slice(1);
                // do a random walk
                while (data.length < totalPoints) {
                    var prev = data.length > 0 ? data[data.length - 1] : 50;
                    var y = prev + Math.random() * 10 - 5;
                    if (y < 0) y = 0;
                    if (y > 100) y = 100;
                    data.push(y);
                }
                // zip the generated y values with the x values
                var res = [];
                for (var i = 0; i < data.length; ++i) res.push([i, data[i]])
                return res;
            }

            

            function randValue() {
                return (Math.floor(Math.random() * (1 + 50 - 20))) + 10;
            }

            var visitors = [
                ['01/2013', 500],
                ['02/2013', 1500],
                ['03/2013', 2600],
                ['04/2013', 1200],
                ['05/2013', 560],
                ['06/2013', 2000],
                ['07/2013', 2350],
                ['08/2013', 1500],
                ['09/2013', 4700],
                ['10/2013', 1300],
            ];


            if ($('#site_statistics').size() != 0) {

                $('#site_statistics_loading').hide();
                $('#site_statistics_content').show();

                var plot_statistics = $.plot($("#site_statistics"), 

                    [
                    {
                        data:visitors,
                        lines: {
                            fill: 0.6,
                            lineWidth: 0,
                        },
                        color: ['#f89f9f']
                    },
                    {
                        data: visitors,
                        points: {
                            show: true,
                            fill: true,
                            radius: 5,
                            fillColor: "#f89f9f",
                            lineWidth: 3
                        },
                        color: '#fff',
                        shadowSize: 0
                    },
                    ], 

                    {
                    
                    xaxis: {
                        tickLength: 0,
                        tickDecimals: 0,                        
                        mode: "categories",
                        min: 2,
                        font: {
                            lineHeight: 14,
                            style: "normal",
                            variant: "small-caps",
                            color: "#6F7B8A"
                        }
                    },
                    yaxis: {
                        ticks: 5,
                        tickDecimals: 0,
                        tickColor: "#eee",
                        font: {
                            lineHeight: 14,
                            style: "normal",
                            variant: "small-caps",
                            color: "#6F7B8A"
                        }
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        tickColor: "#eee",
                        borderColor: "#eee",
                        borderWidth: 1
                    }
                });

                var previousPoint = null;
                $("#site_statistics").bind("plothover", function (event, pos, item) {
                    $("#x").text(pos.x.toFixed(2));
                    $("#y").text(pos.y.toFixed(2));
                    if (item) {
                        if (previousPoint != item.dataIndex) {
                            previousPoint = item.dataIndex;

                            $("#tooltip").remove();
                            var x = item.datapoint[0].toFixed(2),
                                y = item.datapoint[1].toFixed(2);

                            showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' visits');
                        }
                    } else {
                        $("#tooltip").remove();
                        previousPoint = null;
                    }
                });
            }               

            if ($('#load_statistics').size() != 0) {
                 //server load
                $('#load_statistics_loading').hide();
                $('#load_statistics_content').show();
        
                var updateInterval = 30;
                var plot_statistics = $.plot($("#load_statistics"), [getRandomData()], {
                series: {
                    shadowSize: 1
                },
                lines: {
                    show: true,
                    lineWidth: 0.2,
                    fill: true,
                    fillColor: {
                        colors: [{
                                opacity: 0.1
                            }, {
                                opacity: 1
                            }
                        ]
                    }
                },
                yaxis: {
                    ticks: 4,
                    min: 0,
                    max: 100,
                    tickFormatter: function (v) {
                        return v + "%";
                    },                    
                    tickColor: "#eee"
                },
                xaxis: {
                    show: false
                },
                colors: ["#fcb322"],
                grid: {
                    tickColor: "#a8a3a3",
                    borderWidth: 0
                }
                });
                
                function statisticsUpdate() {
                plot_statistics.setData([getRandomData()]);
                plot_statistics.draw();
                setTimeout(statisticsUpdate, updateInterval);
                
                }
                
                statisticsUpdate();

                $('#load_statistics').bind("mouseleave", function () {
                    $("#tooltip").remove();
                });
            }

            if ($('#site_activities').size() != 0) {
                //site activities
                var previousPoint2 = null;
                $('#site_activities_loading').hide();
                $('#site_activities_content').show();

                var activities = [
                    [1, 10],
                    [2, 9],
                    [3, 8],
                    [4, 6],
                    [5, 5],
                    [6, 3],
                    [7, 9],
                    [8, 10],
                    [9, 12],
                    [10, 14],
                    [11, 15],
                    [12, 13],
                    [13, 11],
                    [14, 10],
                    [15, 9],
                    [16, 8],
                    [17, 12],
                    [18, 14],
                    [19, 16],
                    [20, 19],
                    [21, 20],
                    [22, 20],
                    [23, 19],
                    [24, 17],
                    [25, 15],
                    [25, 14],
                    [26, 12],
                    [27, 10],
                    [28, 8],
                    [29, 10],
                    [30, 12],
                    [31, 10],
                    [32, 9],
                    [33, 8],
                    [34, 6],
                    [35, 5],
                    [36, 3],
                    [37, 9],
                    [38, 10],
                    [39, 12],
                    [40, 14],
                    [41, 15],
                    [42, 13],
                    [43, 11],
                    [44, 10],
                    [45, 9],
                    [46, 8],
                    [47, 12],
                    [48, 14],
                    [49, 16],
                    [50, 12],
                    [51, 10]
                ];

                var plot_activities = $.plot(
                    $("#site_activities"), [{
                        data: activities,
                        color: "rgba(107,207,123, 0.9)",
                        shadowSize: 0,
                        bars: {
                            show: true,
                            lineWidth: 0,
                            fill: true,
                            fillColor: {
                                colors: [{
                                        opacity: 1
                                    }, {
                                        opacity: 1
                                    }
                                ]
                            }
                        }
                    }
                ], {
                    series: {
                        bars: {
                            show: true,
                            barWidth: 0.9
                        }
                    },
                    grid: {
                        show: false,
                        hoverable: true,
                        clickable: false,
                        autoHighlight: true,
                        borderWidth: 0
                    },
                    yaxis: {
                        min: 0,
                        max: 20
                    }
                });

                $("#site_activities").bind("plothover", function (event, pos, item) {
                    $("#x").text(pos.x.toFixed(2));
                    $("#y").text(pos.y.toFixed(2));
                    if (item) {
                        if (previousPoint2 != item.dataIndex) {
                            previousPoint2 = item.dataIndex;
                            $("#tooltip").remove();
                            var x = item.datapoint[0].toFixed(2),
                                y = item.datapoint[1].toFixed(2);
                           showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' activities');
                        }
                    }
                });

                $('#site_activities').bind("mouseleave", function () {
                    $("#tooltip").remove();
                });
            }
        },
        
        initMiniCharts: function () {
             
            $('.easy-pie-chart .number.transactions').easyPieChart({
                animate: 1000,
                size: 75,
                lineWidth: 3,
                barColor: App.getLayoutColorCode('yellow')
            });

            $('.easy-pie-chart .number.visits').easyPieChart({
                animate: 1000,
                size: 75,
                lineWidth: 3,
                barColor: App.getLayoutColorCode('green')
            });
             
            $('.easy-pie-chart .number.bounce').easyPieChart({
                animate: 1000,
                size: 75,
                lineWidth: 3,
                barColor: App.getLayoutColorCode('red')
            });

            $('.easy-pie-chart-reload').click(function(){
                $('.easy-pie-chart .number').each(function() {
                    var newValue = Math.floor(100*Math.random());
                    $(this).data('easyPieChart').update(newValue);
                    $('span', this).text(newValue);
                });
            });
               
            $("#sparkline_bar").sparkline([8,9,10,11,10,10,12,10,10,11,9,12,11,10,9,11,13,13,12], {
                type: 'bar',
                width: '100',
                barWidth: 5,
                height: '55',
                barColor: '#35aa47',
                negBarColor: '#e02222'}
            );

            $("#sparkline_bar2").sparkline([9,11,12,13,12,13,10,14,13,11,11,12,11,11,10,12,11,10], {
                type: 'bar',
                width: '100',
                barWidth: 5,
                height: '55',
                barColor: '#ffb848',
                negBarColor: '#e02222'}
            );

            $("#sparkline_line").sparkline([9,10,9,10,10,11,12,10,10,11,11,12,11,10,12,11,10,12], {
                type: 'line',
                width: '100',
                height: '55',
                lineColor: '#ffb848'
            });

        }
    };

}();