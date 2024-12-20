<?php
// Database connection
 include("connect.php"); 
 ob_start();

 $errors = [];

if (isset($_POST['update'])) {
    $mail = $_POST['email'];
    $sql = "SELECT * FROM service_detail WHERE email='$mail'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
   
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/csform.css">

    <title>Contact Form</title>
</head>
<body>
   

<form class="form2" method="post" action="update.php">
             
        <p class="title2">Patel Electric Services</p>
        
        <div class="flex2">
            <label class="l2" for="first_name">
                <input class="input2" name="first_name" type="text" id="first_name" value="<?php echo $row['first_name']; ?>" required="">
                <span>Firstname</span>
            </label>

            <label class="l2" for="last_name">
                <input class="input2" name="last_name" type="text" id="last_name" value="<?php echo $row['last_name']; ?>" required="">

                <span>Lastname</span>
            </label>

        </div>
        <label class="l2" for="email">
            <input class="input2" name="email" type="email" id="email" value="<?php echo $row['email']; ?>"  disable='true'>
            <span>Email</span>
        </label>

        <label class="l2" for="phone">
            <input class="input2" name="phone" type="" id="phone" value="<?php echo $row['phone']; ?>" required pattern="^\d{10}$" title="Enter a valid 10-digit phone number without any letters." maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
            <span>Phone</span>
        </label>

        <div class="b1">
            <div class="it1">Select Service:</div>
        <label class="l2" for="service">
            <select  class="input2" name="service" id="service" style=" color: rgba(255, 255, 255, 0.5);position: relative;font-size: 0.9rem;cursor: pointer;padding:15px ;">
                    <option value="Blander" <?php if($row['service'] == 'Blander') echo 'selected'; ?>>Blander</option>
                    <option value="Mixer" <?php if($row['service'] == 'Mixer') echo 'selected'; ?>>Mixer</option>
                    <option value="Toster" <?php if($row['service'] == 'Toster') echo 'selected'; ?>>Toster</option>
                    <option value="Fan" <?php if($row['service'] == 'Fan') echo 'selected'; ?>>Fan</option>
                    <option value="Coolar" <?php if($row['service'] == 'Coolar') echo 'selected'; ?>>Coolar</option>
                    <option value="Soda Maker" <?php if($row['service'] == 'Soda Maker') echo 'selected'; ?>>Soda Maker</option>
                    <option value="Iron" <?php if($row['service'] == 'Iron') echo 'selected'; ?>>Iron</option>
            </select>
           </label>
        </div>


        <label class="l2" for="address">
            <input class="input2" name="address" type="text" id="address" value="<?php echo $row['address']; ?>" required="">
            <span>Address :</span>
        </label>

        <label class="l2" for="password">
            <input class="input2" name="password" type="password" id="password" value="<?php echo $row['password']; ?>" disable="true">
            <span>Password</span>
        </label>
                    
         
        <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
        <div class="fm">
            <button class="submit2" type="submit" name="dataupdate">Update</button>
        </div>
    </form>
        
</body>
</html>

<?php
 } else {
    echo "<script>
            alert('Not Correct Email found!.....');  
            window.location.href = 'csform.php';
    </script>";
}
$con->close();

}
if (isset($_POST['dataupdate'])) 
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $address = $_POST['address'];
    $user_id = $_POST['user_id'];
    include "connect.php";
    $ins = mysqli_query($con,"UPDATE `service_detail` SET `first_name`='$first_name',`last_name`='$last_name',`phone`='$phone',`service`='$service',`address`='$address' WHERE email='$email'");
    header("location:index.php");
    ob_clean();
}
?>