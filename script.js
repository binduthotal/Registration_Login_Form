function validateForm() {
    var username_val = document.forms["registration_form"]["Username"].value;
    var password_val = document.forms["registration_form"]["Password"].value;
    var email_val = document.forms["registration_form"]["Email"].value;
    var email_regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (!email_regex.test(email_val.toLowerCase())) {
        alert("Email Field is incorrect. Please Enter a valid Email address !");
        return false;
    }
    if (username_val == "") {
        alert("Username Field cannot be empty !");
        return false;
    }
    if (password_val == "") {
        alert("Password Field cannot be empty !");
        return false;
    }
}

function validateLogin() {
    var username_val = document.forms["login_form"]["Username"].value;
    var password_val = document.forms["login_form"]["Password"].value;
    if (username_val == "") {
        alert("Username Field cannot be empty !");
        return false;
    }
    if (password_val == "") {
        alert("Password Field cannot be empty !");
        return false;
    }
}