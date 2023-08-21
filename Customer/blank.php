<!DOCTYPE html>
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
                               <h5> Employees</h5>
                            </div>
                            <div class="card-body">
                           <!-- your content start  -->
                            Welcome to Hire Worker!
                            <!DOCTYPE html>
<html>
<head>
    <title>Customer Dashboard</title>
</head>
<body>

<?php
// Simulated user data (replace with actual user authentication and data retrieval)
$user = [
    'id' => 1,
    'username' => 'john_doe',
    'name' => 'John Doe',
    'email' => 'john@example.com',
    // Other user data...
];

// Simulated user orders (replace with actual data retrieval)
$orders = [
    ['id' => 101, 'date' => '2023-08-15', 'total' => 150.00],
    ['id' => 102, 'date' => '2023-08-16', 'total' => 200.00],
    // Other orders...
];
?>

<h1>Welcome, <?php echo $user['name']; ?>!</h1>
<p>Your username: <?php echo $user['username']; ?></p>
<p>Your email: <?php echo $user['email']; ?></p>

<h2>Your Orders:</h2>
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
    <?php include_once('../navscript.php');?>
</body>

</html>