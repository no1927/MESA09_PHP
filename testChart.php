<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawVisualization);

        function drawVisualization() {
            // Some raw data (not necessarily accurate)
            var data = google.visualization.arrayToDataTable([
                ['年', '第一季', '第二季', '第三季', '第四季'],
                ['2004',  400,      550,        600,             700],
                ['2005',  440,      650,        700,             600],
                ['2006',  520,      600,        650,             660],
                ['2007',  600,      650,        615,             770],
                ['2008',  600,      650,        615,             770],
                ['2009',  600,      650,        615,             770],
                ['2010',  600,      650,        615,             770],
                ['2011',  700,      700,        629,             800]
            ]);

            var options = {
                title : '每季獲利',
                vAxis: {title: '獲利'},
                hAxis: {title: '年'},
                seriesType: 'bars',
                series: {5: {type: 'line'}}
            };

            var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div id="chart_div" style="width: 900px; height: 500px;"></div>
</body>
</html>