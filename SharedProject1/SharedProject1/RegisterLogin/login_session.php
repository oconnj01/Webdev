<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Webdev Project</title>
    <meta charset="utf-8"></meta>    
  </head>

  <body>
    <?php
	    $db = new PDO("mysql:dbname=salina99;host=localhost", "salina99", "Oshdatabase11");

	    session_start();// Starting Session

	    // Storing Session
	    $email=$_SESSION["email"];

	    // SQL Query To Fetch Needed Information Of User
	    $usernames = $db->query("SELECT Username FROM WebUser WHERE Email=$email");
	
	    $user = "";
		if($usernames != false)//if usernames is false then the user is a guest
		{
			foreach($usernames as $username){
				$user = $username["Username"];
			}
		}
      
      $_SESSION["username"] = $user;   
    ?>
  </body>
</html>



     