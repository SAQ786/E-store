<?php
include "includes/common.php";
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>

<html>
   
<head>
        <title>Mobile | E-Store.com</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"/>

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
   
<body style="padding-top: 50px;">
            <!-- Header file -->
    <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        include 'includes/modal.php';
        ?>
    <br>
    <br>
    
<div class="container">
        <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <center><h1>Welcome to our E-Store</h1>
                <p>We have the best Mobile phone from Biggest Brands for you. No need to hunt around, we have all in one place.</p>
              </center>
            </div>
            <hr>
            <br>
            
     <div class="row">
           
            
        <div class="col-sm-12 text-center">
              <div class="panel-group">
                  <!----------------------------------------------------featured phone----------------------------------->
                  <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:orange">Featured Mobile</h3>
                        </div>
                    
                   <div class="panel-body">
                        <div class="col-sm-6 home-feature">
                            <div class="thumbnail">
                              <div class="panel-body">  <img src="./img/iphonex.png" class="img-responsive img-phone" alt="iphone x" ></div>
                                    <div class="caption">
                                        <h3>iPhone X</h3>
										<h5>Highlights :</h5>
										 <p>Battery : 4085mAH</p>
										 <p>12MP dual cameras  |  7MP TrueDepth front camera—Portrait mode and Portrait Lighting </p>
										 <p>RAM : 8GB ROM:256GB</p>
                                        <p>Price: Rs. 88000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-6 home-feature">
                            <div class="thumbnail">
                                <div class="panel-body"> <img src="./img/samsungs8.png" class="img-responsive img-phone"alt="samsung s8 plus"></div>
                                    <div class="caption">
                                        <h3>Galaxy S8 PLUS</h3>
										<h5>Highlights :</h5>
										 <p>Battery : 4085mAH</p>
										 <p>12MP Rear Camera | 8MP Front Camera </p>
										 <p>4 GB RAM | 64 GB ROM | Expandable Upto 256 GB</p>
                                            <p>Price: Rs. 65000.00 </p><br>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-6 home-feature">
                        <div class="thumbnail">
                            <div class="panel-body"> <img src="./img/op5t.png"class="img-responsive img-phone" alt="oneplus 5t"></div>
                                <div class="caption">
                                    <h3>OnePlus 5T</h3>
									<h5>Highlights :</h5>
									     <p>Battery : 4085mAH</p>
										 <p>16 MP + 20 MP | 16MP Front Camera  </p>
										 <p>10 GB RAM | 256 GB ROM</p>
                                        <p>Price: Rs. 36000.00 </p><br>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-6 home-feature">
                        <div class="thumbnail">
                            <div class="panel-body"> <img src="./img/mimix2.png"class="img-responsive img-phone" alt="mi mix 2"></div>
                                <div class="caption">
                                    <h3>Mi Mix 2</h3>
										<h5>Highlights :</h5>
										 <p>Battery : 4085mAH</p>
										 <p>12MP Rear Camera | 5MP Front Camera </p>
										 <p>6 GB RAM | 128 GB ROM</p>
                                        <p>Price: Rs. 36000.00 </p><br>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(16)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                    </div>
                    
                
				
                    
                        <div class="col-sm-6 home-feature">
                            <div class="thumbnail">
                                <div class="panel-body"> <img src="./img/Redmi K20.jpg"class="img-responsive img-phone" alt="Redmi K20" ><br></div>
                                    <div class="caption">
                                        <h3>Redmi K20 </h3>
										<h5>Highlights :</h5>
										 <p>Battery : 4000mAH</p>
										 <p>48MP + 13MP + 8MP | 20MP Front Camera </p>
										 <p>6 GB RAM | 128 GB ROM</p>
                                        <p>Price: Rs. 21999.00 </p><br>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(17)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=17" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
					
					
                        <div class="col-sm-6 home-feature">
                            <div class="thumbnail">
                                <div class="panel-body"><img src="./img/one-plus-7T-pro.jpg" class="img-responsive img-phone" alt="Phone"></div>
                               <div class="caption">
                                 <h3 class="p-bold">One Plus 7T Pro</h3>
                                <p>Battery : 4085mAH</p>
                                <p>Camera : 48MP +8MP + 16MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:128GB</p>
                                <p class="p-bold">Price : 47,999</p><br><br><br>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(18)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=18" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
					
             </div>
		</div>		  
                   <!----------------------------------------------------iphone----------------------------------->
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="ios" style="color:orange">apple</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-6 home-feature">
                            <div class="thumbnail">
                                 <div class="panel-body"><img src="./img/iphonex.png" class="img-responsive img-phone" alt="iphone x" ></div>
                                    <div class="caption">
                                        <h3>iPhone X</h3>
										<h5>Highlights :</h5>
										 <p>Battery : 4085mAH</p>
										 <p>12MP dual cameras  |  7MP TrueDepth front camera—Portrait mode and Portrait Lighting </p>
										 <p>RAM : 8GB ROM:256GB</p>
                                        <p>Price: Rs. 88000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-6 home-feature">
                            <div class="thumbnail">
                                 <div class="panel-body"><img src="./img/ipnone7plus.png" class="img-responsive img-phone" alt="ipnone 7 plus"></div>
                                    <div class="caption">
                                        <h3>iPhone 7 PLUS</h3>
										<h5>Highlights :</h5>
										 <p>Battery : 8000mAH</p>
										 <p>42MP + 12MP | 7MP Front Camera </p>
										 <p>RAM : 8GB ROM:256GB</p><br>
                                            <p>Price: Rs. 69000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-6 home-feature">
                        <div class="thumbnail">
                             <div class="panel-body"><img src="./img/iphone7.png" class="img-responsive img-phone" alt="iphone 7"></div>
                                <div class="caption">
                                    <h3>iPhone 7</h3>
									<h5>Highlights :</h5>
										 <p>Battery : 4000mAH</p>
										 <p>42MP dual cameras  |  7MP TrueDepth front camera—Portrait mode and Portrait Lighting </p>
										 <p>RAM : 8GB ROM:256GB</p>
                                        <p>Price: Rs. 60000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-6 home-feature">
                        <div class="thumbnail">
                             <div class="panel-body"><img src="./img/iphone6splus.png" class="img-responsive img-phone" alt="iphone 6s plus"></div>
                                <div class="caption">
                                    <h3>iPhone 6S PLUS</h3>
									<h5>Highlights :</h5>
										 <p>Battery : 5000mAH</p>
										 <p>18MP + 12MP | 12MP Front Camera </p>
										 <p>RAM : 8GB ROM:256GB</p><br>
                                        <p>Price: Rs. 40000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   <!----------------------------------------------------samsung----------------------------------->
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="samsung" style="color:orange">samsung</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-6 home-feature">
                            <div class="thumbnail">
                                <div class="panel-body"> <img src="./img/samsungs8.png" class="img-responsive img-phone" alt="galaxy s8 plus" ></div>
                                    <div class="caption">
                                        <h3>Samsung Galaxy S8 PLUS</h3>
										<h5>Highlights :</h5>
										 <p>Battery : 4000mAH</p>
										 <p>12MP + 8MP | 8MP Front Camera </p>
										 <p>6 GB RAM | 128 GB ROM | Expandable Upto 256 GB</p><br>
                                        <p>Price: Rs. 65000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div> 
                    
                        <div class="col-sm-6 home-feature">
                            <div class="thumbnail">
                                 <div class="panel-body"><img src="./img/samsungnote8plus.png" class="img-responsive img-phone" alt="note 8 plus"></div>
                                    <div class="caption">
                                        <h3>Samsung Galaxy Note 8 PLUS</h3>
										<h5>Highlights :</h5>
										 <p>Battery : 5000mAH</p>
										 <p>12MP  | 8MP Front Camera </p>
										 <p>6 GB RAM | 128 GB ROM | <br>Expandable Upto 256 GB</p>
                                            <p>Price: Rs. 60000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
						<div class="col-sm-6 home-feature">
							<div class="thumbnail">
								 <div class="panel-body"><img src="./img/samsungs7edge.png" class="img-responsive img-phone" alt="galaxy s7 edge"></div>
									<div class="caption">
										<h3>Samsung Galaxy S7 EDGE</h3>
										<h5>Highlights :</h5>
										 <p>Battery : 3600mAH</p>
										 <p>12MP Rear Camera | 5MP Front Camera </p>
										 <p>4 GB RAM | 32 GB ROM |<br> Expandable Upto 200 GB </p>
                                        <p>Price: Rs. 45000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
						<div class="col-sm-6 home-feature">
							<div class="thumbnail">
								 <div class="panel-body"><img src="./img/samsunga8.png" class="img-responsive img-phone" alt="galaxy a8"></div>
									<div class="caption">
										<h3>Samsung Galaxy A8</h3>
										<h5>Highlights :</h5>
										 <p>Battery : 3600mAH</p>
										 <p>12MP Rear Camera | 5MP Front Camera </p>
										 <p>4 GB RAM | 32 GB ROM |<br> Expandable Upto 200 GB </p>
                                      
                                        <p>Price: Rs. 35000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   <!----------------------------------------------------oneplus----------------------------------->
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="oneplus" style="color:orange">oneplus</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-6 home-feature">
                            <div class="thumbnail">
                                <div class="panel-body"> <img src="./img/op5t.png" class="img-responsive img-phone" alt="oneplus 5t" ></div>
                                    <div class="caption">
                                        <h3>OnePlus 5T</h3>
										<h5>Highlights :</h5>
										 <p>Battery : 4000mAH</p>
										 <p>48MP + 13MP| 20MP Front Camera </p>
										 <p>4 GB RAM | 128 GB ROM</p>
                                        <p>Price: Rs. 36000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-6 home-feature">
                            <div class="thumbnail">
                                <div class="panel-body"> <img src="./img/op5.png" class="img-responsive img-phone" alt="oneplus 5"></div>
                                    <div class="caption">
                                        <h3>OnePlus 5</h3>
										<h5>Highlights :</h5>
										 <p>Battery : 4000mAH</p>
										 <p>48MP + 13MP + 8MP | 20MP Front Camera </p>
										 <p>6 GB RAM | 128 GB ROM</p>
                                            <p>Price: Rs. 34000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-6 home-feature">
                        <div class="thumbnail">
                            <div class="panel-body"> <img src="./img/op3t.png" class="img-responsive img-phone" alt="oneplus 3t"></div>
                                <div class="caption">
                                    <h3>OnePlus 3T</h3>
									<h5>Highlights :</h5>
										 <p>Battery : 4000mAH</p>
										 <p>25MP + 13MP  | 12MP Front Camera </p>
										 <p>6 GB RAM | 128 GB ROM</p>
                                        <p>Price: Rs. 31000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-6 home-feature">
                        <div class="thumbnail">
                             <div class="panel-body"><img src="./img/op3.png" class="img-responsive img-phone" alt="oneplus 3"></div>
                                <div class="caption">
                                    <h3>OnePlus 3</h3>
									<h5>Highlights :</h5>
										 <p>Battery : 4000mAH</p>
										 <p>48MP + 8MP | 12MP Front Camera </p>
										 <p>4GB RAM | 128 GB ROM</p>
                                        <p>Price: Rs. 28000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   <!----------------------------------------------------xiaomi----------------------------------->
              <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="xiaomi" style="color:orange">xiaomi</h3>
                        </div>
						
                    
                    <div class="panel-body">
                        <div class="col-sm-6 home-feature">
                            <div class="thumbnail">
                               <div class="panel-body">  <img src="./img/mimix2.png" class="img-responsive img-phone" alt="mi mix2" ></div>
                                    <div class="caption">
                                        <h3>Mi Mix 2</h3>
										<h5>Highlights :</h5>
										 <p>Battery : 6000mAH</p>
										 <p>48MP + 13MP + 8MP | 20MP Front Camera </p>
										 <p>6 GB RAM | 128 GB ROM</p>
                                        <p>Price: Rs. 36000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(16)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-6 home-feature">
                            <div class="thumbnail">
                               <div class="panel-body">  <img src="./img/mimax2.png" class="img-responsive img-phone" alt="mi max 2"></div>
                                    <div class="caption">
                                        <h3>Mi Max 2</h3>
										<h5>Highlights :</h5>
										 <p>Battery : 5000mAH</p>
										 <p>48MP + 13MP  | 20MP Front Camera </p>
										 <p>6 GB RAM | 128 GB ROM</p>
                                            <p>Price: Rs. 16000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(15)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-6 home-feature">
                        <div class="thumbnail">
                            <div class="panel-body"> <img src="./img/mia1.png" class="img-responsive img-phone" alt="mi a1"></div>
                                <div class="caption">
                                    <h3>Mi A1</h3>
									<h5>Highlights :</h5>
										 <p>Battery : 4000mAH</p>
										 <p>48MP + 8MP | 8MP Front Camera </p>
										 <p>6 GB RAM | 128 GB ROM</p>
                                        <p>Price: Rs. 15000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(14)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-6 home-feature">
                        <div class="thumbnail">
                            <div class="panel-body"> <img src="./img/redminote4.png" class="img-responsive img-phone"alt="redmi note 4"></div>
                                <div class="caption">
                                    <h3>Redmi Note 4</h3>
									<h5>Highlights :</h5>
										 <p>Battery : 4000mAH</p>
										 <p>13MP  | 8MP Front Camera </p>
										 <p>4 GB RAM | 64GB ROM</p>
                                        <p>Price: Rs. 13000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(13)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                </div>
                        </div>
                    </div>
                </div>
             </div>      
                
        </div>  
     </div>   
	</div> 
  </div>  
  <?php include 'includes/footer.php'; ?>
</body>
</html>
    
   