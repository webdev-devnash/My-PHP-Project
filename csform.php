<?php
    session_start();
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
   
<?php
    if(!isset($_SESSION['user']))
    {
        echo "<script>
        alert('Login error! You have to Login first.');
        window.location.href = 'login.php';
        </script>";   
    }
?>
<form class="form2" method="post" action="ckeck.php">
             
        <p class="title2">Patel Electric Services</p>
        
        <div class="flex2">
        
            <label class="l2" for="first_name">
                <input class="input2" name="first_name" type="text" id="first_name" placeholder="" required="">
                <span>Firstname</span>
            </label>

            <label class="l2" for="last_name">
                <input class="input2" name="last_name" type="text" id="last_name" placeholder="" required="">

                <span>Lastname</span>
            </label>
        </div>

        <label class="l2" for="email">
            <input class="input2" name="email" type="email" id="email" placeholder="" required="">
            <span>Email</span>
        </label>

        <label class="l2" for="phone">
            <input class="input2" name="phone" type="" id="phone" placeholder="" required="" pattern="^\d{10}$" title="Enter a valid 10-digit phone number without any letters." maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
            <span>Phone</span>
        </label>

        <div class="b1">
            <div class="it1">Select Service:</div>
        <label class="l2" for="service">
            <select  class="input2" name="service" id="service" style=" color: rgba(255, 255, 255, 0.5);position: relative;font-size: 0.9rem;cursor: pointer;padding:15px ;">
                <option value="Blander">Blander</option>
                <option value="Mixer">Mixer</option>
                <option value="Toster">Toster</option>
                <option value="Fan">Fan</option>
                <option value="Coolar">Coolar</option>
                <option value="Soda Maker">Soda Maker</option>
                <option value="Iron">Iron</option>
            </select>
           </label>
        </div>


        <label class="l2" for="address">
            <input class="input2" name="address" type="text" id="address" placeholder="" required="">
            <span>Address :</span>
        </label>


        <label class="l2" for="password">
            <input class="input2" name="password" type="password" id="password" placeholder="" required="">
            <span>Password</span>
        </label>
                    
         
        <div class="fm">
        <button class="submit2" type="submit" name="submit">Submit</button>
        </div>
    
    </form>     
    
    <!-- <a href="ckech.php?id=69" -->
    <form class="form2" method="post" action="update.php">
        
        <label class="l2" for="email">
            <input class="input2" name="email" type="email" id="email" placeholder="" required="">
            <span>Email</span>
        </label>
        <button class="submit2" type="submit" name="update">Update</button>
    </form>
</body>
</html>
