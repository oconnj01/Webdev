<?php
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

                <a class="navbar-brand" href="../Homepage.php">WebSiteName</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default glyphicon glyphicon-search"> </button>
                    <?php
                        if(isset($_SESSION["email"])){
                    ?>
							<span><a class="signOut" href="../RegisterLogin/SignIn.php">Sign out</a></span>
                    <?php
                        }
                        else{
                    ?>
                            <span><a  class="signIn" href="../RegisterLogin/SignIn.php">Sign in</a></span>
                    <?php
                        }
                    ?>
                </form>

                <ul class="nav navbar-nav">
					<?php
						if(isset($_SESSION["email"])){
						?>
							<li><a href="../Profile/Profile.php">Profile</a></li>
						<?php
						}
					?>
                    
                    <li><a href="../Shopping/Shopping.php">Shopping</a></li>
                    <li><a href="../About.php">About</a></li>
                </ul>
            </div>
        </div>
    </nav>