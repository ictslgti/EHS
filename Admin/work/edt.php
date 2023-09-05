<?php
    
    $Connection = mysqli_connect("localhost", "root", "", "hire_workers", 3307);
    $edit = $_GET['edit'];

    $sql = "select * from work where id = '$edit'";

    $run = mysqli_query($Connection,$sql);

    while($row=mysqli_fetch_array($run))
    {
        $id = $row['id'];
        $name = $row['name'];
        $status = $row['status'];
    }
?>

<?php
    $Connection = mysqli_connect("localhost", "root", "", "hire_workers", 3307);
       if(isset($_POST['submit']))
            {
                $edit = $_GET['edit'];
                $id = $_POST['id'];
                $name = $_POST['name'];
                $status = $_POST['status'];

                $sql = "update work set name='$name', status='$status' where id='$edit'";

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
                   <h1> Edit Work </h1>
                </div>
                <div class="card-body">

                <form action="" method="post">
                    <div class="form-group">
                        <label>Work_id</label>
                        <input type="text" name="id" class="form-control" placeholder="Enter work_id" value="<?php echo $id; ?>">
                    </div>

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php echo $name;?>">
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" name="status" class="form-control" placeholder="Enter Status" value="<?php echo $status ?>">
                    </div>
                    </br>
                    <input type="submit" class="btn btn-primary" name="submit" value="edit" >                                                                             
                </form>

                
                </div>

                </div>


            
            </div>
        
        
        </div>
    

    </div>





</body>
</html>