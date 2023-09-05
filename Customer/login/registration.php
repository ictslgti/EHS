<?php session_start(); 
 $title = 'Customer Register';
 include_once('Script.php');
 include_once('Css Customer.php');
 include_once('Config.php');
 include_once('Ctable.php');

if(isset($_POST['register'])){
    echo $C_Name = $_POST['C_Name'];
    echo $Phone = $_POST['Phone'];
    echo $Street = $_POST['Street'];
    echo $City = $_POST['City'];
    echo $Email = $_POST['Email'];
    
try{
    $sql = "INSERT INTO Customer(C_Name,Phone,Street,City,Email) value ('$C_Name','$Phone','$Street','$City','$Email')";
    mysqli_query($conn, $sql);
    //echo "Insert Successfully.";
} catch(Exception $e) {
    $message = $e->getMessage();
    echo $message . "<br>";
}
}

// define error variables for form validation

$C_NameErr = $PhoneErr = $StreetErr = $CityErr = $EmailErr ="";
$C_Name = $Phone = $Street = $City = $Email = "";

// compare the method

if($_SERVER["REQUEST_METHOD"] == "POST") {
    //empty error
    
    if(empty($_POST['name'])){
        $nameErr = "Name is required";
    }
    else{
        $name = input_data($_POST['name']);
        if(!preg_match("/^[a-zA-Z]*$/",$name)){
            $nameErr = "Only alphabets and white space are allowed";
        }
    }

     // Number Validation
     if(empty($_POST['Phone'])){
        $PhoneErr = "Phone number is required";
    }
    else{
        $PhoneErr = input_data($_POST['Phone']);
        // check if phone no is well-format

        if(!preg_match('/^[0-9]*$/', $Phone)){
            $PhoneErr = "Only numeric value is allowed";
        }
        else if(strlen($Phone) !=10){
            $PhoneErr = "Phone no must contain 10 digit";
        }
    }


    // Email Validation

    if(empty($_POST['Email'])){
        $EmailErr = "Email is required";
    }
    else{
        $Email = input_data($_POST['Email']);

        if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
            $EmailErr = "Invalid email format";
        }
    }

   
}

function input_data($data){
    // remove spaces slashes special symbols

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Register</title>
    </head>
    <body>
        <div class="container"> 
            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-1"></div>
                    <br><br>
                        <h3>REGISTER ON EMPLOYEE HIRING</h3><br>
                        <h5>To manage your services & <br> account details.</h5> 
                        <br><br>
                      <!--  <img src=customer.png alt=customer class="percentage-image"> !-->
                    
                </div>  

                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                        
                    <form action="#" method="POST">
                        <div class="form-group">
                        <br><br>
                            <label for="name"><h6>Customer Name</h6></label>
                            <input type="text" class="form-control" id="name" name="C_Name" placeholder="Customer Name" required>
                        
                        </div>

                        <div class="form-group">
                            <label for="pno"><h6>Phone Number</h6></label>
                            <input type="text" class="form-control" id="Phone" name="Phone" placeholder="Contact Number (Ex: 077xxxxxxx)" required>
                            
                        </div>

                        <div class="form-group">
                            <label for="address"><h6>Street</h6></label>
                            <input type="text" class="form-control" id="Street" name="Street" placeholder="Street" required>
                           
                        </div>

                        <div class="form-group">
                            <label for="city"><h6>City</h6></label>
                            <select id="City" name="City" class="form-control" required>
                                <option selected>Choose...</option>
                                <option>Jaffna</option>
                                <option>Kilinochchi</option>
                                <option>Vavuniya</option>
                                <option>Mannar</option>
                                <option>Trincomalee</option>
                                <option>Puttalam</option>
                                <option>Colombo</option>
                                <option>Maththalai</option>
                                <option>Padhullai</option>
                                <option>Hatton</option>
                                <option>Hambaha</option>
                                <option>Kaluthurai</option>
                                <option>Ratnapuri</option>
                            </select>
                            
                        </div>

                        <div class="form-group">
                            <label for="email"><h6>Email</h6></label>
                            <input type="text" class="form-control" id="Email" name="Email" onBlur="userAvailability()" placeholder="Email" required>
                            
                        </div>
                        
                        <button type="submit" name="register" class="btn btn-success" style="width:100%">REGISTER</button>
                    </form>
                    <br>
                    <center>
                        <p>By signing up for an account you agree to our <br><u>Terms and Condition</u> and <u>Policy Praivacy</u></p>
                    </center>
            
                    <center>
                    <div class="new-account">
                        <p class="text-dark">Already have an account? <u class="text-success">
                            <a href="customer login.php">
                                Log in
                            </a>
                        </p>
                    </center>
                    <br>
                </div>
            </div>
        </div>
    </body>
</html>