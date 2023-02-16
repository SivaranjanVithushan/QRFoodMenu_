<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
include_once 'product-action.php';
error_reporting(0);
session_start();
if (empty($_SESSION["user_id"])) {
    header('location:login.php');
} else {


    foreach ($_SESSION["cart_item"] as $item) {

        $item_total += ($item["price"] * $item["quantity"]);

        if ($_POST['submit']) {

            $SQL = "insert into users_orders(u_id,title,quantity,price,tableNo) values('" . $_SESSION["user_id"] . "','" . $item["title"] . "','" . $item["quantity"] . "','" . $item["price"] . "','" . $_POST['tableNo'] . "')";

            mysqli_query($db, $SQL);

            $success = "Thankyou! Your Order Placed Successfully!";
        }
    }
?>


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="checkout.png">
        <title>Order Checkout</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animsition.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <div class="site-wrapper">
            <!--header starts-->
            <header id="header" class="header-scroll top-header headrom">
                <!-- .navbar -->
                <nav class="navbar navbar-dark">
                    <div class="container">
                        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                        <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/Untitled-2.png" alt=""> </a>
                        <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                            <ul class="nav navbar-nav">
                                <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                                <!-- <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Restaurants <span class="sr-only"></span></a> </li> -->

                                <?php
                                if (empty($_SESSION["user_id"])) {
                                    echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Sign Up</a> </li>';
                                } else {


                                    echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">Your Orders</a> </li>';
                                    echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">LogOut</a> </li>';
                                }

                                ?>

                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- /.navbar -->
            </header>
            <div class="page-wrapper">
                <div class="top-links">
                    <div class="container">
                        <ul class="row links">

                            <li class="col-xs-12 col-sm-4 link-item"><span>1</span><a href="restaurants.php">Choose Category</a></li>
                            <li class="col-xs-12 col-sm-4 link-item "><span>2</span><a href="#">Pick your favourite dishes</a></li>
                            <li class="col-xs-12 col-sm-4 link-item active"><span>3</span><a href="checkout.php">Get Food & Pay</a></li>
                        </ul>
                    </div>
                </div>

                <div class="container">

                    <span style="color:green;">
                        <?php echo $success; ?>
                    </span>

                </div>




                <div class="container m-t-30">
                    <form action="" method="post">
                        <div class="widget clearfix">

                            <div class="widget-body">
                                <form method="post" action="#">
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <div class="cart-totals margin-b-20">
                                                <div class="cart-totals-title">
                                                    <h4>Cart Summary</h4>
                                                </div>
                                                <div class="cart-totals-fields">

                                                    <table class="table">
                                                        <tbody>



                                                            <tr>
                                                                <td>Cart Subtotal</td>
                                                                <td> Rs.<?php echo $item_total; ?></td>
                                                            </tr>
                                                            <!-- <tr>
                                                                <td>Shipping &amp; Handling</td>
                                                                <td>FREE*</td>
                                                            </tr> -->
                                                            <tr>
                                                                <td class="text-color"><strong>Total</strong></td>
                                                                <td class="text-color"><strong>Rs. <?php echo $item_total; ?></strong></td>
                                                            </tr>
                                                        </tbody>




                                                    </table>
                                                </div>
                                            </div>
                                            <!--cart summary-->
                                            <div class="payment-option">
                                                <ul class=" list-unstyled">
                                                    <li>
                                                        <label class="custom-control custom-radio  m-b-20">
                                                            <input name="mod" id="radioStacked1" checked value="COD" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Cash on delivery</span>
                                                            <br> <span>you can Pay digitally with SMS Pay Link.</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom-control custom-radio  m-b-10">
                                                            <input name="mod" type="radio" value="paypal" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Credit Card<img src="images/paypal.jpg" alt="" width="90"></span> </label>
                                                    </li>
                                                    <li>
                                                    <label for="custom-control">Table No:</label>
                                                            <input class="form-control" type="text" name="tableNo"  placeholder="Enter Your Table No" required> <small class="form-text text-muted">before Order Enter the Table No</small>
                                                    </li>
                                                </ul>
                                                <p class="text-xs-center"> <input type="submit" onclick="return confirm('Are you sure?');" name="submit" class="btn btn-outline-success btn-block" value="Order now"> </p>
                                            </div>
                                </form>
                            </div>
                        </div>

                </div>
            </div>
            </form>
        </div>
        <!-- start: FOOTER -->
        <?php include('footer.php'); ?>
        <!-- end:Footer -->
        </div>
        <!-- end:page wrapper -->


        <!-- Bootstrap core JavaScript
    ================================================== -->
        <script src="js/jquery.min.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/animsition.min.js"></script>
        <script src="js/bootstrap-slider.min.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/headroom.js"></script>
        <script src="js/foodpicky.min.js"></script>
    </body>

</html>

<?php
}
?>