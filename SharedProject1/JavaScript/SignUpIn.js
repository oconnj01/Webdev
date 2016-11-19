"use strict";
window.onload = startUp;

function startUp() {

    var validUser = false;
    var validEmail = false;
    var validPass = false;

    document.getElementById("user").addEventListener("keyup", UsernameChanged);

    document.getElementById("createPassword").addEventListener("keyup", CreatePasswordChanged);
    document.getElementById("confirmPassword").addEventListener("keyup", ConfrimPasswordChanged);

    $("#confirmPassword").prop("disabled", true);

}

function CreatePasswordChanged() {
    var password = document.getElementById("createPassword");
    var regexExpress = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");

    if (password.value.length === 0) {
        whiteClass(confirmPass);
    }
    else if (password.value.search(regexExpress) === -1) {
        redClass(password);
    }
    else {
        greenClass(password);
        $("#confirmPassword").prop("disabled", false);
    }
}

function ConfrimPasswordChanged()
{
    var confirmPass = document.getElementById("confirmPassword");
    var password = document.getElementById("createPassword");

    if (confirmPass.value !== password.value) {
        redClass(confirmPass);
    }
    else {
        greenClass(confirmPass);
    }
}

function UsernameChanged()
{
    var user = document.getElementById("user");
    if (user.value.length === 0)
    {
       whiteClass(user);    
    }
    else if (user.value.length < 5) {
        redClass(user);
    }
    else {
        greenClass(user);
    }
}

function redClass(el){
    $(el).removeClass("whiteBackground");
    $(el).removeClass("greenBackground");
    $(el).addClass("redBackground");
}

function whiteClass(el) {
    $(el).removeClass("redBackground");
    $(el).removeClass("greenBackground");
    $(el).addClass("whiteBackground");
}

function greenClass(el) {
    $(el).removeClass("redBackground");
    $(el).removeClass("whiteBackground");
    $(el).addClass("greenBackground");
}

