<!DOCTYPE html>

<html lang="en">
<head>
    <title>Webdev Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Homepage.css">
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="PurpleOctopus.png">
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="Homepage.php">WebSiteName</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default glyphicon glyphicon-search"> </button>
                    <span><a class="signIn" href="RegisterLogin/SignIn.html">Sign in</a></span>
                </form>

                <ul class="nav navbar-nav">
                    <li><a href="http://webdev.cs.uwosh.edu/students/salina99/Project/SharedProject1/Profile/Profile.php">Profile</a></li>
                    <li><a href="Shopping/Shopping.html">Shopping</a></li>
                    <li><a href="About.html">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <h1>Homepage</h1>
        <div id="tableContainer">
            <div class="row">
                <a href="EmotionPagesHtml/Happy.php"><button class="col-md-4 widget" id="yellow">Happy</button></a>
                <a href="EmotionPagesHtml/Sad.php"><button class="col-md-4 widget" id="blue">Sad</button></a>
                <a href="EmotionPagesHtml/Angry.php"><button class="col-md-4 widget" id="red">Angry</button></a>
            </div>
            <div class="row" id="bottomRow">
                <a href="EmotionPagesHtml/Relaxed.php"><button class="col-md-4 widget" id="green">Relaxed</button></a>
                <a href="EmotionPagesHtml/Scared.php"><button class="col-md-4 widget" id="orange">Scared</button></a>
                <a href="EmotionPagesHtml/Random.php"><button class="col-md-4 widget" id="purple">Random</button></a>
            </div>
            
        </div>
    </div>

    <p>
        <a href="http://validator.w3.org/check/referer">Validate Me</a>
    </p>
</body>
</html>