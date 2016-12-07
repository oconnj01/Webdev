<?php
	session_start(); 
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <title>Webdev Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <script src="JavaScript/SignUpIn.js" type="text/javascript"></script>
    <script src="../JavaScript/jquery-3.1.1.min.js"></script>
    <script src="../JavaScript/SignUpIn.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="SignUp.css">
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

			if($userValues != false)
			{
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
			}

			if($exists == false)
			{
				$test = $db->query("INSERT INTO WebUser VALUES('',$username,$password,$email,'')");
				$_SESSION["email"] = $email;   
								
				header("Location: ../Profile/Profile.php"); // Redirecting To Profile Page				
			}						
		}
		main();		
	?>
</body>
</html>