$(function() {
    try {
        var container = $("#cpuChart");
        var maximum = container.outerWidth() / 2 || 300;
        var data = [];

        function getRandomData() {

            if (data.length) {
                data = data.slice(1);
            }

            while (data.length < maximum) {
                var previous = data.length ? data[data.length - 1] : 50;
                var y = previous + Math.random() * 10 - 5;
                data.push(y < 0 ? 0 : y > 100 ? 100 : y);
            }

            // zip the generated y values with the x values

            var res = [];
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]])
            }

            return res;
        }

        var series = [{
            color: "#2E9AFE",
            data: getRandomData(),
            lines: {
                fill: true
            }
        }];

        var series2 = [{
            color: "#8A0868",
            data: getRandomData(),
            lines: {
                fill: true
            }
        }];

        var series3 = [{
            color: "#DF7401",
            data: getRandomData(),
            lines: {
                fill: true
            }
        }];

        var plotstuff = {
            grid: {
                borderWidth: 1,
                minBorderMargin: 10,
                labelMargin: 5,
                backgroundColor: {
                    colors: ["#fff", "#e4f4f4"]
                },
                markings: function(axes) {
                    var markings = [];
                    var xaxis = axes.xaxis;
                    for (var x = Math.floor(xaxis.min); x < xaxis.max; x += xaxis.tickSize * 2) {
                        markings.push({ xaxis: { from: x, to: x + xaxis.tickSize }, color: "rgba(232, 232, 255, 0.2)" });
                    }
                    return markings;
                }
            },
            xaxis: {
                tickFormatter: function() {
                    return "";
                }
            },
            yaxis: {
                min: 0,
                max: 100
            },
            legend: {
                show: false
            }
        };

        var plot = $.plot($("#cpuChart"), series, plotstuff);
        var plot2 = $.plot($("#memoryChart"), series2, plotstuff);
        var plot3 = $.plot($("#dataChart"), series3, plotstuff);
    } catch(e) {

    }


    $(window).resize(function() {
        try {
            plot = $.plot($("#cpuChart"), series, plotstuff);
            plot2 = $.plot($("#memoryChart"), series2, plotstuff);
            plot3 = $.plot($("#dataChart"), series3, plotstuff);
        } catch(e) {}
    });

    // Update the random dataset at 25FPS for a smoothly-animating chart
    setInterval(function updateRandom() {
        try {
            series[0].data = getRandomData();
            series2[0].data = getRandomData();
            series3[0].data = getRandomData();

            plot.setData(series);
            plot.draw();
            plot2.setData(series2);
            plot2.draw();
            plot3.setData(series3);
            plot3.draw();
        } catch(e) {}
    }, 1000/20);


    var g1 = new JustGage({
        id: "cpuGauge",
        value: 0,
        min: 0,
        max: 100,
        title: "Usage",
        label: "%",
        levelColorsGradient: true
    });

    var g2 = new JustGage({
        id: "memoryGauge",
        value: 0,
        min: 0,
        max: 100,
        title: "Usage",
        label: "%",
        levelColorsGradient: true
    });

    setInterval(function() {
        g1.refresh(getRandomInt(0, 100));
        g2.refresh(getRandomInt(0, 100));
    }, 2500);
});