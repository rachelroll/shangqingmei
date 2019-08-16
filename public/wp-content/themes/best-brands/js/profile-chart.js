var brandProfileCharts = (function(data) {

    Highcharts.setOptions({
        lang: {
            thousandsSep: data.thousandsSeparator
        }
    });

    var brandProfile = $("#chart").attr('data-brand')
    brandProfile = brandProfile.trim();

    var bName = Object.keys(data.brands)[1];
    var setA = {name: brandProfile, color: '#18BCFF', data: data.brands[brandProfile].brand_values};
    var setB = {name: bName, color: '#848484', data: data.brands[bName].brand_values};

    for (var key in data.brands) {
        if(key != brandProfile) {
            $('#comparative').append('<option VALUE="'+key+'">'+key+'</option>');
        }
    }

    var options = {
        colors: [
            "#23E005",
            "#001BAD",
            "#18BCFF",
            "#FFF735",
            "#FF6500",
            "#FB2EF4"
        ],
        chart: {
            renderTo: 'chart',
            height: 500,
            style: {
                color: '#000',
                font: 'bold 16px Arial, Verdana, sans-serif'
            }
        },
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 720
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        },
        title: {
            text: '',
            style: {
                fontSize: 22,
                lineHeight: 22,
                color: '#000'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        xAxis: {
            title: {
                text: data.labels.brand_value_comparison.x,
                y: 10,
                style: {
                    color: '#000',
                    fontSize: 22,
                    lineHeight: 22,
                }
            },
            categories: data.years,
            labels: {
                style: {
                    fontFamily: '"HelveticaNeueforIBW01-Bold", Helvetica, Arial, sans-serif',
                    color: '#000'
                }
            },
            lineColor: '#000',
            tickColor: '#000'
        },
        yAxis: {
            title: {
                text: data.labels.brand_value_comparison.y +' ' + data.currency + data.measurement,
                x: -5,
                style: {
                    color: '#000',
                    fontSize: 22,
                    lineHeight: 22
                }
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#000'
            }],
            labels: {
                style: {
                    color: '#000'
                }
            },
            gridLineColor: '#E4E4E4'
        },
        plotOptions: {
            series: {
                lineWidth: 6
            },
            line: {
                linecap: 'round',
                marker: {
                    enabled: true,
                    radius: 5,
                    symbol: 'circle'
                }
            },
            style: {
                color: '#000'
            }
        },
        tooltip: {
            borderWidth: 0,
            backgroundColor: "#000",
            shadow: 0,
            color: "#FFFFFF",
            style: {
                fontFamily: '"HelveticaNeueforIBW01-Bold", Helvetica, Arial, sans-serif',
                color: '#FFF',
                fontSize: '22px'
            },
            useHTML: true,
            pointFormat: valueFormatter("{point.y:1,f}" ,data.currency,data.measurement)
        },
        series: [
            {
                name: data.sector,
                data: data.sector_values
            },
            {
                name: data.brand,
                data: data.brand_values
            }
        ],
        credits: {
            enabled: false
        }
    };

    function updateLineChart() {
        options.series = [setA,setB];
        options.title = {
            text: setA.name +' '+ data.labels.brand_value_comparison.vs +' '+  setB.name
        };
        lineChart = new Highcharts.Chart(options);
    }

    $("#comparative").on('change', function(){
        var selValB = $("#comparative").val();
        if(selValB == 'null') {
            initLineChart();
        } else {
            setB = {name: selValB, color: '#848484', data: data.brands[selValB].brand_values};
            updateLineChart();
        }
    });

    function initLineChart() {
        options.series = [setA];
        options.title = {
            text: setA.name
        };
        lineChart = new Highcharts.Chart(options);
    }

    // init lineChart
    initLineChart();


    function valueFormatter(vN, vC,vM) {
        var format = data.valueFormat;
        format = format.replace(/brand_value/i, vN);
        format = format.replace(/currency/i, vC);
        format = format.replace(/measurement/i, vM);
        return format;
    }
});
