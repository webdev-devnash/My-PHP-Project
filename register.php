<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">

    <title>Register page</title>
</head>
<body class="register">

        <?php 
         
         include("connect.php");
         if(isset($_POST['resubmit'])){
            $Firstname = $_POST['Firstname'];
            $Lastname = $_POST['Lastname'];
            $Email = $_POST['Email'];
            $Password = $_POST['Password'];
            $Cnfpassword = $_POST['Cnfpassword'];


         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM client_login WHERE Email='$Email'");

         if(mysqli_num_rows($verify_query) !=0 ){

        echo "<script>
                alert('This email is Already used, Try another One Please..!');
                window.location.href = 'register.php';
                 </script>";                
         }
         else{

            mysqli_query($con,"INSERT INTO client_login(Firstname,Lastname,Email,Password,Cnfpassword) VALUES('$Firstname','$Lastname','$Email','$Password','$Cnfpassword')") or die("Error Occured");

            echo "<script>
        alert('Registration successfully!');
        window.location.href = 'login.php';
           </script>";
        // echo "<a href='login.php'><button class='readbtn'>Go Back</button></a>";
            
         

         }

         }else{
         
        ?>



<form class="form2" method="post" action="">

        <span class="icon-close">
        <ion-icon name="close-outline"></ion-icon>
        </span>
        
        <p class="title2">Create Account</p>

        
        <!-- <p class="message">Signup now and get full access to our app. </p> -->
        <div class="flex2">
            <label class="l2">
                <input class="input2" name="Firstname" type="text" id="fName" placeholder="" required="">
                <span>Firstname</span>
            </label>

            <label class="l2">
                <input class="input2" name="Lastname" type="text" id="lName" placeholder="" required="">
                <span>Lastname</span>
            </label>
        </div>

        <label class="l2">
            <input class="input2" name="Email" type="email" id="email" placeholder="" required="">
            <span>Email</span>
        </label>

        <label class="l2">
            <input class="input2" name="Password" type="password" id="password" placeholder="" required="">
            <span>Password</span>
        </label>
        <label class="l2">
            <input class="input2" name="Cnfpassword" type="password" id="Cpassword" placeholder="" required="" >
            <span>Confirm password</span>
        </label>
        <input type="submit" class="submit2" value="Submit" name="resubmit">
        <!-- <button class="" >Submit</button> -->
        <p class="signin2">Already have an acount ? <strong><a href="login.php" id="signInButton">Login</a></strong> </p>
    </form>
    <!-- <script src="lrscript.js"></script> -->

    <?php } ?>

    
</body>
</html>