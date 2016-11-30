﻿
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

        include("../RegisterLogin/login_session.php");
        $_SESSION["username"] = $user; 
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
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default glyphicon glyphicon-search"> </button>
                    <?php
                        if(isset($_SESSION['login_user'])){
                    ?>
                            <span><a  class="signIn" href="../RegisterLogin/SignIn.html">Sign in</a></span>
                    <?php
                        }
                        else{
                    ?>
                            <span><a class="signOut" href="../RegisterLogin/SignOut.php">Sign out</a></span>
                    <?php
                        }
                    ?>
                </form>

                <ul class="nav navbar-nav">
                    <li><a href="http://webdev.cs.uwosh.edu/students/salina99/Project/SharedProject1/Profile/Profile.php">Profile</a></li>
                    <li><a href="../Shopping/Shopping.html">Shopping</a></li>
                    <li><a href="../About.html">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    }
    ?>

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