<!DOCTYPE html>

<html lang="en">
<head>
    <title>Webdev Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Emotions.css">
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../PurpleOctopus.png">
</head>
<body id="relaxedColor">
    <?php
    main(); 

    function main(){
	
		include "../Php/header.php";
    }
    ?>
	
    <div class="row">
        <h1>Relaxed</h1>
        <div id="tableContainer">
            <div class="row">
                <button class="col-md-4 widget" id="item"><p class="content">picture</p></button>
                <button class="col-md-4 widget" id="item"><p class="content">meme</p></button>
                <button class="col-md-4 widget" id="item"><p class="content">video</p></button>
            </div>
            <div class="row" id="bottomRow">
                <button class="col-md-4 widget" id="item"><p class="content">picture</p></button>
                <button class="col-md-4 widget" id="item"><p class="content">video</p></button>
                <button class="col-md-4 widget" id="item"><p class="content">meme</p></button>
            </div>
        </div>
    </div>

    <p>
        <a href="http://validator.w3.org/check/referer">Validate Me</a>
    </p>
</body>
</html>