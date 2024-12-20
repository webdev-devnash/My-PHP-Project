<?php
session_start();
// session_destroy();
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

// Handle "Add to Cart" action
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_nm = $_POST['product_nm'];
    $product_disc = $_POST['product_disc'];
    $product_price = $_POST['product_price'];
    $product_mrp = $_POST['product_mrp'];

    $sql = "INSERT INTO order_user (product_id, product_nm, product_disc, product_price, product_mrp)
            VALUES ('$product_id', '$product_nm', '$product_disc', '$product_price', '$product_mrp')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['cart_count'] = isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] + 1 : 1;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Patel Electric</title>



</head>

<body>

<?php  include("includes/header.php"); ?>

    <!-- <?php print_r($_SESSION['cart'])?> -->
    <!-- Top Navigation Bar -->

  <!-- banner -->

  <main>
        <div class="herosection">
            <a href="all categories.php"><img src="images/rb1.png" alt="non"></a>
            <div class="heromsg">
                <p>Welcome To Patel-Electric-Shop, You can also shop Here Best Quality products With Services Provide.
                    <a href="#"> Click here to See</a>
                </p>
            </div>

        </div>

        <div class="herosection">
        <a href="all categories.php"><img src="images/rb2.jpg" alt="non"></a>
            <div class="heromsg">
                <p>Welcome To Patel-Electric-Shop, You can also shop Here Best Quality products With Services Provide.
                    <a href="#"> Click here to See</a>
                </p>
            </div>
        </div>

        <div class="herosection">
        <a href="all categories.php"><img src="images/rb3.jpg" alt="non"></a>
            <div class="heromsg">
                <p>Welcome To Patel-Electric-Shop, You can also shop Here Best Quality products With Services Provide.
                    <a href="#"> Click here to See</a>
                </p>
            </div>
        </div>

        <div class="herosection">
            <img src="images/rb4.jpg" alt="non">
            <div class="heromsg">
                <p>Welcome To Patel-Electric-Shop, You can also shop Here Best Quality products With Services Provide.
                    <a href="#"> Click here to See</a>
                </p>
            </div>
        </div>

        <div style="background-color: rgb(73, 235, 235); font-size: 20px; text-align: center;"><i
                class="fa-solid fa-lightbulb" style="color: #450af5;"></i> <strong> Welcome To Patel Electronics
            </strong><i class="fa-solid fa-lightbulb" style="color: #f50aba;"></i>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <script>
            let slideIndex = 0;
            showSlides();
            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("herosection");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) { slideIndex = 1 }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>

        <?php
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

            $products = [];
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $products[] = $row;
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>


    <div class="pro">
        <p>Our Products :</p>
    </div>
    <div class="shopsection">
        <div class="carousel">
            <div class="carousel-control" id="prev">❮❮</div>
            <div class="carousel-inner">
                <?php foreach ($products as $product): ?>
                    <div class="carousel-item">
                        <div class="box1 box">
                            <div class="boxcontent">
                                <h2><?php echo $product["Pro_title"]; ?></h2>
                                <div class="boximg" style="background-image: url('<?php echo $product["Pro_image"]; ?>');"></div>
                                <div class="some">
                                    <button class="detail">
                                        <details>
                                            <summary><b>Details :</b></summary>
                                            <p><?php echo $product["Pro_details"]; ?></p>
                                        </details>
                                    </button>
                                    <p><b>Price : -<?php echo $product["Pro_disc"]; ?>%  ₹<?php echo $product["Pro_prize"]; ?></b></p>
                                    <p>M.R.P. : <del>₹<?php echo $product["Pro_MRP"]; ?></del></p>

                                    <form method="post" action="managecart.php">
                                        <button type="csubmit" name="add_to_cart" class="buy">Add To Cart</button>
                                        <input type="hidden" name="product_id" value="<?php echo $product['Id']; ?>">
                                        <input type="hidden" name="product_nm" value="<?php echo $product['Pro_title']; ?>">
                                        <input type="hidden" name="product_disc" value="<?php echo $product['Pro_disc']; ?>">
                                        <input type="hidden" name="product_price" value="<?php echo $product['Pro_prize']; ?>">
                                        <input type="hidden" name="product_mrp" value="<?php echo $product['Pro_MRP']; ?>">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div  id="next" class="carousel-control">❯❯</div>
        </div>
    </div>


<script>
    const prev = document.getElementById('prev');
    const next = document.getElementById('next');
    const carouselInner = document.querySelector('.carousel-inner');
    let currentIndex = 0;

    prev.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            carouselInner.style.transform = `translateX(-${currentIndex * 16.66}%)`;
        }
    });

    next.addEventListener('click', () => {
        if (currentIndex < <?php echo count($products) - 6; ?>) {
            currentIndex++;
            carouselInner.style.transform = `translateX(-${currentIndex * 16.66}%)`;
        }
    });
</script>


<!-- --------------------------------------------------- -->


<?php
        // // PHP code to fetch and display products
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname = "patel_electric";

        // // Create connection
        // $conn = new mysqli($servername, $username, $password, $dbname);

        // // Check connection
        // if ($conn->connect_error) {
        //     die("Connection failed: " . $conn->connect_error);
        // }

        // $sql = "SELECT Id, Pro_title, Pro_image, Pro_details, Pro_prize, Pro_MRP, Pro_disc FROM home_sproduct";
        // $result = $conn->query($sql);

        // if ($result->num_rows > 0) {
        //     while($row = $result->fetch_assoc()) {
        //         echo '<div class="box1 box">';
        //         echo '<div class="boxcontent">';
        //         echo '<h2>' . $row["Pro_title"] . '</h2>';
        //         echo '<div class="boximg" style="background-image: url(\'' . $row["Pro_image"] . '\');"></div>';
        //         echo '<div>';
        //         echo '<button class="detail">';
        //         echo '<details>';
        //         echo '<summary><b>Details :</b></summary>';
        //         echo '<p>' . $row["Pro_details"] . '</p>';
        //         echo '</details>';
        //         echo '</button>';
        //         echo '<p><b>Price : -' . $row["Pro_disc"] . ' ₹' . $row["Pro_prize"] . '</b></p>';
        //         echo '<p>M.R.P. : <del>₹' . $row["Pro_MRP"] . '</del></p>';
        //         echo '<a href="#"><b>Buy Now</b></a>';
        //         echo '</div>';
        //         echo '</div>';
        //         echo '</div>';
        //     }
        // } else {
        //     echo "0 results";
        // }
        // $conn->close();
?>
<!-- ------------------------------------------------ -->


        <!-- Products -->

    <div class="pro1">
        <p>Latest Products :</p>
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

        $sql = "SELECT Id, Pro_title, Pro_image, Pro_details, Pro_prize, Pro_MRP, Pro_disc FROM home_nsproduct";
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
                echo '<p><b>Price : -' . $row["Pro_disc"] .'%'. ' ₹' . $row["Pro_prize"] . '</b></p>';
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
                                                                                            border-radius: 5px;">Add To Cart</button>';
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


    <?php  include("includes/footer.php"); ?>

</body>
</html>


