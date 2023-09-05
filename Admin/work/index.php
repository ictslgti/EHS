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

                <button type="button" class="btn btn-success"> <a href="add.php" class="text-light">Add New </a></button>

                        </br>
                        </br>

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Work ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">option</option></th>
                        

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $Connection = mysqli_connect("localhost", "root", "", "hire_workers", 3307);

                            $sql = "select*from work";
                            $run = mysqli_query($Connection,$sql);
                            $id =1;

                            while($row = mysqli_fetch_array($run))
                            {
                                $id = $row['id'];
                                $name = $row['name'];
                                $status = $row['status'];

                                ?>
                            <tr>
                            <td><?php echo $id ?></td>
                            <td><?php echo $name ?></td>
                            <td><?php echo $status ?></td>
                            <td>
                                <button type="button" class="btn btn-success"> <a href='edt.php?edit=<?php echo $id ?>' class="text-ligh"> Edit</button>
                                <button type="button" class="btn btn-danger"> <a href='delete.php?del=<?php echo $id ?>' class="text-ligh"> Delete</button>
                        
                        
                        
                            </td>
                        </tr>
                                <?php
                            }
                        ?>
                        
                        
                    </tbody>
                    </table>
                </div>

                </div>


            
            </div>
        
        
        </div>
    

    </div>





</body>
</html>