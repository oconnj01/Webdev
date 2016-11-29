 <?php
	    $db = new PDO("mysql:dbname=salina99;host=localhost", "salina99", "Oshdatabase11");

	    session_start();// Starting Session

	    // Storing Session
	    $email=$_SESSION["email"];

	    // SQL Query To Fetch Needed Information Of User
	    $usernames = $db->query("SELECT Username FROM WebUser WHERE Email=$email");
	
	    $user = "";
	    foreach($usernames as $username){
		    $user = $username["Username"];
	    }
?>



     