
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "results";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Result</title>
</head>
<body>
    <h1 style="color: rgb(20, 8, 53); text-align: center; margin-top: 50px;">Enter Student Details</h1>
    <form action="download_results.php" method="post" style="text-align: center; margin-top: 50px;">
        <label for="student-info">
        <input type="text" id="student-info" name="student-info" style="outline: none; padding: 5px;" placeholder="Student Number" required>    
        </label>
        <label for="term">
        <select type="text" id="term" name="term" style="outline: none; padding: 5px;" required>
            <option value="first_term_" selected>First Term</option>
            <option value="second_term_">Second Term</option>
            <option value="third_term_">Third Term</option>
        </select>
        </label>
        <label for="session">
        <input type="text" id="session" name="session" style="outline: none; padding: 5px;" maxlength="4" placeholder="Session (Eg. 2425)" required>
        </label>
        <button type="submit" style="border: 2px solid transparent; margin-top: 10px; color: white; padding: 10px; font-size: large; font-weight: 600; background-color: rgb(20, 8, 53);">Download Result</button>
    </form>
</body>
</html>