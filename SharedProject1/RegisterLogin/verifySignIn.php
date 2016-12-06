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
	<!--
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="SignUp.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="JavaScript/SignUpIn.js" type="text/javascript"></script>-->
</head>
<body>
	<?php
		function main()
		{	

			$exists = false;

			$username = $_POST["username"];
			$password = $_POST["password"];

			$db = new PDO("mysql:dbname=thielj46;host=localhost", "theilj46", "528746");	

			$username = $db->quote($username);
			
			$userValues = $db->query("SELECT Username, Password FROM Lab7 WHERE Username=$username");

			foreach($userValues as $value)
			{
				if($password == $value["Password"])
				{
						$_SESSION["username"] = $username;   
						header("Location: lab6.php"); // Redirecting To Profile Page
					?>
						
					<?php
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