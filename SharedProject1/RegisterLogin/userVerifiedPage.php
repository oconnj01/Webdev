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
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			
			$db = new PDO("mysql:dbname=salina99; host=localhost","salina99","Oshdatabase11");		
			
			$values = $db->query("SELECT Username, Email, Password FROM Users WHERE Email='$email'");
			
			if($values == null)
			{
				print("Null");
				//create button back to sign up page
			}
			else
			{
				foreach($values as $row)
				{
					
					print($row["Email"]);
				
					//query here to insert new user
					//then create go to profile button

				}
			}

		}
		main();
		
	?>
</body>
</html>