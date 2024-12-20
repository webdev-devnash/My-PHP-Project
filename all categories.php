<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">

    <title>all categories</title>
</head>

<body>


<?php  include("includes/header.php"); ?>

<main>

          <!-- ------------------------------------------------ -->
        <!-- Products -->
         
        <br> <br> <br> <br> <br> <br> <br> <br> <br>
        <div class="pro1">
            <p style="align-items: center; text-align: center; font-size: xx-large;"><strong>Latest Products</strong>
            </p>
        </div>


        <div class="shopsection1">

        <?php
        // PHP code to fetch and display products
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "patel_electric";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT Id, Pro_title, Pro_image, Pro_details, Pro_prize, Pro_MRP, Pro_disc FROM product";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="box1 box12">';
                echo '<div class="boxcontent1">';
                echo '<h2>' . $row["Pro_title"] . '</h2>';
                echo '<div class="boximg1" style="background-image: url(\'' . $row["Pro_image"] . '\');"></div>';
                echo '<div>';
                echo '<button class="detail">';
                echo '<details>';
                echo '<summary><b>Details :</b></summary>';
                echo '<p>' . $row["Pro_details"] . '</p>';
                echo '</details>';
                echo '</button>';
                echo '<p><b>Price : -' . $row["Pro_disc"] . '%  ₹' . $row["Pro_prize"] . '</b></p>';
                echo '<p>M.R.P. : <del>₹' . $row["Pro_MRP"] . '</del></p>';
                echo '<form method="post" action="managecart.php">';
                echo '<button type="submit" name="add_to_cart" class="buy" style="margin:3px; position: relative;
                                                                                    left: 10px;
                                                                                    color: rgb(0, 0, 0);
                                                                                    padding: 15px;
                                                                                    width: 90%;
                                                                                    font:bold;
                                                                                    font-size: 17px;
                                                                                    border: 3px solid rgb(255, 166, 0);
                                                                                    background-color: #17c5c5;
                                                                                    border-radius: 5px;cursor:pointer">Add To Cart</button>';
               
                echo '<input type="hidden" name="product_id" value="' . $row["Id"] . '">';
                echo '<input type="hidden" name="product_nm" value="' . $row["Pro_title"] . '">';
                echo '<input type="hidden" name="product_disc" value="' . $row["Pro_disc"] . '">';
                echo '<input type="hidden" name="product_price" value="' . $row["Pro_prize"] . '">';
                echo '<input type="hidden" name="product_mrp" value="' . $row["Pro_MRP"] . '">';
                echo '</form>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                                   
               
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>
       
        <a href="#" class="arrow" style="background-image: url('images/arrow1.png');"></a>


    </main>

    </body>
    </html>
<?php  include("includes/footer.php"); ?>
