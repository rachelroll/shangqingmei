//Brand profile line chart
//Shows data over the entire course of BGB
//Brand versus average of entire sector /w brand
//Written by @johnnytrinh

var brandProfileCharts = (function(data) {

    Highcharts.setOptions({
        lang: {
            thousandsSep: data.thousandsSeparator,
            drillUpText: data.labels.brands_by_sector.back_to_sectors
        }
    });

    var aName = Object.keys(data.brands)[0];
    var bName = Object.keys(data.brands)[1];
    var setA = {name: aName, color: '#08FB0A', data: data.brands[aName].brand_values};
    var setB = {name: bName, color: '#18BCFF', data: data.brands[bName].brand_values};
    var sectorColors = [
        "#FB2EF4",
        "#FF6500",
        "#FFF735",
        "#18BCFF",
        "#001BAD",
        "#23E005",

        "#FD97FA",
        "#FFA366",
        "#FFFB9A",
        "#A3E5FF",
        "#6777CE",
        "#A7F39B",

        "#FEACFB",
        "#FFC299",
        "#FFFCAF",
        "#BAEBFF",
        "#99A4DF",
        "#D3F9CD"

    ];

    function setupDropdown() {

        var brandCount = 0;
        for (var key in data.brands) {
            if(brandCount == 0){
                $('#list').append('<option SELECTED VALUE="'+key+'">'+key+'</option>');
                $('#comparative').append('<option disabled VALUE="'+key+'">'+key+'</option>');
            } else if(brandCount == 1){
                $('#list').append('<option disabled VALUE="'+key+'">'+key+'</option>');
                $('#comparative').append('<option  SELECTED VALUE="'+key+'">'+key+'</option>');
            } else {
                $('#list').append('<option VALUE="'+key+'">'+key+'</option>');
                $('#comparative').append('<option VALUE="'+key+'">'+key+'</option>');
            }
            brandCount++;
        }

    }

    function updateLineChart() {
        var options = {
            colors: [
                "#23E005",
                "#001BAD",
                "#18BCFF",
                "#FFF735",
                "#FF6500",
                "#FB2EF4"
            ],
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
            chart: {
                renderTo: 'line-chart',
                height: 500,
                style: {
                    color: '#000',
                    font: 'bold 16px Arial, Verdana, sans-serif'
                }
            },
            title: {
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
                        lineHeight: 22
                    }
                },
                categories: data.years,
                labels: {
                    style: {
                        fontSize: 14,
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

        options.series = [setA,setB];

        options.title = {
            text: setA.name +' '+ data.labels.brand_value_comparison.vs +' '+  setB.name
        };

        lineChart = new Highcharts.Chart(options);
    }

    function drawBarChartDyna() {
        var sectorData = [];
        var yearSelected = data.years.length -1;

        var dynaDrilldown = {
            activeAxisLabelStyle: {
                textDecoration: 'none',
                color: '#000'
            },
            drillUpButton: {
                relativeTo: 'spacingBox',
                position: {
                    y: 20,
                    x: 0
                },
                theme: {
                    fill: '#000',
                    'stroke-width': 0,
                    r: 0,
                    states: {
                        hover: {
                            color: '#FFF',
                            fill: '#CCC'
                        },
                        select: {
                            color: '#FFF',
                            fill: '#a4edba'
                        }
                    },
                    style: {
                        color: '#FFF'
                    }
                }

            },
            "series": []
        };

        var sectorColors = [
            "#FB2EF4",
            "#FF6500",
            "#FFF735",
            "#18BCFF",
            "#001BAD",
            "#23E005",

            "#FD97FA",
            "#FFA366",
            "#FFFB9A",
            "#A3E5FF",
            "#6777CE",
            "#A7F39B",

            "#FEACFB",
            "#FFC299",
            "#FFFCAF",
            "#BAEBFF",
            "#99A4DF",
            "#D3F9CD"

        ];

        var colorCount = 0;
        for (var key in data.sectors){
            if(data.sectors[key].sector_value) {
                sectorData.push({name: key, y: data.sectors[key].sector_value, drilldown: key });
                var listSectors = [];
                data.sectors[key].brands.forEach(function(brand) {
                    var stuff = data.brands[brand].brand_values[yearSelected];
                    listSectors.push([brand, stuff]);
                });

                dynaDrilldown.series.push({name: key, id: key, data: listSectors});

                colorCount++;
            }
        }


        sectorData.sort(function(a, b) {
            if(a.name < b.name) return -1;
            if(a.name > b.name) return 1;
            return 0;
        });

        var barOptions = {
            chart: {
                height: '500',
                renderTo: 'sector-chart',
                type: 'column',
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
            colors: sectorColors,
            labels: {
                style: {
                    fontFamily: '"HelveticaNeueforIBW01-Bold", Helvetica, Arial, sans-serif',
                    color: '#000'
                }
            },
            xAxis: {
                type: 'category',
                title: {
                    text: null
                },
                style: {
                    color: '#000',
                    fontSize: 22,
                    lineHeight: 22
                },
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: 14,
                        fontFamily: '"HelveticaNeueforIBW01-Bold", Helvetica, Arial, sans-serif',
                        color: '#000'
                    }
                },
                lineColor: '#000',
                tickColor: '#000'
            },
            yAxis: {
                min: 0,
                title: {
                    text: data.labels.brands_by_sector.y + ' ' + data.currency + data.measurement,
                    x: -5,
                    style: {
                        color: '#000',
                        fontSize: 22,
                        lineHeight: 22
                    }
                },
                labels: {
                    overflow: 'justify',
                    style: {
                        color: '#000'
                    }
                }
            },
            series: [{
                name: data.labels.brands_by_sector.all_sectors,
                colorByPoint: true,
                data: sectorData
            }],
            drilldown: dynaDrilldown,
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            tooltip: {
                valueSuffix: data.currency + data.measurement,
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
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            credits: {
                enabled: false
            }
        } ;

        barOptions.title = {
            margin: 40,
            text: data.labels.brands_by_sector.title,
            style: {
                fontSize: 22,
                lineHeight: 22,
                color: '#000'
            }
        };
        var dynaBar = new Highcharts.Chart(barOptions);

    }

    function deltaBarChart(data, labels) {
        var largeChart;
        var gradient = [];
        var rainbow = new Rainbow();
        rainbow.setSpectrum('#E0FEE0', '#08FB0A');
        rainbow.setNumberRange(0, 1);

        for (var i = 0; i <= data.length ; i++) {
            var hex = '#' + rainbow.colourAt(i/data.length);
            gradient.push(hex);
        }

        var deltaOptions = {
            chart: {
                type: 'column',
                renderTo: 'delta-chart',
                inverted: false,
                height: '500',
                style: {
                    fontSize: '22px',
                    fontFamily: '"HelveticaNeueforIBW01-Bold", Helvetica, Arial, sans-serif',
                    font: 'bold 16px Arial, Verdana, sans-serif'
                },
                animation: {
                    duration: 500
                }
            },
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 720
                    },
                    chartOptions: {
                        chart: {
                            inverted: true,
                            height: 800
                        },
                        yAxis: {
                            title: {
                                text: labels.growth_chart.y
                            }
                        },
                        series: [
                            {
                                dataLabels: {
                                    rotation: 0,
                                    y: -7
                                }
                            }
                        ]
                    }
                }]
            },
            colors: gradient,
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: 14,
                        fontFamily: '"HelveticaNeueforIBW01-Bold", Helvetica, Arial, sans-serif',
                        color: '#000'
                    }
                },
                minorTickLength: 0,
                lineWidth: 0,
                tickLength: 0,
                style: {
                    color: '#000'
                }
            },
            yAxis: {
                min: 0,
                max: 60,
                tickInterval: 10,
                tickLength: 10,
                tickColor: "#333333",
                tickPosition: 'inside',
                tickWidth: 1,
                title: {
                    text: labels.growth_chart.y,
                    x: -5,
                    style: {
                        fontSize: '22px',
                        fontFamily: '"HelveticaNeueforIBW01-Bold", Helvetica, Arial, sans-serif',
                        color: '#000'
                    }
                },
                labels: {
                    format: '{value}%',
                    style: {
                        color: '#000'
                    }
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                borderWidth: 0,
                backgroundColor: "#000000",
                shadow: 0,
                color: "#FFFFFF",
                style: {
                    color: '#FFF',
                    fontSize: '22px'
                },
                useHTML: true,
                formatter: function() {
                    var formatRanking;
                    if(this.point.ranking < 10) {
                        formatRanking = '0'+this.point.ranking;
                    } else {
                        formatRanking = this.point.ranking;
                    }
                    return '<table><tr><td>'+ formatRanking +' '+ this.point.name+'</td></tr><tr><td style="text-align: center; font-size: 14px;">'+this.y +'%</td></td></table>';

                }
            },
            plotOptions: {
                series: {
                    pointPadding: 0,
                    groupPadding: 0,
                    borderWidth: 0,
                    point: {
                        events: {
                            click: function () {
                                if(this.display_profile) {
                                    location.href = this.options.url;
                                }
                            }
                        }
                    }
                },
                column: {
                    colorByPoint: true,
                    states: {
                        hover: {
                            color: '#000000'
                        }
                    }
                }
            },
            series: [{
                name: labels.growth_chart.y,
                point: {
                    events: {
                        mouseOver: function (e) {
                            this.dataLabel.css({
                                color: "#FFFFFF"
                            });
                            if(this.display_profile) {
                                document.body.style.cursor = 'pointer'
                            }
                        },
                        mouseOut: function (e) {
                            this.dataLabel.css({
                                color: "#000000"
                            });
                            if(this.display_profile) {
                                document.body.style.cursor = 'inherent'
                            }
                        }
                    }
                },
                data: data,
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#000000',
                    align: 'right',
                    format: '{point.y}%',
                    y: 10,
                    style: {
                        fontSize: '18px',
                        fontFamily: '"HelveticaNeueforIBW01-Bold", Helvetica, Arial, sans-serif',
                        color: '#000000',
                        textOutline: false
                    }

                }
            }],
            credits: {
                enabled: false
            }
        };

        largeChart = new Highcharts.Chart(deltaOptions);

    };

    function sectorGrowth() {
        var sectorData = [];
        var yearSelected = data.years.length -1;
        var yearPrior = data.years.length -2;

        var dynaDrilldown = {
            activeAxisLabelStyle: {
                textDecoration: 'none',
                color: '#000'
            },
            drillUpButton: {
                relativeTo: 'spacingBox',
                position: {
                    y: 40,
                    x: 0
                },
                theme: {
                    fill: '#000',
                    'stroke-width': 0,
                    r: 0,
                    states: {
                        hover: {
                            color: '#FFF',
                            fill: '#CCC'
                        },
                        select: {
                            color: '#FFF',
                            fill: '#a4edba'
                        }
                    },
                    style: {
                        color: '#FFF'
                    }
                }

            },
            "series": []
        };

        var colorCount = 0;
        for (var key in data.sectors){
            if(data.sectors[key].sector_values) {

                var change = (data.sectors[key].sector_values[0] - data.sectors[key].sector_values[1]) / data.sectors[key].sector_values[1] *100;
                change = parseFloat(change.toFixed(0));

                sectorData.push({name: key, y: change, drilldown: key});
                var listSectors = [];
                data.sectors[key].brands.forEach(function(brand) {

                    var brandChange = (data.brands[brand].brand_values[yearSelected] - data.brands[brand].brand_values[yearPrior]) / data.brands[brand].brand_values[yearPrior] * 100;
                    brandChange = parseFloat(brandChange.toFixed(0));

                    if (brandChange == Infinity) {
                        listSectors.push([brand, null]);
                    } else {
                        listSectors.push([brand, brandChange]);
                    }

                });
                dynaDrilldown.series.push({name: key, id: key, data: listSectors
                    ,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y}%'
                    }
                });

                colorCount++;
            }
        }

        dynaDrilldown.series.forEach(function(name){
            name.data.sort(function (a,b) {
                return b[1]- a[1];
            });
        });


        sectorData = sectorData.sort(function(a, b) {
            return b.y - a.y;
        });

        var barOptions = {
            chart: {
                height: '500',
                renderTo: 'sector-change-chart',
                type: 'column',
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
            colors: sectorColors,
            labels: {
                style: {
                    fontFamily: '"HelveticaNeueforIBW01-Bold", Helvetica, Arial, sans-serif',
                    color: '#000'
                }
            },
            xAxis: {
                type: 'category',
                title: {
                    text: null
                },
                style: {
                    color: '#000',
                    fontSize: 16,
                    lineHeight: 22
                },
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: 14,
                        fontFamily: '"HelveticaNeueforIBW01-Bold", Helvetica, Arial, sans-serif',
                        color: '#000'
                    }
                },
                lineColor: '#000',
                tickColor: '#000'
            },
            yAxis: {
                title: {
                    text: data.labels.sector_growth_chart.y,
                    x: -5,
                    style: {
                        color: '#000',
                        fontSize: 22,
                        lineHeight: 22
                    }
                },
                labels: {
                    overflow: 'justify',
                    formatter: function() {
                        return this.value+"%";
                    },
                    style: {
                        color: '#000'
                    }
                }
            },
            series: [{
                name: data.labels.sector_growth_chart.all_sectors,
                colorByPoint: true,
                data: sectorData,
                dataLabels: {
                    enabled: true,
                    color: '#000000',
                    format: '{point.y}%',
                    style: {
                        fontFamily: '"HelveticaNeueforIBW01-Bold", Helvetica, Arial, sans-serif',
                        color: '#000000',
                        textOutline: false
                    }

                }
            }],
            drilldown: dynaDrilldown,
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            tooltip: {
                valueSuffix: data.currency + data.measurement,
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
                pointFormat: "{point.y:1,f} %"
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            credits: {
                enabled: false
            }
        } ;

        barOptions.title = {
            margin: 60,
            text: data.labels.sector_growth_chart.title,
            style: {
                fontSize: 22,
                lineHeight: 22,
                color: '#000'
            }
        };
        var dynaBar = new Highcharts.Chart(barOptions);

    }

    function sectorHistoryChart() {

        var sectorHistoryData = [];
        for (var key in data.sectors){
            if(data.sectors[key].sector_values) {
                sectorHistoryData.push({name: key, id: key, data: data.sectors[key].sector_values});
            }
        }

        var sectorHistoryOptions = {
            chart: {
                renderTo: 'sector-history',
                height: 500,
                style: {
                    color: '#000',
                    font: 'bold 16px Arial, Verdana, sans-serif'
                }
            },
            colors: sectorColors,
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
                    text:  data.labels.sector_history_chart.x,
                    y: 10,
                    style: {
                        color: '#000',
                        fontSize: 22,
                        lineHeight: 22
                    }
                },
                categories: data.years,
                labels: {
                    style: {
                        fontSize: 14,
                        fontFamily: '"HelveticaNeueforIBW01-Bold", Helvetica, Arial, sans-serif',
                        color: '#000'
                    }
                },
                lineColor: '#000',
                tickColor: '#000'
            },
            yAxis: {
                title: {
                    text: data.labels.sector_history_chart.y + ' ' + data.currency + data.measurement,
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
                backgroundColor: "#000000",
                shadow: 0,
                color: "#FFFFFF",
                style: {
                    color: '#FFF',
                    fontSize: '22px'
                },
                useHTML: true,
                formatter: function() {
                    var fullYear;
                    if(this.point.x < 10) {
                        fullYear = '200'+this.point.x;
                    } else {
                        fullYear = '20'+this.point.x;
                    }
                    var valueNum = this.point.y.toLocaleString(document.documentElement.lang);
                    // return '<table><tr><td style="text-align: left; font-size: 10px;">'+this.series.name+'</td></tr><tr><td> '+valueNum + ' ' + data.currency + data.measurement +'</td></tr><tr><td style="text-align: left; font-size: 14px;">'+fullYear+'</td></td></table>';
                    return '<table><tr><td style="text-align: left; font-size: 10px;">'+this.series.name+'</td></tr><tr><td> '+ valueFormatter(valueNum,data.currency,data.measurement) +'</td></tr><tr><td style="text-align: left; font-size: 14px;">'+fullYear+'</td></td></table>';

                }
            },
            series: sectorHistoryData,
            credits: {
                enabled: false
            }
        };


        sectorHistoryData.sort(function(a, b) {
            if(a.name < b.name) return -1;
            if(a.name > b.name) return 1;
            return 0;
        });


        sectorHistoryOptions.title = {
            text: data.labels.sector_history_chart.title
        };

        new Highcharts.Chart(sectorHistoryOptions);
    }

    $("#list").on('change', function(){
        var selValA = $("#list").val();
        setA = {name: selValA, color: '#08FB0A', data: data.brands[selValA].brand_values};
        updateLineChart();
        $("#comparative option").removeAttr("disabled");
        $("#comparative option[value='"+selValA+"']").attr("disabled", "disabled");
    });

    $("#comparative").on('change', function(){
        var selValB = $("#comparative").val();
        setB = {name: selValB, color: '#18BCFF', data: data.brands[selValB].brand_values};
        updateLineChart();
        $("#list option").removeAttr("disabled");
        $("#list option[value='"+selValB+"']").attr("disabled", "disabled");
    });

    var deltaBrands = [];

    for (var key in data.brands){
        var theValuesss = data.brands[key].brand_values;
        var valuesLength = theValuesss.length;

        var thisYear = data.brands[key].brand_values[valuesLength-1];
        var lastyear = data.brands[key].brand_values[valuesLength-2];

        var delta = data.brands[key].delta;
        var fixedDelta = parseInt(delta);

        if( fixedDelta > 10) {
            deltaBrands.push({y: fixedDelta, name: key, display_profile: data.brands[key].display_profile, ranking: data.brands[key].rank, url: data.brands[key].url });
        }
    }


    function compare(a,b) {
        if (a.y < b.y)
            return -1;
        if (a.y > b.y)
            return 1;
        return 0;
    }

    setupDropdown();

    if( $('#delta-chart').length ) {
        // init Delta Chart
        deltaBrands.sort(compare);
        deltaBarChart(deltaBrands, data.labels);
    }

    if( $('#line-chart').length ) {
        // init Line Chart
        updateLineChart();
    }


    if( $('#sector-chart').length ) {
        // init Sector Bar Chart
        drawBarChartDyna();
    }

    if( $('#sector-change-chart').length ) {
        // init sector Growth Page
        sectorGrowth();
    }

    if( $('#sector-history').length ) {
        // init Sector History
        sectorHistoryChart();
    }

    function valueFormatter(vN, vC,vM) {
        var format = data.valueFormat;
        format = format.replace(/brand_value/i, vN);
        format = format.replace(/currency/i, vC);
        format = format.replace(/measurement/i, vM);
        return format;
    }

});