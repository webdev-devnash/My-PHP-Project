<?php

session_start();
// session_destroy();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['add_to_cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'product_nm');
            if(in_array($_POST['product_nm'],$myitems))
            {
                echo "<script>
                alert('Item Already Added!');
                window.location.href = 'index.php';
                 </script>"; 
            }
            else{
                if(isset($_SESSION['user']))
                {
                    $count=count($_SESSION['cart']);
                    $_SESSION['cart'][$count]=array('product_id'=>$_POST['product_id'],'product_nm'=>$_POST['product_nm'],'product_disc'=>$_POST['product_disc'],'product_price'=>$_POST['product_price'],'product_mrp'=>$_POST['product_mrp'],'quantity'=>1);
                    echo "<script>
                    alert('Item Added Successfully !');
                    window.location.href = 'index.php';
                    </script>";
                }
                else
                {
                    echo "<script>
                    alert('Login error! You have to Login first.');
                    window.location.href = 'login.php';
                    </script>";
                }
            }
        }
        else{
                $_SESSION['cart'][0]=array('product_id'=>$_POST['product_id'],'product_nm'=>$_POST['product_nm'],'product_disc'=>$_POST['product_disc'],'product_price'=>$_POST['product_price'],'product_mrp'=>$_POST['product_mrp'],'quantity'=>1);
                echo "<script>
                alert('Item Added Successfully !');
                window.location.href = 'index.php';
                 </script>";
        }
    }
    if(isset($_POST['remove_item']))
    {
        foreach($_SESSION['cart'] as $key=>$value)
        {
            if($value['product_nm']==$_POST['product_nm'])
            {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart']=array_values($_SESSION['cart']);
                    echo "<script>alert('Item Removed');
                     window.location.href = 'mycart.php';
                     </script>";

            }
        }
    }
    if(isset($_POST['mod_que']))
    {
        foreach($_SESSION['cart'] as $key=>$value)
        {
            if($value['product_nm']==$_POST['product_nm'])
            {
                $_SESSION['cart'][$key]['quantity']=$_POST['mod_que'];
                   
                   echo "<script>
                     window.location.href = 'mycart.php';
                     </script>";

            }
        }
    }
}

?>