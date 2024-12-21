<?php
include 'connect.php';

$Id = $_POST['Id'];
$sql = "SELECT * FROM service_detail WHERE Id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $Id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$stmt->close();
$con->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Record</title>
</head>
<body>
    <form class="form2" method="post" action="store_data.php">
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
            <input class="input2" name="email" type="email" id="email" value="<?php echo $row['email']; ?>" required="" readonly>
            <span>Email</span>
        </label>
        <label class="l2" for="phone">
            <input class="input2" name="phone" type="text" id="phone" value="<?php echo $row['phone']; ?>" required="">
            <span>Phone</span>
        </label>
        <div class="b1">
            <div class="it1">Select Service:</div>
            <label class="l2" for="service">
                <select class="input2" name="service" id="service" style="color: rgba(255, 255, 255, 0.5); position: relative; font-size: 0.9rem; cursor: pointer; padding: 15px;">
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
            <input class="input2" name="password" type="password" id="password" value="<?php echo $row['password']; ?>" required="" readonly>
</label>
</form>
</body>
</html>