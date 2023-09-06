<html lang="en">
<?php 
$con = mysqli_connect('localhost', 'root', '','hire_work');

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

session_start();
$user_count=null;
?>
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
                                <center>
                                    
                                        <marquee>
                                            <h3>
                                                
                                            <p style="color:maroon;"> Welcome to Hire Worker!</h3>
                                        </marquee>

                                        <img src="workers.png" style="float: right;" alt="Italian Trulli">
                                </center>
                            </div>
                            <div class="row">
                                <!-- Placeholder for the first chart -->
                                <canvas class="col-md-6" id="chart1" style="height: 200px;">Hii</canvas>

                                <!-- Placeholder for the second chart -->
                                <canvas class="col-md-6" id="chart2" style="height: 200px;">Hii</canvas>
                            </div>
                            <div class="row">
                                <!-- Placeholder for the first chart -->
                                <canvas class="col-md-6" id="chart3">Hii</canvas>

                                <!-- Placeholder for the second chart -->
                                <canvas class="col-md-6" id="chart4">Hii</canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Sample data for chart 1
        const ctx1 = document.getElementById("chart1");
        console.log(ctx1.tagName);
        var chart1 = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May'],
                datasets: [{
                    label: 'Sales',
                    data: [12, 19, 3, 5, 2],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
    height: 100
  }
        });
        // Sample data for chart 1
        const ctx2 = document.getElementById("chart2");
        console.log(ctx1.tagName);
        var chart1 = new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: ['January', 'February', 'March'],
                datasets: [{
                    label: 'Sales',
                    data: [12, 19, 3],
                    backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(255, 159, 64, 0.2)', 'rgba(255, 206, 86, 0.2)'],
                    borderColor: ['rgba(255, 99, 132, 1)', 'rgba(255, 159, 64, 1)', 'rgba(255, 206, 86, 1)'],
                    borderWidth: 1
                }]
            },
            options: {
    height: 100
  }
        });

        const ctx3 = document.getElementById("chart3");
        var chart3 = new Chart(ctx3, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May'],
                datasets: [{
                    label: 'Sales',
                    data: [12, 19, 3, 5, 2],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            }
        });

        const ctx4 = document.getElementById("chart4");
        var chart4 = new Chart(ctx4, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May'],
                datasets: [{
                    label: 'Sales',
                    data: [12, 19, 3, 5, 2],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            }
        });
    </script>
<?php
$title = 'Worker | blank.php';
include_once('head.php');
?>

<body>
    <div class="container">
        <?php include_once('nav.php'); ?>
        <?php
        $email = $_SESSION['email'];
        $sql_user = "SELECT count(id) as countid from worker";
        $result_user = mysqli_query($con, $sql_user);
        $user = mysqli_fetch_assoc($result_user);
        $user_count = $user['countid'];


        if (isset($_POST['post']) && !empty($_POST['body'])) {
            $body = $_POST['body'];
            $sql_post = "INSERT INTO `posts` (`body`, `user_id`) VALUES ('$body', '$user_id')";
            if (mysqli_query($con, $sql_post)) {
                echo '<div class="alert alert-success" role="alert">
                        Successfully Posted!
                    </div>';
            }
        }

        if (isset($_GET['delete'])) {
            //TO DO
            $post_id = $_GET['delete'];

            $sql_post = "SELECT `user_id` FROM `posts` WHERE `id` = $post_id";
            $result_post = mysqli_query($con, $sql_post);
            $row = mysqli_fetch_assoc($result_post);
            if (mysqli_num_rows($result_post) == 1 && $row['user_id'] == $user_id) {
                $sql_delete = "DELETE FROM `posts` WHERE `posts`.`id` = $post_id";
                if (mysqli_query($con, $sql_delete)) {
                    echo '<div class="alert alert-success" role="alert">
                        Successfully Deleted!
                    </div>';
                }
            }
        }
        $post_body = null;
        $post_id = null;
        if (isset($_GET['edit'])) {
            $post_id = $_GET['edit'];
            $sql_post = "SELECT * FROM `posts` WHERE `id` = $post_id";
            $result_post = mysqli_query($con, $sql_post);
            $row_post = mysqli_fetch_assoc($result_post);
            // var_dump(mysqli_num_rows($result_post));
            if (mysqli_num_rows($result_post) == 1 ) {
                $post_body = $row_post['body'];
            }
        }
        if (isset($_POST['update']) && !empty($_POST['body'])) {
            $body = $_POST['body'];
            $sql_post = "UPDATE `posts` SET `body` = '$body' WHERE `posts`.`id` = $post_id";
            if (mysqli_query($con, $sql_post)) {
                echo '<div class="alert alert-success" role="alert">
                                Successfully Updated!
                            </div>';
            }
        }


        ?>


</body>

</html>