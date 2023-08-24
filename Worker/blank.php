<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin Dashboard</title>
    <title>Motivation and Energy Levels Chart</title>
                                    <!-- Include Chart.js from a CDN -->
                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                                <h1> Employees</h1>
                               <center><h3>Welcome to Hire Worker!</h3></center>
                            </div>
                            <div class="card-body">
                                <!-- your content start  -->
                                <div class="row">
                               
                               
                               
                                <div class="row">
                               <div class="column">
                                     
                                <div class="row">
                                    <div class="column">
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script type='text/javascript'>
                                        
                                        google.charts.load('current', {
                                            'packages': ['annotationchart']
                                        });
                                       
                                        google.charts.setOnLoadCallback(drawChart);

                                        function drawChart() {
                                            var data = new google.visualization.DataTable();
                                            data.addColumn('date', 'Date');
                                            data.addColumn('number', 'Kepler-22b mission');
                                            data.addColumn('string', 'Kepler title');
                                            data.addColumn('string', 'Kepler text');
                                            data.addColumn('number', 'Gliese 163 mission');
                                            data.addColumn('string', 'Gliese title');
                                            data.addColumn('string', 'Gliese text');
                                            data.addRows([
                                                [new Date(2314, 2, 15), 12400, undefined, undefined,
                                                    10645, undefined, undefined
                                                ],
                                                [new Date(2314, 2, 16), 24045, 'Lalibertines', 'First encounter',
                                                    12374, undefined, undefined
                                                ],
                                                [new Date(2314, 2, 17), 35022, 'Lalibertines', 'They are very tall',
                                                    15766, 'Gallantors', 'First Encounter'
                                                ],
                                                [new Date(2314, 2, 18), 12284, 'Lalibertines', 'Attack on our crew!',
                                                    34334, 'Gallantors', 'Statement of shared principles'
                                                ],
                                                [new Date(2314, 2, 19), 8476, 'Lalibertines', 'Heavy casualties',
                                                    66467, 'Gallantors', 'Mysteries revealed'
                                                ],
                                                [new Date(2314, 2, 20), 0, 'Lalibertines', 'All crew lost',
                                                    79463, 'Gallantors', 'Omniscience achieved'
                                                ]
                                            ]);

                                            var chart = new google.visualization.AnnotationChart(document.getElementById('chart_div'));

                                            var options = {
                                                displayAnnotations: true
                                            };

                                            chart.draw(data, options);
                                        }
                                       
                                    </script>
                                     </div>
                                     <div class="column">
                                   
                                        <div style='width: 450px;height: 250px;'>
                                            <canvas id="myChart"></canvas>
                                        </div>

                                        <script>
                                            // PHP Data Array
                                            <?php
                                            $timeIntervals = ['Morning', 'Mid-Morning', 'Afternoon', 'Evening'];
                                            $motivationLevels = [7, 6, 5, 8];
                                            $energyLevels = [8, 7, 6, 9];
                                            ?>

                                            // JavaScript Data
                                            var timeIntervals = <?php echo json_encode($timeIntervals); ?>;
                                            var motivationLevels = <?php echo json_encode($motivationLevels); ?>;
                                            var energyLevels = <?php echo json_encode($energyLevels); ?>;

                                            // Chart.js Configuration
                                            var ctx = document.getElementById('myChart').getContext('2d');
                                            var myChart = new Chart(ctx, {
                                                type: 'bar',
                                                data: {
                                                    labels: timeIntervals,
                                                    datasets: [{
                                                        label: 'FULL TIME WORK',
                                                        data: motivationLevels,
                                                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                                        borderColor: 'rgba(75, 192, 192, 1)',
                                                        borderWidth: 1
                                                    }, {
                                                        label: 'PART TIME WORK',
                                                        data: energyLevels,
                                                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                        borderColor: 'rgba(255, 99, 132, 1)',
                                                        borderWidth: 1
                                                    }]
                                                },
                                                options: {
                                                    scales: {
                                                        y: {
                                                            beginAtZero: true,
                                                            max: 10
                                                        }
                                                    }
                                                }
                                            });
                                        </script>
                              <?php
// Your PHP code to fetch job statistics here

// Sample data (replace with actual data)
$totalJobs = 100;
$completedJobs = 70;
$pendingJobs = 30;
?>

<html>
<head>
    <title>Worker Dashboard</title>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
      <center> <h3>Job Statistics Chart</h3></center>
       <canvas id="jobChart" width="400" height="200"></canvas>

    <script>
        // Job statistics data
        var data = {
            labels: ['Total Jobs', 'Completed Jobs', 'Pending Jobs'],
            datasets: [{
                label: 'Job Statistics',
                data: [<?php echo $totalJobs; ?>, <?php echo $completedJobs; ?>, <?php echo $pendingJobs; ?>],
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)',
                ],
                borderWidth: 1
            }]
        };

        // Chart configuration
        var config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        // Create the chart
        var ctx = document.getElementById('jobChart').getContext('2d');
        var jobChart = new Chart(ctx, config);
    </script>
</body>
</html>

                                        </div>
                                      <div id='chart_div' style='width: 450px; height: 200px;'></div>
                                      <div class="col-md-3">
                                      <div class="card">
                                      <div class="card-header">
                                           No of Workers
                                      </div>
                                      <div class="card-body">
                                      <h1>50</h1>
                                     </div>
                      


                      

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