<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schools";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT first_name, middle_name, last_name, role, time FROM record";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Attendance Record</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body onload="window.scrollTo(0,document.body.scrollHeight);">
    <h1 id="header">Attendance Record</h1>
    <div style="text-align: center; display: flex; flex-direction: column-reverse;">
        <table style="width: 80%; margin-left: auto; margin-right: auto; margin-top: 10px;">
        <tr>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Role</th>
            <th>Time</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["first_name"]. "</td><td>" . $row["middle_name"]. "</td><td>" . $row["last_name"]. "</td><td>" . $row["role"]. "</td><td>" . $row["time"]. "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No results found</td></tr>";
        }
        
        $conn->close();
        ?>
        <a href="#header"><img src="arrow icon2.png" alt="arrow icon" id="nav_bottom" width="30px" height="30px" style="margin-top: 10px;"></img></a>
    </table>
    </div>
</body>
</html>