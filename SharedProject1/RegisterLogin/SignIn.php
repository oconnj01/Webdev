<!DOCTYPE html>

<html lang="en">
<head>
    <title>Webdev Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JavaScript/SignUpIn.js" type="text/javascript"></script>
    <script src="../JavaScript/jquery-3.1.1.min.js"></script>
    <script src="../JavaScript/SignUpIn.js" type="text/javascript"></script>
    <link rel="stylesheet" href="SignIn.css">
</head>
<body>    
    <form id="signInForm" action="verifySignIn.php" method="post" enctype="multipart/form-data">
        <h1>Welcome back!</h1>
        <div id="signInDiv">
            <a href="../Homepage.html" class="btn btn-default" id="homepageButton">Back to Homepage</a> <br />
            <div class="form-group">
                <label for="userEmail">Email address</label>
                <input type="email" name="email" class="form-control" id="userEmail" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="userPassword">Password</label>
                <input type="password" name="password" class="form-control" id="userPassword" placeholder="Password">
            </div>
            
            <!--<a href="Profile.html" class="btn btn-default">Login</a>-->
            <a href="SignUp2.html" class="btn btn-default" id="signUpButton">Sign up</a>
            <input type="submit" name="submit" value="Sign In" class="btn btn-default" id="signInButton" />
        </div> 
    </form>

    <p>
        <a href="http://validator.w3.org/check/referer">Validate Me</a>
    </p>
</body>
</html>