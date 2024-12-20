<?PHP
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact Form</title>
    <style>
        .font{
            font-size:20px;
        }
        .color{
            color:rgb(157, 255, 0);
            
        }
    </style>
</head>
<body>
<?php include("includes/header.php"); ?>

<main class="contect">
    <div class="con-container">
        <h3>CONTACT US</h3>
        <div class="simple"></div>
    </div>
    
    <div clas="form-container">
        <iframe class="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3711.70661847252!2d70.45902300998458!3d21.51920857067225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3958018e0f7d2701%3A0x4508d18c58c5e6c4!2sPatel%20Electric!5e0!3m2!1sen!2sin!4v1725381878585!5m2!1sen!2sin"
            width="94%" height="500px" style="border:3px solid orange; margin-left:40px; border-radius:20px 20px"
             allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"  >
        </iframe>        
        </div>        
<?PHP
    if(isset($_SESSION['user']))
    {
?>
    <div class="form-container">
        <div class="form1">
            <h1 class="color">⫺ Patel Electric Shop 💡 </h1><br> 
            <div class="font">
             <h3><i class="fa-solid fa-location-dot color"></i>  Location :</h3>&nbsp&nbsp&nbsp&nbsp Azad chowk <br>&nbsp&nbsp&nbsp Junagadh ,362001
             <h3><br> <i class="fa-solid fa-phone-volume color"></i> Mobile :</h3>&nbsp&nbsp&nbsp +91 7878445224
             <h3><br> <i class="fa-solid fa-envelope color"></i> Email :</h3>&nbsp&nbsp&nbsp shreejimarketing7878@gmail.com

            </div>
            
            
        </div>
        <form class="form" method="post" action="">
            <div class="form-group">
                <label for="name">Enter Your Name :</label>
                <input type="text" name="name" id="name" autocomplete="on" placeholder="Full Name..." required="">
            </div>
            <div class="form-group">
                <label for="phone">Enter your Phone No :</label>
                <input type="" id="phone" name="phone" required="" placeholder="Phone no..." autocomplete="off" pattern="^\d{10}$" title="Enter a valid 10-digit phone number without any letters." maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
            </div>
            <div class="form-group">
                <label for="email">Enter your Email :</label>
                <input type="text" id="email" name="email" required="" placeholder="Email..." autocomplete="on">
            </div>
            <div class="form-group">
                <label for="comments">How Can We Help You?</label>
                <textarea name="comments" placeholder="Message Type Here......." id="comments" rows="10" cols="50" required=""></textarea>
            </div>
            <input class="form-submit-btn" type="submit" value="Submit" id="submit" name="submit">
           
        </form>
    </div>
    
    <?php  include("includes/footer.php"); ?> 

    <a href="#" class="arrow" style="background-image: url('images/arrow1.png');"></a>


</main>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

       $sql = "INSERT INTO contact_detail(name, phone, email, comments) VALUES ('$name', '$phone', '$email', '$comments')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Record stored successfully'); window.location.href = 'index.php';</script>";

    } else {
        echo "<script>alert('Something Wrong! Error TO Store in Record..... " . $sql . "<br>" . $conn->error . "');window.location.href = 'contact.php'</script>";
    }


    $conn->close();
}
    }
else{

    echo "<script>
                    alert('Login! You have to Login first.');
                    window.location.href = 'Login.php'
                    </script>";
}
?>


</body>
</html>

