"use strict";
window.onload = startup;

function startUp()
{
    $("#user").on('change', function () {
        if($("#user").val().length < 5)
        {
            $("#user").addClass("errorBackground");
        }
        else
        {
            $("#user").removeClass("errorBackground");
            $("#user").addClass("goodBackground");
        }
    });

    //(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/)
    var password = $("#CreatePassword").val();
    var confirmPass = $("#CreatePassword").val();
}

