<?php

$conn = new mysqli("localhost", "root", "", "schools");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$phone = $_REQUEST['remove'];

$sql_check = "SELECT * FROM parents WHERE phone = ?"; 
                $stmt = mysqli_prepare($conn, $sql_check); 
                mysqli_stmt_bind_param($stmt, "s", $phone); 
                mysqli_stmt_execute($stmt); 
                $result1 = mysqli_stmt_get_result($stmt); 
                 
                // Step 4: Check if the record exists
                if (mysqli_num_rows($result1) > 0) {
                    $sql = "DELETE FROM parents WHERE phone = $phone";

                    if (mysqli_query($conn, $sql)) {
                        echo '<h1>' . 'Contact removed successfully' . '</h1>';
                    } else {
                        echo '<h1>' . 'Something went wrong. PLease, try again.' . '</h1>';
                    }
                } else {
                    echo '<h1>' . "The contact you specified doesn't exist in the database." . '</h1>';
                }

$conn->close();
?>