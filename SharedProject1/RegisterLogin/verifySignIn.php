<?php
	session_start(); 
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <title>Webdev Project</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="SignUpIn.js" type="text/javascript"></script>
    <script src="jquery-3.1.1.min.js"></script>
    <script src="SignUpIn.js" type="text/javascript"></script>
    <link rel="stylesheet" href="SignUp.css">
</head>
<body>
	<?php
		function main()
		{	

			$exists = false;
 
 			$email = $_POST["email"];
 			$password = $_POST["password"];
 
 			$db = new PDO("mysql:dbname=salina99;host=localhost", "salina99", "Oshdatabase11");	
 
 			$email = $db->quote($email);
 			
 			$userValues = $db->query("SELECT Email, Password FROM WebUser WHERE Email=$email");
 
 			foreach($userValues as $value)
 			{
 				if($password == $value["Password"])
 				{
 					$_SESSION["email"] = $email;
					header("Location: ../Profile/Profile.php"); 
 				}
 				else
 				{
 					?>
 						<p>Sorry, this password is incorrect</p>
 						<form action="SignIn.php">
 							<input type="submit" value="Back To Sign In" />
 						</form>
 					<?php
 				}
 				$exists = true; 
			}	
 
 			if($exists == false)
 			{
 				?>
 					<p>Sorry, this password is incorrect</p>
 					<form action="SignIn.php">
 						<input type="submit" value="Back To Sign In" />
 					</form>
 				<?php
			}						
 	}
		main();		
	?>
</body>
</html>