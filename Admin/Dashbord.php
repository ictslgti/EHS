<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin Dashboard</title>

    <?php include_once('../script.php'); ?>
</head>

<body>


    <?php include_once('nav.php'); ?>

    <?php include_once('head.php'); ?>







    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 p-r-0 title-margin-right">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-body" style="width: 0px; height: 0px;"></div>
                                
                                  
                                        <h3> Admin Dashboard</h3>
                                        <p style="color:green;"><marquee><h3> <h3>Welcome to Hire Worker!</h3></marquee>
                                        <img src="wellcomein.jpg" alt="wellcomein">
                                      
                                        <img src="sri-lanka-map-location.jpg"style="float: right;" alt="Workplace" usemap="#workmap" width="200" height="100">
                            <map name="workmap">

                                    <center ><img src="imagesadmin.jpg" alt="Italian Trulli"></center >
                                <div class="card-body" style="width: 20px; height: 10px;"></div>
                            </div>
                            <div class="card-body">
                         

                                <!-- your content start  -->
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-header">
                                                No of Workers
                                            </div>
                                            <div class="card-body">
                                                <h1>50</h1>
                                            </div>
                                        </div>
                                    </div>


                                    <html>
                                    <div class="col-md-4">

                                        <head>
                                            <script type="text/javascript"
                                                src="https://www.gstatic.com/charts/loader.js"></script>
                                            <script type="text/javascript">
                                            google.charts.load('current', {
                                                'packages': ['corechart']
                                            });
                                            google.charts.setOnLoadCallback(drawChart);


                                            function drawChart() {

                                                var data = google.visualization.arrayToDataTable([
                                                    ['Task', 'Hours per Day'],
                                                    ['CEO', 11],
                                                    ['MANAGER', 2],
                                                    ['ASSISTANT MANAGER', 2],
                                                    ['SUPER VISOR', 2],
                                                    ['EMPLOYEE', 7]
                                                ]);

                                                var options = {
                                                    title: 'Daily workers  Activities of work'
                                                };

                                                var chart = new google.visualization.PieChart(document.getElementById(
                                                    'piechart'));

                                                chart.draw(data, options);
                                            }
                                            </script>
                                        </head>

                                        <body>

                                            <div id="piechart" style="width: 400px; height: 300px;"></div>
                                    </div>
</body>

</html>
<html>

<head>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Mon', 28, 28, 38, 38],
            ['Tue', 38, 38, 55, 55],
            ['Wed', 55, 55, 77, 77],
            ['Thu', 77, 77, 66, 66],

            ['Fri', 66, 66, 22, 22]
            // Treat the first row as data.
        ], true);

        var options = {
            legend: 'none',
            bar: {
                groupWidth: '100%'
            }, // Remove space between bars.
            candlestick: {
                fallingColor: {
                    strokeWidth: 0,
                    fill: '#a52714'
                }, // red
                risingColor: {
                    strokeWidth: 0,
                    fill: '#0f9d58'
                } // green
            }
        };

        var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
    </script>
</head>

<body>
    <div class="col-md-2">
        <div id="chart_div" style="width: 500px; height: 350px;"></div>
    </div>

</body>

</html>



</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// Function to fetch weather data from API
function fetchWeatherData() {
    // Replace 'YOUR_API_KEY' with your actual API key
    const apiKey = 'YOUR_API_KEY';
    const apiUrl = `https://api.weatherapi.com/v1/forecast.json?key=${apiKey}&q=YourCity&days=7`;

    return fetch(apiUrl)
        .then(response => response.json())
        .then(data => data.forecast.forecastday);
}

// Function to create and render the weather chart
function renderWeatherChart(weatherData) {
    const dates = weatherData.map(day => day.date);
    const temperatures = weatherData.map(day => day.day.avgtemp_c);

    const ctx = document.getElementById('weatherChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: dates,
            datasets: [{
                label: 'Average Temperature (°C)',
                data: temperatures,
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                fill: false,
            }]
        },
        options: {
            scales: {
                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Date'
                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Temperature (°C)'
                    }
                }
            }
        }
    });
}

// Fetch weather data and render the chart when the page loads
document.addEventListener('DOMContentLoaded', () => {
    fetchWeatherData()
        .then(weatherData => {
            renderWeatherChart(weatherData);
        })
        .catch(error => {
            console.error('Error fetching weather data:', error);
        });
});
</script>
<html>
<head>
    <title>Technical Support Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        #header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        #sidebar {
            width: 250px;
            background-color: #f4f4f4;
            float: left;
            padding: 15px;
        }
        #content {
            margin-left: 250px;
            padding: 15px;
        }
        .card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div id="Blue">
       <center> <<h1 style="border: 2px solid DodgerBlue;">Technical Support Admin Dashboard</h1></center>
    </div>Technical Support Admin Dashboard
    <div id="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Tickets</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>
    <div id="content">
        <div class="card">
            <h2>Dashboard</h2>
            <!-- Dashboard content goes here -->
        </div>
        <div class="card">
            <h2>Tickets</h2>
            <!-- Ticket management content goes here -->
        </div>
        <div class="card">
            <h2>Reports</h2>
            <!-- Reporting content goes here -->
        </div>
        <div class="card">
            <h2>Settings</h2>
            <!-- Settings content goes here -->
        </div>
    </div>
</body>
</html>


<!-- your content finish  -->
</div>
</div>
</div>
</div>

</div>
</div>
</div>
<?php include_once('../navscript.php'); ?>
</body>

</html>