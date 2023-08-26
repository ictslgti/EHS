<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin Dashboard</title>

    <?php include_once('../script.php');?>
</head>

<body>

    <?php include_once('nav.php');?>

    <?php include_once('head.php');?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 p-r-0 title-margin-right">
                        <div class="card">
                            <div class="card-header">
                                <h3> Employees</h3>
                                 <p style="color:green;"><marquee><h3> <h3>Welcome to Customer!</h3></marquee>
                                <center> <img src ="download.png" alt="Italian Trulli">
</center>
                            </div>
                            <div class="card-body">
                                <!-- your content start  -->
                                Welcome to Hire Worker!
                                <html>

                                <head>
                                    <title>Customer Dashboard</title>
                                    
                                </head>

                                <body>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">
                                            No of Customer
                                        </div>
                                        <div class="card-body">
                                            <h1>1 to 500 </h1>
                                        </div>
                                    </div>
                                </div>
                                    <?php
// Simulated user data (replace with actual user authentication and data retrieval)
$user = [
    'id' => 1,
    'username' => 'krishna_doe',
    'name' => 'krishna Doe',
    'email' => 'krishna@example.com',
    // Other user data...
];

// Simulated user orders (replace with actual data retrieval)
$orders = [
    ['id' => 101, 'date' => '2023-08-15', 'total' => 150.00],
    ['id' => 102, 'date' => '2023-08-16', 'total' => 200.00],
    // Other orders...
];
?>
                                    <div class="row">
                                        <div class="column">
                                            <h2>Welcome, <?php echo $user['name'];    ?>!</h2>
                                            <p>Your username: <?php echo $user['username']; ?></p>
                                            <p>Your email: <?php echo $user['email']; ?></p>
                                        </div>
                                        <div class="column">
                                            <center>
                                                <h2>Your Orders:</h2>
                                            </center>
                                            <table>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Order Date</th>
                                                    <th>Total Amount</th>
                                                </tr>
                                                <?php foreach ($orders as $order) { ?>
                                                <tr>
                                                    <td><?php echo $order['id']; ?></td>
                                                    <td><?php echo $order['date']; ?></td>
                                                    <td>$<?php echo number_format($order['total'], 2); ?></td>
                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!DOCTYPE html>
                                    <html>

                                    <head>

                                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                    </head>

                                    <body>
                                        <div style="width: 70%; margin-top:0;">
                                            <canvas id="headcountChart"></canvas>
                                        </div>

                                        <script>
                                        // AJAX request to fetch data from the server
                                        const xhr = new XMLHttpRequest();
                                        xhr.open("GET", "get_employee_data.php", true);
                                        xhr.onreadystatechange = function() {
                                            if (xhr.readyState === 4 && xhr.status === 200) {
                                                const data = JSON.parse(xhr.responseText);
                                                renderChart(data);
                                            }
                                        };
                                        xhr.send();

                                        // Function to render the chart
                                        function renderChart(data) {
                                            const ctx = document.getElementById("headcountChart").getContext("2d");
                                            const departments = data.map(entry => entry.department);
                                            const headcounts = data.map(entry => entry.headcount);

                                            const chart = new Chart(ctx, {
                                                type: "bar",
                                                data: {
                                                    labels: departments,
                                                    datasets: [{
                                                        label: "Headcount by Department",
                                                        data: headcounts,
                                                        backgroundColor: "rgba(75, 192, 192, 0.5)",
                                                        borderColor: "rgba(75, 192, 192, 1)",
                                                        borderWidth: 1
                                                    }]
                                                },
                                                options: {
                                                    scales: {
                                                        y: {
                                                            beginAtZero: true
                                                        }
                                                    }
                                                }
                                            });
                                        }
                                        </script>
                                        <script>
                                        window.onload = function() {

                                            var chart = new CanvasJS.Chart("hacrtContainer", {
                                                title: {
                                                    text: "Employment in US Breweries"
                                                },
                                                subtitles: [{
                                                    text: "2023 to 2030"
                                                }],
                                                axisY: {
                                                    title: "Number of People Employed"
                                                },
                                                data: [{
                                                    type: "stepLine",
                                                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                                                }]
                                            });
                                            chart.render();

                                        }
                                        </script>

                                        <div id="chartContainer" style="width: 500px; height: 400px;"></div>
                                        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

                                    </body>

                                    </html>

                                </body>

                                </html>
                               
                                <?php include_once('../navscript.php');?>
</body>

</html>
<?php
 
$dataPoints = array(
	array("y"=> 26274, "label"=> "20023"),
	array("y"=> 26380, "label"=> "2024"),
	array("y"=> 25058, "label"=> "2026"),
	array("y"=> 24864, "label"=> "2027"),
	array("y"=> 26707, "label"=> "2028"),
	array("y"=> 29309, "label"=> "2029"),
	array("y"=> 34519, "label"=> "2030"),
	
);
 
?>
<html>

<head>
    <script>
    window.onload = function() {
        var chart = new CanvasJS.Chart("chartContainer", {
            title: {
                text: "Employment in SL"
            },
            subtitles: [{
                text: "2023 to 2030"
            }],
            axisY: {
                title: "Number of People Employed"
            },
            data: [{
                type: "stepLine",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();

    }
    </script>
</head>

<body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>

</html>