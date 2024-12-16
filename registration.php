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
        $password= $_REQUEST['password'];
        
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO administrator (first_name, middle_name, last_name, email, phone, password)  VALUES ('$first_name', '$middle_name', '$last_name', '$email', '$phone', '$password')";
        
        if(mysqli_query($conn, $sql)){
            header('Location: admin.php', true);
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
</body>

</html>
