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

    <title>Contact page</title>
</head>

<body>
<?php  include("includes/header.php"); ?> 
<main>
        <div class="ab-container">
            <img class="con" src="images/customer.jpg" >
            
        <div class="simple"> </div>  

        <p class="pera12"><strong>Our Services is Here :</strong>
        </p>
        
        <div class="outitem12"> 
                <div class="serve">
                    <button class="it1" onclick="window.location.href='csform.php?product=Blander'">• Blander</button>
                    <button class="it1" onclick="window.location.href='csform.php?product=Mixer'">• Mixer</button>
                    <button class="it1" onclick="window.location.href='csform.php?product=Toster'">• Toster</button>
                    <button class="it1" onclick="window.location.href='csform.php?product=Fan'">• Fan</button>
                    <button class="it1" onclick="window.location.href='csform.php?product=Coolar'">• Coolar</button>
                    <button class="it1" onclick="window.location.href='csform.php?product=Soda Maker'">• Soda Maker</button>
                    <!-- <button class="it1" onclick="window.location.href='form.php?product=Iron'">• Iron</button> -->
                </div>
    
        </div>


    </div>

</main>
        <a href="#" class="arrow" style="background-image: url('images/arrow1.png');"></a>
        
    <?php  include("includes/footer.php"); ?>

</body>

</html>