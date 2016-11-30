<?php
	session_start(); 
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <title>Webdev Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="SignUp.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="JavaScript/SignUpIn.js" type="text/javascript"></script>
</head>
<body>
	<?php
		function main()
		{		
			$exists = false;
				
			$email = $_POST["email"];
			$username = $_POST["username"];
			$password = $_POST["password"];

			$db = new PDO("mysql:dbname=salina99;host=localhost", "salina99", "Oshdatabase11");	

			$email = $db->quote($email);
			$username = $db->quote($username); 
			$password = $db->quote($password);
			
			$userValues = $db->query("SELECT Email FROM WebUser WHERE Email=$email");

			foreach($userValues as $value)
			{
				?>
					<p><?=$value["Email"]?> already has an account associated with it</p>
					<form action="SignUp.html">
						<input type="submit" value="Go Back To Sign Up Page" />
					</form>
				<?php

				$exists = true; 
			}	

			if($exists == false)
			{
				$db->query("INSERT INTO WebUser VALUES('',$username,$password,$email)");
				$_SESSION["email"] = $email;   
								
				header("Location: ../Profile/Profile.php"); // Redirecting To Profile Page				
			}						
		}
		main();		
	?>
</body>
</html>