<?php

header("Authorization: Bearer VsAGhI81QEcZTdsLoWzrQpWssrCpbwkdT8GP8GnFRZxqrupDZ2wEM2C2L6yR");
header("Accept: application/json");

$conn = new mysqli("localhost", "root", "", "schools");

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

$add = $_REQUEST['add'];

$sql_check = "SELECT * FROM parents WHERE phone = ?"; 
                $stmt = mysqli_prepare($conn, $sql_check); 
                mysqli_stmt_bind_param($stmt, "s", $phone); 
                mysqli_stmt_execute($stmt); 
                $result1 = mysqli_stmt_get_result($stmt); 
                 
                // Step 4: Check if the record exists
                if (mysqli_num_rows($result1) > 0) {
                    echo '<h1>' . "Contact already exists in the database." . '</h1>';
                } else {
                    $sql = "INSERT INTO parents (phone) VALUE ('$add')";

                    if (mysqli_query($conn, $sql)) {
                        echo '<h1>' . 'Contact added Successfully' . '</h1>';
                    } else {
                        echo '<h1>' . 'An error occurred. Please try again.' . '</h1>';
                    }
                }

$conn->close();
?>