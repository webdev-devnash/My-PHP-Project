<?php

session_start();

//  include("connect.php");
$conn=mysqli_connect("localhost","root","","patel_electric");
// session_destroy();

if(mysqli_connect_error())
{
    echo "<script>
        alert('Cannot Connect To Database');
             window.location.href = 'mycart.php';
         </script>";
    exit();

}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    if(isset($_POST['purchase']))
    {
        $query1="INSERT INTO `order_manage`(`fullname`, `email`, `phone`, `address`, `paymode`) VALUES ('$_POST[fullname]','$_POST[email]','$_POST[phone]','$_POST[address]','$_POST[paymode]')";
        if(mysqli_query($conn,$query1))
        {
            $order_id=mysqli_insert_id($conn);
            $query2="INSERT INTO order_user(`order_id`,`item_name`, `item_price`, `quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($conn,$query2);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isii",$order_id,$item_name,$item_price, $quantity);
                foreach($_SESSION['cart'] as $key => $values)
                {
                   
                    $item_name=$values['product_nm'];
                    $item_price=$values['product_price'];
                    $quantity=$values['quantity'];
                    mysqli_stmt_execute($stmt);

                    
                }
                unset($_SESSION['cart']);
                echo "<script>
                         alert('Order Placed!...');
                         window.location.href = 'index.php';
                     </script>";
            }
            else{
                    echo "<script>
                         alert('SQL Query Prepared Error');
                         window.location.href = 'mycart.php';
                     </script>";
            }
        }
        else{
            echo "<script>
                alert('SQL Error');
                    window.location.href = 'mycart.php';
                </script>";
        }
    }
}  

?>
    
    
    
<!-- //     <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>purchase</title>
// </head>
// <body>

    
// </body>
// </html> -->