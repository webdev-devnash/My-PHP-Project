<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">

    <title>About page</title>
</head>

<body>

    <?php  include("includes/header.php"); ?>

    <main class="about">
        <div class="ab-container" id="about">
            <h3> ABOUT US </h3>

            <div class="simple"></div>

            <p class="pera1">Welcome to Patel Electric Shop! Located in the heart of Junagadh at Azad Chowk, we are your
                go-to destination for all your electrical needs. With a wide range of products from top brands, we offer
                everything from home appliances to industrial electrical equipment.here providing exceptional service
                and expert advice.
                We pride ourselves on quality, affordability, and
                customer satisfaction. Visit us today for reliable and efficient solutions tailored to your
                Requirements.
            </p>

            <div class="simple"></div>

            <div class="second">
                <div class="pera2">
                    <p>:) Patel Electronic provide to All products and
                        services to the customer.
                    </p>
                 <a href="contact.php"><button>More Info...</button></a>                  
                    
                </div>
                <div class="card">
                    <img src="images/about1.jpg" alt="Electric Items">
                </div>                

            </div>

        </div>    <?php  include("includes/footer.php"); ?>

        <a href="#" class="arrow" style="background-image: url('images/arrow1.png');"></a>


    </main>


</body>


</html>
