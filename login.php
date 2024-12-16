<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div style="margin-top: 20px; margin-left: 20px; margin-bottom: 20px; width: 50%;">
            <form id="adminLoginForm" action="admin_login.php" method="post">
                <div class="form-group">
                    <label for="name">Email:</label>
                    <input type="email" class="form-control" id="adminLoginEmail" 
                    name="adminLoginEmail" placeholder="Email">
                </div>
                <div class="form-group" id="login-password">
                    <label for="name">Password:</label>
                    <input type="password" class="form-control" id="adminLoginPassword"
                    name="adminLoginPassword" placeholder="Password">
                </div>
                <div>
                <button type="submit" id="adminLoginBtn" style="margin-top: 20px; background-color: rgb(20, 8, 53); color:white; border: 2px solid transparent;" onclick="return validateForm2()">Log In</button>
                </div>
            </form>
        </div>
        <script src="script.js"></script>
    </body>
</html>