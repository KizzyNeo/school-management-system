<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div>
            <button id="signout-btn" style="background-color:  rgb(250, 7, 7); border: 2px solid transparent; font-weight: 600; padding: 10px; margin-left: 20px; margin-top: 20px; font-size: medium;"><a href="logout.php" style="color:white;">Log Out</a></button>
        </div>
        <div id="hello-container" style="margin-left: 50px;">
            <h3 style="color: rgb(20, 8, 53);">Hello, Admin!</h3>
            <h1 style="color: rgb(20, 8, 53);">What would you like to do today?</h1>
        </div>
        <div style="width: 100%; margin-top: 100px;">
            <div>
                <button id="reg_staff_btn" style="border: 2px solid transparent; margin-bottom: 30px; padding: 20px; font-size: large; margin-left: 350px; margin-right: 100px; font-weight: 600; background-color: rgb(20, 8, 53);"><a href="staffs_hub.html" style="color:white;">Staffs' Hub</a></button>
                <button id="staffs_btn" style="border: 2px solid transparent; margin-bottom: 30px; padding: 20px; margin-right: 100px; margin-left: 148px; font-size: large; font-weight: 600; background-color: rgb(20, 8, 53);"><a href="process_results.html" style="color:white;">Process Results</a></button>
            </div>
            <div>
                <button id="record_btn" style="border: 2px solid transparent; padding: 20px; margin-bottom: 30px; font-size: large; font-weight: 600; margin-left: 350px; margin-right: 200px; background-color: rgb(20, 8, 53);"><a href="message.php" style="color:white;">Message</a></button>
                <button id="signIn_btn" style="border: 2px solid transparent; padding: 20px; font-size: large; margin-bottom: 30px; font-weight: 600; margin-right: 100px; margin-left: 66px; background-color: rgb(20, 8, 53);"><a href="exams.html" style="color:white;">Exams</a></button>
            </div>
        </div>
        <script src="script.js"></script>
    </body>
</html>