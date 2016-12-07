<!DOCTYPE html>

<html lang="en">
<head>
    <title>Webdev Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<?php			
	
	main();
	function main()
	{	
		$db = new PDO("mysql:dbname=salina99;host=localhost", "salina99", "Oshdatabase11");	
		$returnVals = $db->query("SELECT `FileName`, `PathName`, `Emotion` FROM `WebAll_Images`");
		//var_dump($returnVals);
		
		$count = 0; //for making new rows
		foreach($returnVals as $row)
		{
			$img = $row["PathName"];
			
			if($count == 0)
			{				
				?>
					<div class="row" id="topRow">
				<?php
				
			}
		?>			
			<!-- HTML TO INSERT -->

				<div class="col-sm-12 col-xs-12 col-md-4 col-lg-3 ">
					<div class="thumbnail widget">
						<img src="<?= $img ?>" alt="Picture of red shirt" class="img" id="item"/> 
					</div>
				</div>
				
		<?php
			if($count == 3)
			{				
				$count = 0;
				?>
					</div>
				<?php				
			}
			else	
			{
				$count++;
			}				
		}//end of foreach
	}
	
	
	
	?>
</body>
</html>