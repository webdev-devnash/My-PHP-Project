<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>My cart</title>
</head>
<body>
                
    <div class="maincart">
        <a href="/PATEL/index.php" class="hmenu1">
            <i class="fa fa-home"></i>&nbsp&nbsp&nbsp<i class="fa-solid fa-shop"></i> 
        </a>

        <table class="carttable"  border=8  >
            <tr class="tab">
                <th colspan="8">My cart</th>
            </tr>
            <tr>
                <th>Serial No.</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Price</th>
                <th>Product MRP</th>
                <th>Quantity</th>
                <th>Product Total</th>
                <th>Remove Product</th>
            </tr>
            <?php 
            if(isset($_SESSION['cart'])) {
                foreach($_SESSION['cart'] as $key=> $value) {
                    echo "
                    <tr>
                        <td>{$value['product_id']}</td>
                        <td>{$value['product_nm']}</td>
                        <td>{$value['product_disc']}</td>
                        <td>{$value['product_price']}<input type='hidden' class='iprice' value='{$value['product_price']}'></td>
                        <td>{$value['product_mrp']}</td>
                        <td>
                        <form action='managecart.php' method='POST'>
                        <input type='number' class='iquantity' name='mod_que' onchange='this.form.submit()' value='{$value['quantity']}' min='1' max='10'>
                        <input type='hidden' name='product_nm' value='{$value['product_nm']}'>
                        </form>
                        </td>
                        <td class='itotal'></td>
                        <td>
                            <form action='managecart.php' method='POST'>
                                <button name='remove_item' class='remove'>Remove</button>
                                <input type='hidden' name='product_nm' value='{$value['product_nm']}'>
                            </form>
                        </td>
                    </tr>";
                }
            }
            ?> 
        </table>

        <div class="tot">
            <div class="carttotal">
                <h2 class="tit">Grand Total:</h2>
                <h3 id="gtotal" style="color:blue;font-size:20px;"></h3>
            </div>

            <?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) { ?>
            <form class="cartform" action="purchase.php" method="post">
                <label>Full Name:</label>
                <input class="fhii" type="text" name="fullname" placeholder="Full name....." required><br><br>
                <label>Email</label>
                <input class="fhii" type="text" name="email" placeholder="Email....." required><br><br>
                <label>Phone</label>
                <input class="fhii" type="" name="phone" placeholder="Phone Number" required pattern="^\d{10}$" title="Enter a valid 10-digit phone number without any letters." maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,''); "><br><br>
                <label>Address</label>
                <input class="fhii" type="text" name="address" placeholder="Address....." required><br><br>
                
                <input type="radio" id="uploadPayment" name="paymode" value="Upload Payment Details" onclick="showPopup()">
                <label for="uploadPayment">UPI Payment</label><br><br>
                <input type="radio" id="cashOnDelivery" name="paymode" value="Cash on Delivery" checked>
                <label for="cashOnDelivery">Cash On Delivery</label><br><br>
                
                
                <button name="purchase">Make Purchase</button>
            </form>
            <?php } ?>
        </div>
    </div>

    <script>
        function showPopup() {
            alert("This Features can be available in  coming soon!.....");
            
            // Automatically select the Cash on Delivery radio button after the alert
            document.getElementById('cashOnDelivery').checked = true;   
        }

        var gt = 0;
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');

        function subtotal() {
            gt = 0;
            for (var i = 0; i < iprice.length; i++) {
                itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
                gt += (iprice[i].value) * (iquantity[i].value);
            }
            gtotal.innerText = gt;
        }

        subtotal();

        // JavaScript to Show/Hide the Payment Upload Form
        document.getElementById('uploadPayment').addEventListener('change', function () {
            document.getElementById('uploadForm').style.display = 'block';
        });

        // Hide the form if "Cash on Delivery" is selected
        document.getElementsByName('paymode')[1].addEventListener('change', function () {
            document.getElementById('uploadForm').style.display = 'none';
        });

       
    </script>
</body>
</html>
