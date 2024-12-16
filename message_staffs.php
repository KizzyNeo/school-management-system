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

    $sql = "SELECT * FROM staffs";  
    $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Message</title>
</head>
<body>
    <div>
        <h1 style="color: rgb(20, 8, 53)">Message to Staffs</h1>
    <form action="send_sms.php" method="post">
        <div style="margin-top: 10px;">
            <label for="message">Message:</label>
            <textarea name="message" id="Message" type="text" style="display: block; margin-top: 10px; outline: none; padding: 5px; resize: none; height: 300px; width: 300px;" required></textarea>
        </div>
        <div style="margin-top: 10px;">
            <label for="sender">Sender's Name:</label>
            <input name="sender" id="Sender" type="text" style="display: block; margin-top: 10px; outline: none; padding: 5px;" required>
        </div>
        <div style="margin-top: 10px;">
            <label for="recipients">Recipients:</label>
            <textarea name="recipients" id="Recipients" type="text" style="display: block; height: 300px; width: 300px; resize: none; margin-top: 10px; outline: none;" required>
            <?php
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo $row["phone"] . ",";
            }
        } else {
            echo "No result found";
        }

        $conn->close();
        ?>
        </textarea>
        </div>
        <div>
            <button type="submit" style="border: 2px solid transparent; margin-top: 10px; color: white; padding: 10px; font-size: large; font-weight: 600; background-color: rgb(20, 8, 53);">Send</button>
        </div>
    </form>
</body>
</html>