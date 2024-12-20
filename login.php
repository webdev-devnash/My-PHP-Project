<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Login page</title>
</head>
<?php 
session_start();
include("connect.php");

if(isset($_POST['losubmit'])){
    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $Password = mysqli_real_escape_string($con, $_POST['Password']);

    $result = mysqli_query($con, "SELECT * FROM client_login WHERE Email='$Email' AND Password='$Password'") or die("Select Error");
    $row = mysqli_fetch_assoc($result);

    if($row){
        $_SESSION['Email'] = $row['Email'];
        $_SESSION['Firstname'] = $row['Firstname'];
        $_SESSION['Lastname'] = $row['Lastname'];
        $_SESSION['Password'] = $row['Password'];
        // $_SESSION['Cnfpassword'] = $row['Cnfpassword'];
        $_SESSION['Id'] = $row['Id'];
        $_SESSION['user']=$row['Email'];
        echo "<script>
        alert('Your Login Successfully');
        window.location.href = 'index.php';
      </script>";
        // header("Location: index.php");
    } else {
        
        echo "<script>
        alert('Something wrong! Please Enter Correct Email and Password ');
        window.location.href = 'login.php';
           </script>";
        // echo "<a href='login.php'><button class='readbtn'>Go Back</button></a>";
    }
} else {

?>


<body class="login">
    <form class="form1" method="post" action="">
        <span class="icon-close">
            <ion-icon name="close-outline"></ion-icon>
        </span>
        <p class="title1">Login</p>
        <label class="l1">
            <input class="input1" type="email" name="Email" id="email" autocomplete="on" placeholder="" required="">
            <span>Email</span>
            <span class="icon1">
                <ion-icon name="mail-outline"></ion-icon>
            </span>
        </label>
        <label class="l1">
            <input class="input1" type="password" name="Password" id="password" autocomplete="on" placeholder="" required="">
            <span>Password</span>
            <span class="icon1">
                <ion-icon name="lock-closed-outline"></ion-icon>
            </span>
        </label>
        <input class="submit1" type="submit" value="Submit" name="losubmit">
        <p class="signin">Create an account? <strong><a href="register.php">Register</a></strong></p>
    </form>
</body>
</html>

<?php 
}
?>




  <!-- <script>
    const wrapper = document.querySelector('.wrapper');
    const loginLink = document.querySelector('.login-link');
    const registerLink = document.querySelector('.register-link');
    const btnPopup = document.querySelector('.btnlogin-popup');
    const iconClose = document.querySelector('.icon-close');
    registerLink.addEventListener('click', () => {
      wrapper.classList.add('active');
    });

    loginLink.addEventListener('click', () => {
      wrapper.classList.remove('active');
    });

    btnPopup.addEventListener('click', () => {
      wrapper.classList.add('active-popup');
    });
    iconClose.addEventListener('click', () => {
      wrapper.classList.remove('active-popup');
    });
  </script> -->
    
    
    

</body>
</html>