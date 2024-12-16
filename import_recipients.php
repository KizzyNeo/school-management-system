<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "results";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $sql = "SELECT * FROM parents";  
    $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            echo '<textarea>';
            while($row = $result->fetch_assoc()) {
                echo $row["phone"];
            }
            echo '<textarea>';
        } else {
            echo "No result found";
        }
        $conn->close();
        
?>