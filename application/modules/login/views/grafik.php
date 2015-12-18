<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Highcharts Pie Chart</title>
        <link href="<?php echo base_url();?>source/plugins/cake.generic.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var options = {
                    chart: {
                        renderTo: 'container',
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false
                    },
                    title: {
                        text: 'Web Sales & Penjualan'
                    },
                    tooltip: {
                        formatter: function() {
                            return '<b>' + this.point.name + '</b>: ' + this.y+ ' Pengunjung';
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                color: '#000000',
                                connectorColor: '#000000',
                                formatter: function() {
                                    return '<b>' + this.point.name + '</b>: ' + this.y;
                                }
                            },
                            showInLegend: true
                        }
                    },
                    series: []
                };

                $.getJSON("<?php echo $base_url;?>", function(json) {
                    options.series = json;
                    chart = new Highcharts.Chart(options);
                });
            });
        </script>
        <script src="<?php echo base_url();?>source/plugins/highcharts.js"></script>
        <script src="<?php echo base_url();?>source/plugins/exporting.js"></script>
    </head>
    <body>
        <a class="link_header" href="/">&lt;&lt; Back to index</a>
        <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
    </body>
</html>
