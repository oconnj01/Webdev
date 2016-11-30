﻿<!DOCTYPE html>

<html lang="en">
<head>
    <title>Webdev Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Shopping.css">
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="../Homepage.php">WebSiteName</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default glyphicon glyphicon-search"> </button>
                    <?php
                    main();

                    function main(){
						session_start();
                        if(isset($_SESSION["email"])){
                        ?>
                        <span><a class="signOut" href="../RegisterLogin/SignIn.php">Sign out</a></span>
                        <?php
                        }
                        else{
                        ?>
                        <span><a class="signIn" href="../RegisterLogin/SignIn.php">Sign in</a></span>
                        <?php
                        }
                    }
                    ?>
                </form>

                <ul class="nav navbar-nav">
                    <li><a href="http://webdev.cs.uwosh.edu/students/salina99/Project/SharedProject1/Profile/Profile.php">Profile</a></li>
                    <li><a href="Shopping.php">Shopping</a></li>
                    <li><a href="../About.php">About</a></li>
                </ul>


            </div>
        </div>
    </nav>

    <div id="layout">
        <div id="filterAndCart">
            <label for="priceFilter">Price: </label> <br />
            <div class="btn-group" id="priceFilter">
                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Dropdown
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">$7.00</a></li>
                    <li><a href="#">$10.00</a></li>
                    <li><a href="#">$15.00</a></li>
                    <li><a href="#">$20.00</a></li>
                    <li><a href="#">$30.00</a></li>
                    <li><a href="#">$50.00</a></li>
                </ul>
            </div>
            <div id="filterElements">
                <!--<a href="ShoppingCart.html"><button id="shoppingCartButton">Shopping Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></button></a>-->
                <a href="ShoppingCart.html" class="btn btn-primary btn-sm glyphicon glyphicon-shopping-cart">   Shopping Cart</a>
            </div>

            
        </div>
       </div>

    <div class="container-fluid ">
        <div class="row" id="topRow">

            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail">
                <img src="ShopImages/shirt1_red.jpg" alt="Picture of red shirt" class="img" />
                    <span>$10.00</span>
                <button class="cartAdd"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add</button>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail">
                    <img src="ShopImages/shirt1_green.jpg" alt="Picture of green shirt" class="img" />
                    <button class="cartAdd"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add</button>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail">
                    <img src="ShopImages/shirt1_blue.jpg" alt="Picture of blue shirt" class="img" />
                    <button class="cartAdd"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add</button>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail">
                    <img src="ShopImages/shirt1_yellow.jpg" alt="Picture of yellow shirt" class="img" />
                    <button class="cartAdd"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add</button>
                </div>
            </div>


        </div>
        <div class="row">

            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail">
                    <img src="ShopImages/shirt1_red.jpg" alt="Picture of red shirt" class="img" />
                    <span>$10.00</span>
                    <button class="cartAdd"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add</button>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail">
                    <img src="ShopImages/shirt1_green.jpg" alt="Picture of green shirt" class="img" />
                    <button class="cartAdd"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add</button>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail">
                    <img src="ShopImages/shirt1_blue.jpg" alt="Picture of blue shirt" class="img" />
                    <button class="cartAdd"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add</button>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail">
                    <img src="ShopImages/shirt1_yellow.jpg" alt="Picture of yellow shirt" class="img" />
                    <button class="cartAdd"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add</button>
                </div>
            </div>


        </div>
        <div class="row">

            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail">
                    <img src="ShopImages/shirt1_red.jpg" alt="Picture of red shirt" class="img" />
                    <span>$10.00</span>
                    <button class="cartAdd"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add</button>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail">
                    <img src="ShopImages/shirt1_green.jpg" alt="Picture of green shirt" class="img" />
                    <button class="cartAdd"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add</button>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail">
                    <img src="ShopImages/shirt1_blue.jpg" alt="Picture of blue shirt" class="img" />
                    <button class="cartAdd"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add</button>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3">
                <div class="thumbnail">
                    <img src="ShopImages/shirt1_yellow.jpg" alt="Picture of yellow shirt" class="img" />
                    <button class="cartAdd"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add</button>
                </div>
            </div>


        </div>
    </div>

    <div>
        <a href="http://validator.w3.org/check/referer">Validate Me</a>
    </div>
</body>
</html>

<!--<div class="row" id="topRow">
          <div class="widget col-md-2">
              <img src="ShopImages/t-shirt-150527_640.png" alt="Picture of red shirt" class="img" />
              <button class="cartAdd"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add</button>
          </div>
      </div>-->

<!--<div class="" id="bottomRow">
            <div class="col-md-4 widget"><p class="content">Item</p></div>
            <div class="col-md-4 widget"><p class="content">Item</p></div>
            <div class="col-md-4 widget"><p class="content">Item</p></div>
            <div class="col-md-4 widget"><p class="content">Item</p></div>
        </div>-->
