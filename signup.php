<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div style="margin-left: 20px; margin-top: 20px; width: 50%">
            <form id="adminForm" action="registration.php" method="post">
                <div class="form-group">
                    <label for="firstName">First name:</label>
                    <input type="text" class="form-control" id="adminFirstName" 
                    name="first_name" placeholder="First name">
                </div>
                <div class="form-group">
                    <label for="middleName">Middle name:</label>
                    <input type="text" class="form-control" id="adminMiddleName" 
                    name="middle_name" placeholder="Middle name">
                </div>
                <div class="form-group">
                    <label for="lastName">Last name:</label>
                    <input type="text" class="form-control" id="adminLastName" 
                    name="last_name" placeholder="Last name">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="adminEmail" 
                    name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="phone" class="form-control" id="adminPhone" maxlength="15" 
                    name="phone" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="adminPassword" aria-describedby="passwordHelp" 
                    name="password" placeholder="Password">
                    <small id="passwordHelp" class="form-text text-muted">Enter a password that's a combination of alphabets, numbers and symbols.</small>
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password:</label>
                    <input type="password" class="form-control" id="adminConfirmPassword" aria-describedby="confirmPasswordHelp" 
                    name="confirm_password" placeholder="Confirm password">
                </div>
                <div class="form-check" style="margin-top: 10px;">
                    <input type="checkbox" class="form-check-input" id="adminCheckbox">
                    <label class="form-check-label" for="checkbox">Check to confirm you're through.</label>
                  </div>
                  <button type="submit" style="margin-top: 20px; background-color: rgb(20, 8, 53); color:white; border: 2px solid transparent;" id="adminSignupSubmit" onclick="return validateForm()">Submit</button>
            </form>
        </div>
        <script src="script.js"></script>
    </body>
</html>