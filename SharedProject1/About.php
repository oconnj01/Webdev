<!DOCTYPE html>

<html lang="en">
<head>
    <title>Webdev Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css"> 
   
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="About.css">
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
                    <?php
                    main();

                    function main(){
						session_start();
                        if(isset($_SESSION["email"])){
                        ?>
                        <span><a class="signOut" href="../RegisterLogin/SignIn.php">Sign out</a></span>
                        <?php
                        }
                        else{
                        ?>
                        <span><a class="signIn" href="../RegisterLogin/SignIn.php">Sign in</a></span>
                        <?php
                        }
                    }
                    ?>
                </form>

                <ul class="nav navbar-nav">
                    <li><a href="http://webdev.cs.uwosh.edu/students/salina99/Project/SharedProject1/Profile/Profile.php">Profile</a></li>
                    <li><a href="Shopping/Shopping.php">Shopping</a></li>
                    <li><a href="About.php">About</a></li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container">
		<h2>Terms/Polocies</h2>
		<p> By using our website you agree to the following terms and conditions.</p>
        <ul>
            <li> You will not upload viruses or other malicious code.</li>
            
            <li>You will not access an account belonging to someone else.</li>
            
        </ul>
	
        <h1>About</h1>
            <p>    Our website lets you look at funny pictures, memes and gifs</p>
        <h2>Similar websites</h2>
        <ul>
            <li> <a class="links" href="http://imgur.com/">Imgur</a></li>
            
            <li><a class="links" href="https://www.instagram.com/?hl=en">Instagram</a></li>
            
            <li><a class="links" href="https://www.tumblr.com/">Tumblr</a></li>
        </ul>
    </div>

    <p>
        <a href="http://validator.w3.org/check/referer">Validate Me</a>
    </p>

</body>
</html>