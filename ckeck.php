<?php
session_start();
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and bind
    $stmt = $con->prepare("SELECT * FROM client_login WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);

    // Execute the statement
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Login successful
        $_SESSION['email'] = $email;
        echo "<script>
                alert('Message Receive successfully!');
                window.location.href = 'index.php';
                    </script>";
        // header("Location: index.php");

       
         
        include("connect.php");
        if(isset($_POST['submit'])){
               $first_name = $_POST['first_name'];
               $last_name = $_POST['last_name'];
               $email = $_POST['email'];
               $phone = $_POST['phone'];
               $service = $_POST['service'];
               $address = $_POST['address'];
               $password = $_POST['password'];


           mysqli_query($con,"INSERT INTO service_detail (first_name, last_name, email, phone, service, address, password) VALUES('$first_name','$last_name','$email','$phone','$service','$address','$password')") or die("Error Occured");

          
        
        } 

    } 
    else{
        // Login failed
        echo "Invalid email or password.";
    }

     $stmt->close();
    $con->close();
    }

?>

