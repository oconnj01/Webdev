
<!DOCTYPE html>

<html lang="en">
<head>
    <title>Webdev Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../JavaScript/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="ImageUpload.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="Profile.css">
    <link rel="stylesheet" type="text/css" href="../Homepage.css">
</head>
<body>
    <?php
    main(); 

    function main(){
		//include("../RegisterLogin/login_session.php"); 	
		include "../Php/header.php";
    }
    ?>

    <div id="tableContainer">
        <div>
            <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
                <div id="selectImage">
                    <label>Select Your Image</label><br />
                    <input type="file" name="file" id="file" required />
                    <input type="submit" value="Upload" class="submit" />
                </div>
            </form>
        </div>
       

   	 <div class="row">
   	  	     <button class="col-md-4 " id="item2"></button>
    		 <button class="col-md-4 widget" id="profilePicture">Profile Picture</button>
    		 <button class="col-md-4 " id="item2"></button>
    	</div>
        <div class="row">
            <button class="col-md-4 widget" id="item"><p class="content">Picture</p></button>
            <button class="col-md-4 widget" id="item"><p class="content">Picture</p></button>
            <button class="col-md-4 widget" id="item"><p class="content">Picture</p></button>
        </div>
        <div class="row" id="bottomRow">
            <button class="col-md-4 widget" id="item"><p class="content">Picture</p></button>
            <button class="col-md-4 widget" id="item"><p class="content">Picture</p></button>
            <button class="col-md-4 widget" id="item"><p class="content">Picture</p></button>
        </div>
    </div>

 

</body>
</html>