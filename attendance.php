<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
</head>
<body>
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
$id = $_REQUEST['uniqueId'];
$biometric = $_REQUEST['biometric2'];

$sql = "SELECT id, first_name, middle_name, last_name, role, biometric FROM staffs WHERE $id = id";
$result = $conn->query($sql);

    $row = $result->fetch_assoc();
    if ($id === $row['id'] && $biometric === $row['biometric']) {
        $first_name = $row['first_name'];
        $middle_name = $row['middle_name'];
        $last_name = $row['last_name'];
        $role = $row['role'];

        $sql = "INSERT INTO record (first_name, middle_name, last_name, role) VALUES ('$first_name', '$middle_name', '$last_name', '$role')";
        if (mysqli_query($conn, $sql)) {
            header('Location: attendance_page.php', true);
        } else {
            echo "Error: $sql. " . mysqli_error($conn);
        }
        // echo $first_name . $middle_name . $last_name . $role . $status;
    } else {
        header('Location: not_found.html', true);
    }
            // $first_name2 = $row['first_name'];
            // $middle_name2 = $row['middle_name'];
            // $last_name2 = $row['last_name'];
            // $role2 = $row['role'];
            // $status2 = 'Present';

            // $sql = "INSERT INTO attendance2 (first_name, middle_name, last_name, role, status) VALUES ('$first_name2', '$middle_name2', '$last_name2', '$role2', '$status2')";

    $conn->close();

?>
</body>
</html>