<!---check twitter-->

<!DOCTYPE html>
<html>
<head>
    <title>E-Commerce Site.</title>
    <link href="../styles/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../styles/user.css">
    <link rel="stylesheet" type="text/css" href="../styles/register.css">
    <link rel="stylesheet" type="text/css" href="../styles/cart.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <!--<script src="https://use.fontawesome.com/e05f192331.js"></script>-->
</head>
<body>
    <nav class="navtop">
        <div>
            <h1>Alpha Stores</h1>
        </div>
    </nav>
    <div class="searchdiv">
        <div class="logo">
            <h2>Alpha's</h2>
        </div>
        <div class="inputs">
            <form action="" method="">
                <input class="input-field" type="text" placeholder="Search Product Category">
                <button type="submit" class="search">Search</button>
            </form>
        </div>
        <div class="icons">
            <a href="" onclick="dropDown()" class="dropbtn"><i class="fa fa-user"></i>Login</a>
                    <div id="myDropDown" class="dropdown-content">
                        <button class="login" onclick="location.href='../php/user.php'">LOGIN</button><hr>
                        <a href="" class="create-account" onclick="location.href='../php/register.php'"><i class="fa fa-user"></i>CREATE ACCOUNT</a>
                        <a href="" class="accunt"><i class="fa fa-user-circle"></i>Account</a>
                        <a href="" class="orders"><i class="fa fa-credit-card"></i>Orders</a>
                        <a href="" class="saved-items"><i class="fa fa-floppy-o"></i>Saved Items</a>
                    </div>
            <a href="#" onclick="helpDropDown()" class="droplink"><i class="fa fa-question-circle"></i>Help</a>
                <div id="helpdropdown" class="dropdown">
                    <a href="">Contact us</a>
                    <a href="">Track My Order</a>
                    <a href="">Return My Order</a>
                    <a href="">FAQs</a>
                    <a href="">Product ratings</a>
                </div>
            <a href="" onclick="location.href='../php/cart.php'"><i class="fa fa-shopping-cart"></i>Cart</a>
        </div>
    </div>
