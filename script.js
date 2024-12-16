// const firstName = document.forms["adminForm"]["adminFirstName"].value;
// const middleName = document.getElementById('adminMiddleName').value;
// const lastName = document.getElementById('lastName').value;
// const email = document.getElementById('adminEmail').value;
// const phone = document.getElementById('adminPhone').value;
// const password = document.getElementById('adminPassword').value;
// const confirmPassword = document.getElementById('adminConfirmPassword').value;
// const checkbox = document.getElementById('adminCheckbox').value;
// const submit = document.getElementById('adminSignupSubmit').value;
// const signupForm = document.getElementById('signup_form');

// signupForm.addEventListener('submit', function(event) {

//     alert(firstName);

    // if (firstName === "") {
    //     alert('First name field is empty.');
    //     return false;
    // } else if (middleName === "") {
    //     alert('Middle name field is empty.');
    //     return false;
    // } else if (lastName === "") {
    //     alert('Last name field is empty.');
    //     return false;
    // } else if (email === "") {
    //     alert('Email field is empty.');
    //     return false;
    // } else if (phone === "") {
    //     alert('Phone field is empty.');
    //     return false;
    // } else if (password === "") {
    //     alert('Password field is empty.');
    //     return false;
    // } else if (confirmPassword === "") {
    //     alert ('Confirm your password.');
    //     return false;
    // } else if (password !== confirmPassword) {
    //     alert("Password doesn't match with the confirmation");
    //     return false;
    // } else if (checkbox === "") {
    //     alert("Please confirm that you're okay");
    //     return false;
    // } else {
    //     signupForm.submit();
    // }
// })
const form = document.getElementById('adminForm');
// form.addEventListener('submit', function(event) {
//     event.preventDefault();

//     validateForm();
// });

function validateForm() {
    var firstName = document.forms["adminForm"]["adminFirstName"].value;
    var middleName = document.forms["adminForm"]["adminMiddleName"].value;
    var lastName = document.forms["adminForm"]["adminLastName"].value;
    var email = document.forms['adminForm']['adminEmail'].value;
    var phone = document.forms["adminForm"]["adminPhone"].value;
    var password = document.forms["adminForm"]["adminPassword"].value;
    var confirmPassword = document.forms["adminForm"]["adminConfirmPassword"].value;
    var checkbox = document.getElementById('adminCheckbox');

    if (firstName === "") {
        alert('Provide your first name.');
        return false;
    } else if (middleName === "") {
        alert('Provide your middle name.');
        return false;
    } else if (lastName === "") {
        alert('Provide your last name.');
        return false;
    } else if (email === "") {
        alert('Provide your email address.');
        return false;
    } else if (!isValidEmail(email)) {
        alert('Please enter a valid email.');
        return false;
    } else if (phone === "") {
        alert('Provide your phone number.');
        return false;
    } else if (password === "") {
        alert('Provide a password');
        return false;
    } else if (confirmPassword === "") {
        alert('Confirm your password.');
        return false;
    } else if (confirmPassword !== password) {
        alert("Passwords don't match.");
        return false;
    } else if (checkbox.checked === false) {
        alert("Check the box if you're through.");
        return false;
    } else {
        return true;
    }
}

function validateForm2() {
    var email = document.forms['adminLoginForm']['adminLoginEmail'].value;
    var password = document.forms['adminLoginForm']['adminLoginPassword'].value;

    if (email === "") {
        alert('Provide your email address.');
        return false;
    } else if (!isValidEmail(email)) {
        alert('Provide a valid email address.');
        return false;
    } else if (password === "") {
        alert('Provide your password.')
        return false;
    } else {
        return true;
    }
}

function validateStaff() {
    var firstName = document.forms["staffRegForm"]["firstName"].value;
    var middleName = document.forms["staffRegForm"]["middleName"].value;
    var lastName = document.forms["staffRegForm"]["lastName"].value;
    var email = document.forms['staffRegForm']['email'].value;
    var phone = document.forms["staffRegForm"]["phone"].value;
    var role = document.forms["staffRegForm"]["role"].value;
    var fingerprint = document.forms["staffRegForm"]["fingerprint"].value;
    var checkbox = document.getElementById('checkbox');

    if (firstName === "") {
        alert('Provide your first name.');
        return false;
    } else if (middleName === "") {
        alert('Provide your middle name.');
        return false;
    } else if (lastName === "") {
        alert('Provide your last name.');
        return false;
    } else if (email === "") {
        alert('Provide your email address.');
        return false;
    } else if (!isValidEmail(email)) {
        alert('Please enter a valid email.');
        return false;
    } else if (phone === "") {
        alert('Provide your phone number.');
        return false;
    } else if (role === "None") {
        alert('Choose your role in the school.');
        return false;
    } else if (fingerprint === "") {
        alert('Provide your fingerprint data.');
        return false;
    } else if (checkbox.checked === false) {
        alert("Check the box if you're through.");
        return false;
    } else {
        return true;
    }
}

function validateStaff2() {
    var id = document.forms['staffSignIn']['uniqueId'].value;
    var fingerprint = document.forms['staffSignIn']['biometric2'].value;

    if (id === "") {
        alert('Provide your unique ID.');
        return false;
    } else if (fingerprint === "") {
        alert('Provide your fingerprint data.');
        return false;
    } else {
        return true;
    }
}
function isValidEmail(email) {
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailPattern.test(email);
}

function isValidSession(calendar) {
    var sessionPattern = /^[0-9]$/;
    return sessionPattern.test(calendar);
}