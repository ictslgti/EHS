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
                                <h3> <u>Employees</u> Customer Dashboard
                                </h3>
                                <p style="color:green;">   <img src="download.png"style="float: right;" alt="Italian Trulli"width="150" height="150">
                                    <marquee>
                                        <h3>
                                        <h3 style="color:pink;"> Welcome to Customer!</h3>
                                    </marquee>
                                
    
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
                                                <h1>1 to 100 </h1>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">



                                        <div class="card col-lg-4 mb-4">
                                            <h4 style="color:blue;">Budget Overview</h4>
                                            <div class="mb-2">
                                                <span class="display-4 text-black">$48k</span>
                                                <span class="text-black-50">per year</span>
                                            </div>
                                        </div>

                                        <!-- Content Column -->
                                        <div class="col-lg-4 mb-4">

                                            <!-- Project Card Example -->
                                            <div class="card shadow mb-4">
                                                <div class="card-header py-3">
                                                    <h4 class="m-0 font-weight-bold text-primary">Projects</h4>
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="small font-weight-bold">Server Migration <span
                                                            class="float-right">20%</span></h4>
                                                    <div class="progress mb-4">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <h4 class="small font-weight-bold">Sales Tracking <span
                                                            class="float-right">40%</span></h4>
                                                    <div class="progress mb-4">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <h4 class="small font-weight-bold">Customer Database <span
                                                            class="float-right">60%</span></h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card col-lg-4 mb-4">
                                            <div class="card-header">
                                                <h4 style="color:blue;">People</h4>
                                            </div>
                                            <div class="card-body">
                                                <!-- Item 1-->
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div class="d-flex align-items-center flex-shrink-0 me-3">
                                                        <div class="avatar avatar-xl me-3 bg-gray-200"><img
                                                                class="avatar-img img-fluid"
                                                                src="assets/img/illustrations/profiles/profile-1.png"
                                                                alt=""></div>
                                                        <div class="d-flex flex-column fw-bold">
                                                            <a class="text-dark line-height-normal mb-1" href="#!">Krishna</a>
                                                            <div class="small text-muted line-height-normal">Position
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown no-caret">
                                                        <button
                                                            class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                                            id="dropdownPeople1" type="button" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-more-vertical">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg></button>
                                                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                                                            aria-labelledby="dropdownPeople1">
                                                            <a class="dropdown-item" href="#!">Action</a>
                                                            <a class="dropdown-item" href="#!">Another action</a>
                                                            <a class="dropdown-item" href="#!">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Item 2-->
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div class="d-flex align-items-center flex-shrink-0 me-3">
                                                        <div class="avatar avatar-xl me-3 bg-gray-200"><img
                                                                class="avatar-img img-fluid"
                                                                src="assets/img/illustrations/profiles/profile-2.png"
                                                                alt=""></div>
                                                        <div class="d-flex flex-column fw-bold">
                                                            <a class="text-dark line-height-normal mb-1"
                                                                href="#!">Kumar</a>
                                                            <div class="small text-muted line-height-normal">Position
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown no-caret">
                                                        <button
                                                            class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                                            id="dropdownPeople2" type="button" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-more-vertical">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg></button>
                                                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                                                            aria-labelledby="dropdownPeople2">
                                                            <a class="dropdown-item" href="#!">Action</a>
                                                            <a class="dropdown-item" href="#!">Another action</a>
                                                            <a class="dropdown-item" href="#!">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Item 3-->
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div class="d-flex align-items-center flex-shrink-0 me-3">
                                                        <div class="avatar avatar-xl me-3 bg-gray-200"><img
                                                                class="avatar-img img-fluid"
                                                                src="assets/img/illustrations/profiles/profile-3.png"
                                                                alt=""></div>
                                                        <div class="d-flex flex-column fw-bold">
                                                            <a class="text-dark line-height-normal mb-1" href="#!">Krishnakumar</a>
                                                            <div class="small text-muted line-height-normal">Position
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown no-caret">
                                                        <button
                                                            class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                                            id="dropdownPeople3" type="button" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-more-vertical">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg></button>
                                                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                                                            aria-labelledby="dropdownPeople3">
                                                            <a class="dropdown-item" href="#!">Action</a>
                                                            <a class="dropdown-item" href="#!">Another action</a>
                                                            <a class="dropdown-item" href="#!">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">



                                <div class="card col-lg-4 mb-4">
                                    <h4 style="color:green;">Today </h4>
                                    <h4><u>Ticket Submitted</u></h4>
                                    <div class="mb-2">
                                        <center> <span class="display-4 text-black"
                                                style="background-color:powderblue;">16</span></center>

                                    </div>
                                </div>

                                <!-- Content Column -->
                                <div class="col-lg-4 mb-4">

                                    <!-- Project Card Example -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h4 style="color:green;">Ticket by Statuse</h4>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="small font-weight-bold">Solved <span class="float-right">7</span>
                                            </h4>
                                            <div class="progress mb-4">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <h4 class="small font-weight-bold">In Progress <span
                                                    class="float-right">8</span></h4>
                                            <div class="progress mb-4">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <h4 class="small font-weight-bold">Available <span
                                                    class="float-right">50</span></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="card col-lg-4 mb-4">
                                    <div class="card-header">
                                        <h4 style="color:green;">Top Ticket Solvers</h4>
                                    </div>
                                    <div class="card-body">
                                        <!-- Item 1-->
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <div class="d-flex align-items-center flex-shrink-0 me-3">
                                                <div class="avatar avatar-xl me-3 bg-gray-200"><img
                                                        class="avatar-img img-fluid"
                                                        src="assets/img/illustrations/profiles/profile-1.png" alt="">
                                                </div>
                                                <div class="d-flex flex-column fw-bold">
                                                    <a class="text-dark line-height-normal mb-1" href="#!">Employee
                                                        1</a>
                                                    <div class="small text-muted line-height-normal">Position</div>
                                                </div>
                                            </div>
                                            <div class="dropdown no-caret">
                                                <button class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                                    id="dropdownPeople1" type="button" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg></button>
                                                <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                                                    aria-labelledby="dropdownPeople1">
                                                    <a class="dropdown-item" href="#!">Action</a>
                                                    <a class="dropdown-item" href="#!">Another action</a>
                                                    <a class="dropdown-item" href="#!">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Item 2-->
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <div class="d-flex align-items-center flex-shrink-0 me-3">
                                                <div class="avatar avatar-xl me-3 bg-gray-200"><img
                                                        class="avatar-img img-fluid"
                                                        src="assets/img/illustrations/profiles/profile-2.png" alt="">
                                                </div>
                                                <div class="d-flex flex-column fw-bold">
                                                    <a class="text-dark line-height-normal mb-1" href="#!">Employee
                                                        2</a>
                                                    <div class="small text-muted line-height-normal">Position</div>
                                                </div>
                                            </div>
                                            <div class="dropdown no-caret">
                                                <button class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                                    id="dropdownPeople2" type="button" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg></button>
                                                <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                                                    aria-labelledby="dropdownPeople2">
                                                    <a class="dropdown-item" href="#!">Action</a>
                                                    <a class="dropdown-item" href="#!">Another action</a>
                                                    <a class="dropdown-item" href="#!">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Item 3-->
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <div class="d-flex align-items-center flex-shrink-0 me-3">
                                                <div class="avatar avatar-xl me-3 bg-gray-200"><img
                                                        class="avatar-img img-fluid"
                                                        src="assets/img/illustrations/profiles/profile-3.png" alt="">
                                                </div>
                                                <div class="d-flex flex-column fw-bold">
                                                    <a class="text-dark line-height-normal mb-1" href="#!">Employee
                                                        3</a>
                                                    <div class="small text-muted line-height-normal">Position</div>
                                                </div>
                                            </div>
                                            <div class="dropdown no-caret">
                                                <button class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                                    id="dropdownPeople3" type="button" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg></button>
                                                <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                                                    aria-labelledby="dropdownPeople3">
                                                    <a class="dropdown-item" href="#!">Action</a>
                                                    <a class="dropdown-item" href="#!">Another action</a>
                                                    <a class="dropdown-item" href="#!">Something else here</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><?php
$title = 'admin | Dashbort.php';
include_once('head.php');
?>

<body>
    <div class="container">
        <?php include_once('nav.php'); ?>
        <?php
      if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
    } else {
        // Handle the case when 'email' key is not set in the session.
    }
    
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