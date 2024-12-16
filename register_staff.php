<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
</head>

<body>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "schools");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $first_name =  $_REQUEST['first_name'];
        $middle_name = $_REQUEST['middle_name'];
        $last_name = $_REQUEST['last_name'];
        $email = $_REQUEST['email'];
        $phone =  $_REQUEST['phone'];
        $role = $_REQUEST['role'];
        $biometric_data = $_REQUEST['biometric'];
        
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO staffs (first_name, middle_name, last_name, email, phone, role, biometric) VALUES ('$first_name', '$middle_name', '$last_name', '$email', '$phone', '$role', '$biometric_data')";
        
        if(mysqli_query($conn, $sql)){
            header('Location: staffs.php', true);
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
</body>

</html>
