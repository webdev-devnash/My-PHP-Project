<?php require "function.php"; ?>
<?php include("dbcon.php"); ?>

<?php
session_start();
$category1 = isset($_GET['Category']) ? $_GET['Category'] : '';
// $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

// Fetch products based on category and search term
// $products = getProductsByCategoryAndSearch($category1, $searchTerm);

$products = gethomepagepro($category1);

?>


<?php 
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_nm = $_POST['product_nm'];
    $product_disc = $_POST['product_disc'];
    $product_price = $_POST['product_price'];
    $product_mrp = $_POST['product_mrp'];

    $sql = "INSERT INTO cart(product_id, product_nm, product_disc, product_price, product_mrp)
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Products</title>
</head>
<body>
<?php include("includes/header.php"); ?>

<main class="productp">
    <div class="left">
        <div class="section-title">Products Categories</div>
        <a href="products.php?Category=Blander">Blander</a>
        <a href="products.php?Category=Mixar">Mixar</a>
        <a href="products.php?Category=fan">Fan</a>
        <a href="products.php?Category=Chopar">Chopar</a>
        <a href="products.php?Category=Soda Maker">Soda Maker</a>
        <a href="products.php?Category=Bulb">Bulb</a>
        <a href="products.php?Category=induction">induction</a>

    </div>



    <div class="right">
        
        <!-- -------Products---------- -->
        <div class="section-title">Our Products:</div>
        <div class="product">
            <form method="post">
            <?php foreach ($products as $product) { ?>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="img-fluid rounded-start" src="<?php echo "images/{$product['Pro_image']}"; ?>" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class="card-title"><?php echo $product['Pro_title']; ?></h1>
                                <p class="card-text">
                                    <button>
                                        <details>
                                            <summary><b>Details:</b></summary>
                                            <?php echo $product['Pro_detail']; ?>
                                        </details>
                                    </button>
                                </p>
                                <p class="card-text"><small class="text-muted">
                                    <b>Price: -<?php echo $product['Pro_dic']; ?>%off &nbsp₹<?php echo $product['Pro_price']; ?></b>
                                </small></p>
                                <p class="card-text">M.R.P.: <del>₹<?php echo $product['Pro_MRP']; ?></del></p>
                                <!-- <a href="#" class="but"><button name="addcart">Add To Cart</button></a> -->
                                <form method="post" action="managecart.php">
                                        <button type="csubmit" name="add_to_cart" class="buy">Add To Cart</button>
                                        <input type="hidden" name="product_id" value="<?php echo $product['Id']; ?>">
                                        <input type="hidden" name="product_nm" value="<?php echo $product['Pro_title']; ?>">
                                        <input type="hidden" name="product_disc" value="<?php echo $product['Pro_dic']; ?>">
                                        <input type="hidden" name="product_price" value="<?php echo $product['Pro_price']; ?>">
                                        <input type="hidden" name="product_mrp" value="<?php echo $product['Pro_MRP']; ?>">
                                    </form>
                                <?php
                                if(isset($_POST['addcart']))
                                {
                                    if(!isset($_SESSION['user']))
                                    {
                                        echo "<script>
                                        alert('Login error! You have to Login first.');
                                        window.location.href = 'login.php';
                                        </script>";
                                    }
                                    else{
                                        echo "<script>
                                        window.location.href = 'products.php';
                                        </script>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </form>
                
            
        </div>
    </div>

            

    <a href="#" class="arrow" style="background-image: url('images/arrow1.png');"></a>


</main>
    <?php  include("includes/footer.php"); ?>

    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script> -->
</body>
</html>




