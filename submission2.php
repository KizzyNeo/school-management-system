<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>

<body>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "results");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $session = $_REQUEST['session'];
        $term = $_REQUEST['term'];
        $academic_session =  $term . $session;
        $student_no = $_REQUEST['student_no'];
        $detail = $_REQUEST['detail'];
        $replace = $_REQUEST['replace_detail'];

                $sql = "UPDATE $academic_session SET $detail = '$replace' WHERE student_no = $student_no";
                $sql_check = "SELECT * FROM $academic_session WHERE student_no = ?"; 
                $stmt = mysqli_prepare($conn, $sql_check); 
                mysqli_stmt_bind_param($stmt, "s", $student_no); 
                mysqli_stmt_execute($stmt); 
                $result1 = mysqli_stmt_get_result($stmt); 
                 
                // Step 4: Check if the record exists
                if (mysqli_num_rows($result1) > 0) {
                if(mysqli_query($conn, $sql)){
                    echo "<h1 style='color: rgb(20, 8, 53); text-align: center; margin-top: 100px;'>" . "Saved Successfully!" . "</h1>";
                    echo '<h1 style="color: rgb(20, 8, 53); text-align: center;">' . 'Will you like to correct another result?' . '</h1>';
                    echo '<div style="margin-top: 100px; text-align: center;">';
                    echo '<div>';
                    echo '<button style="border: 2px solid transparent; padding-right: 20px; padding-left: 20px; font-size: large; font-weight: 600; background-color: rgb(20, 8, 53);"><a href="update_details.php" style="text-decoration: none; color: white;">Yes</a></button>';
                    echo '</div>';
                    echo '<div>';
                    echo '<button style="border: 2px solid transparent; padding-right: 20px; padding-left: 20px; font-size: large; font-weight: 600; background-color: rgb(20, 8, 53); margin-top: 50px;"><a href="process_results.html" style="text-decoration: none; color: white;">No</a></button>';
                    echo '</div>';
                    echo '</div>';
                } else{
                    echo '<h1 style="text-align: center; margin-top: 100px; margin-bottom: 100px;">' . "An error occured. Please try again." . '</h1>';
                }
            } else {
                echo '<h1 style="text-align: center; margin-top: 100px; margin-bottom: 100px;">' . "Student's result does not exist for the term/session." . '</h1>';
            }
        
        // Close connection
        mysqli_close($conn);
        ?>
        
</body>

</html>