
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
	    $db = new PDO("mysql:dbname=salina99;host=localhost", "salina99", "Oshdatabase11");

	    session_start();// Starting Session

	    // Storing Session
	    $email=$_SESSION["email"];

	    // SQL Query To Fetch Complete Information Of User
	    $usernames = $db->query("SELECT Username FROM WebUser WHERE Email=$email");
	
	    $user = "";
	    foreach($usernames as $username){
		    $user = $username["Username"];
	    }

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

                <a class="navbar-brand" href="../Homepage.html">WebSiteName</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <!--<input type="text" class="form-control" placeholder="Search">-->
                        <input type="text" class="form-control" placeholder=<?= $user; ?>>
                    </div>
                    <button type="submit" class="btn btn-default glyphicon glyphicon-search"> </button>
                   <span><a  class="signIn" href="../RegisterLogin/SignIn.html">Sign in</a></span>
                </form>

                <ul class="nav navbar-nav">
                    <li><a href="Profile/Profile.html">Profile</a></li>
                    <li><a href="../Shopping/Shopping.html">Shopping</a></li>
                    <li><a href="../About.html">About</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="tableContainer">
        <div>
            <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
                <hr id="line">
                <div id="selectImage">
                    <label>Select Your Image</label><br />
                    <input type="file" name="file" id="file" required />
                    <input type="submit" value="Upload" class="submit" />
                </div>
            </form>
        </div>
       

   	 <div class="row">
   	  	     <button class="col-md-4 " id="item2"></button>
    		 <button class="col-md-4 widget" id="profilePicture">Profile Picture</button>
    		 <button class="col-md-4 " id="item2"></button>
    	</div>
        <div class="row">
            <button class="col-md-4 widget" id="item"><p class="content">Picture</p></button>
            <button class="col-md-4 widget" id="item"><p class="content">Picture</p></button>
            <button class="col-md-4 widget" id="item"><p class="content">Picture</p></button>
        </div>
        <div class="row" id="bottomRow">
            <button class="col-md-4 widget" id="item"><p class="content">Picture</p></button>
            <button class="col-md-4 widget" id="item"><p class="content">Picture</p></button>
            <button class="col-md-4 widget" id="item"><p class="content">Picture</p></button>
        </div>
    </div>

    <div>
        <a href="http://validator.w3.org/check/referer">Validate Me</a>
    </div>

</body>
</html>