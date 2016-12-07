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
<body id="randomColor">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="../Homepage.php">WebSiteName</a>
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
                    <?php
						if(isset($_SESSION["email"])){
						?>
							<li><a href="Profile/Profile.php">Profile</a></li>
						<?php
						}
					?>   
                    <li><a href="../Shopping/Shopping.php">Shopping</a></li>
                    <li><a href="../About.php">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
   <div class="container-fluid ">
        <div class="row" id="topRow">
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3 ">
                <div class="thumbnail widget">
					<img src="Images/Images/angry.jpg" alt="Picture of red shirt" class="img" id="item"/> 
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3 ">
                <div class="thumbnail widget">
                    <img src="Images/Images/angry.jpg" alt="Picture of green shirt" class="img" />
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail widget">
                    <img src="Images/Images/angry4.jpg" alt="Picture of blue shirt" class="img" />   
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail widget">
                    <img src="Images/Images/angry.jpg" alt="Picture of yellow shirt" class="img" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail widget">
                    <img src="ShopImages/shirt1_red.jpg" alt="Picture of red shirt" class="img" />     
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail widget">
                    <img src="ShopImages/shirt1_green.jpg" alt="Picture of green shirt" class="img" /> 
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail widget">
                    <img src="ShopImages/shirt1_blue.jpg" alt="Picture of blue shirt" class="img" />    
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail widget">
                    <img src="ShopImages/shirt1_yellow.jpg" alt="Picture of yellow shirt" class="img" />
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail widget">
                    <img src="ShopImages/shirt1_red.jpg" alt="Picture of red shirt" class="img" />
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail widget">
                    <img src="ShopImages/shirt1_green.jpg" alt="Picture of green shirt" class="img" />
                 
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail widget">
                    <img src="ShopImages/shirt1_blue.jpg" alt="Picture of blue shirt" class="img" />
                  
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail widget">
                    <img src="ShopImages/shirt1_yellow.jpg" alt="Picture of yellow shirt" class="img" />
                   
                </div>
            </div>
        </div>
    </div>

    <p>
        <a href="http://validator.w3.org/check/referer">Validate Me</a>
    </p>
</body>
</html>