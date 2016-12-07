$(document).ready(function (e) {

    loadImg();



    $("#uploadimage").on('submit', (function (e) {

        $.ajax({
            url: "upload.php", // Url to which the request is send
            type: "POST",             // Type of request to be send, called as method
            data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData: false,        // To send DOMDocument or non processed data file it is set to false
            success: function (data)   // A function to be called if request succeeds
            {

                console.log(data);
            },
            error: function (xhr, status, error) {
                console.log(error);
            }
        });

        loadImg();

    }));

    function loadImg() {
        var file = $("#file").val();

        $.ajax({
            method: "POST",
            url: "ajaxDB.php",
            data:
              {

              },
            success: function (data) {
                $('#page').append(data);
                console.log(data);
            },
            error: function (xhr, status, error) {
                console.log(error);
            }
        }).done(function (data) {
            console.log(data);
        });
        console.log();
    }

    //https://www.formget.com/ajax-image-upload-php/ - reference
});