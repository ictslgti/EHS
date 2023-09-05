<?php
    
    $Connection = mysqli_connect("localhost", "root", "", "hire_workers", 3307);
    $delete = $_GET['del'];
    $sql = "DELETE FROM work WHERE id='$delete'";
    if (mysqli_query($Connection, $sql)) {
        echo '<script> location.replace("index.php")</script>';
        }else {
        echo "Error: " . $sql . "<br>" . 
        mysqli_error($Connection);
        }

?>
