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

        $email = $_REQUEST['adminLoginEmail'];
        $password= $_REQUEST['adminLoginPassword'];

        $sql = "SELECT email, password FROM administrator WHERE email = '$email'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        // Taking all 5 values from the form data(input)

        if ($email === $row['email'] && $password === $row['password']) {
            $_SESSION['email'] = '$email';
            header('Location: admin.php', true);
        } else {
            header('Location: not_found.html', true);
        }
        
        // Performing insert query execution
        // here our table name is college
        // $sql = "INSERT INTO administrator  VALUES ('$first_name', '$middle_name', '$last_name', '$email', '$phone', '$password')";
        
        // if(mysqli_query($conn, $sql)){
        //     header('Location: admin.html', true);
        // } else{
        //     echo "ERROR: Hush! Sorry $sql. " 
        //         . mysqli_error($conn);
        // }
        
        // Close connection
        mysqli_close($conn);
        ?>
</body>

</html>
