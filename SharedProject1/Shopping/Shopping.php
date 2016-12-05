<!DOCTYPE html>

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
    <?php
    main(); 

    function main(){
	
		include "../Php/header.php";
    }
    ?>

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
                <a href="ShoppingCart.php" class="btn btn-primary btn-sm glyphicon glyphicon-shopping-cart">   Shopping Cart</a>
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
