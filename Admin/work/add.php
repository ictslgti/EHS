<?php
    $Connection = mysqli_connect("localhost", "root", "", "hire_workers", 3307);

       if(isset($_POST['submit']))
            {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $status = $_POST['status'];

                $sql = "INSERT INTO work(id,name,status) VALUES ('$id', '$name', '$status')";

                    if (mysqli_query($Connection, $sql)) {
                    echo '<script> location.replace("index.php")</script>';
                    }else {
                    echo "Error: " . $sql . "<br>" . 
                    mysqli_error($Connection);
                    }
            }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-ms-9">
            <div class="card">
                <div class="card-header">
                   <h1> Work Application </h1>
                </div>
                <div class="card-body">

                <form action="add.php" method="post">
                    <div class="form-group">
                        <label>Work_id</label>
                        <input type="text" name="id" class="form-control" placeholder="Enter work_id">
                    </div>

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" name="status" class="form-control" placeholder="Enter Status">
                    </div>
                    </br>
                    <input type="submit" class="btn btn-primary" name="submit" value="Register"                                                                              ">
                </form>

                
                </div>

                </div>


            
            </div>
        
        
        </div>
    

    </div>





</body>
</html>