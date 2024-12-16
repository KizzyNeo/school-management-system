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

$sql = "SELECT id, first_name, middle_name, last_name, email, phone, role FROM staffs";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Staffs</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 id="header">Staffs</h1>
    <div style="text-align: center;">
        <table style="width: 80%; margin-left: auto; margin-right: auto; margin-bottom: 20px;">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["first_name"]. "</td><td>" . $row["middle_name"]. "</td><td>" . $row["last_name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["role"]. "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No results found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    </div>
</body>
</html>
