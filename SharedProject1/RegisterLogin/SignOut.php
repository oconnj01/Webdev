<!DOCTYPE html>

<html lang="en">
<head>
    <title>Webdev Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../JavaScript/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="ImageUpload.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="Profile.css">
    <link rel="stylesheet" type="text/css" href="../Homepage.css">
</head>
<body>
    <?php
    main();

    function main(){
	<!-- might not need if have a session with username -->
    include("../RegisterLogin/login_session.php"); 
    ?>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default glyphicon glyphicon-search"> </button>
                     
                    <span><a class="signIn" href="../RegisterLogin/SignIn.html">Sign in</a></span>
                    
                </form>

                <ul class="nav navbar-nav">
                    
                    <li><a href="../Shopping/Shopping.html">Shopping</a></li>
                    <li><a href="../About.html">About</a></li>
                </ul>
            </div>			
        </div>
    </nav>
	<p>You have successfully signed out</p>
    <p>See you next time, <?=$user?>!</p>

    <?php	
		session_unset();
	}
	?>  
	 
    </div>

    <div>
        <a href="http://validator.w3.org/check/referer">Validate Me</a>
    </div>

</body>
</html>