<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>

    <title>header page</title>


</head>
<body>
<header>
        <div class="navbar">
            <img class="logo" src="images/logop.png" alt="Patel Electric">


            <ul class="search">
                <select class="search-select">
                    <option>All</option>
                    <option>Iron</option>
                    <option>Blander</option>
                    <option>Mixer</option>
                </select>
                <input placeholder=" Search Electric Items" class="search-bar">
                <button class="search-button"><i class="fa-solid fa-magnifying-glass"></i></button>

            </ul>
            
            <ul class="icons">
                <?php
                    if(isset($_SESSION['user']))
                    {
                        ?>
                        <i class="fa-solid fa-right-to-bracket"><a href="logout.php">&nbsp; Logout</a></i>
                        <?php
                    }
                    else
                    {
                ?>
                <i class="fa-solid fa-right-to-bracket"><a href="login.php">&nbsp; Login</a></i>
                        <?php
                    }
                        ?>
                <i class="fa-solid fa-right-to-bracket"><a href="register.php">&nbsp; Register</a></i>
                <!-- <a href="logout.php">Logout</a> -->
            </ul>

            
       
            <div class="lang" style="margin: 80px 24px 70px 0px; padding: 8px;">
            <script>

                function loadGoogleTranslate()

                {

                    new google.translate.TranslateElement("Dev")

                }

            </script>


            <div id="Dev"></div>
                
                    <div class="addto">
                        <?php 
                            $count=0;
                            if(isset($_SESSION['cart']))
                            {
                                $count=count($_SESSION['cart']);
                            }
                        
                        ?>
                    <a href="mycart.php" class="cart"><i class="fa-solid fa-cart-shopping" style="font-size:22px;"></i>&nbsp&nbsp(<?php echo $count; ?>)</a>
                    </div>
                    
            </div>

        </div>
 </div>
        <div class="panel">
            <div class="home-icon">
                <a href="/PATEL/index.php" class="hmenu">
                    <!-- <i class="fa-solid fa-bars"> </i>-->
                        <i class="fa fa-home"></i>&nbsp&nbsp&nbsp<i class="fa-solid fa-shop"></i> 

                </a>
            </div>

            <div class="menus">
                <p><a href="/PATEL/all categories.php ">All Categories</a></p>
                <p><a href="/PATEL/products.php">Products</a></p>
                <p><a href="/PATEL/about.php">About Us</a></p>
                <p><a href="/PATEL/contact.php">Contact Us</a></p>
                <p><a href="/PATEL/cus_service.php">Customer Services</a></p>

            </div>
        </div>

    </header>
    
</body>
</html>


