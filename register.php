<?php
include 'dbcon.php';
if (isset($_POST['donor_reg'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "INSERT INTO donor (name, email, password)
VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "<script> alert('Registered Successfully!');</script>";
  echo "<script> window.location.href = 'login.php';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    
}
if (isset($_POST['acc_reg'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql = "INSERT INTO acceptor (name, email, password)
VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "<script> alert('Registered Successfully!');</script>";
  echo "<script> window.location.href = 'login.php';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 
}
 ?>
<html>
<head>
    <link rel="shortcut icon" href="images/download.png">
    <link rel="stylesheet" type="text/css" href="./css/register.css">
    <title> Register - SavingTheSouls </title>
</head>

<body>
    <div class="loginbox">
        <img src="./images/login.png" class="login">
        <h1> Register here </h1>
        <form action="register.php" method="POST">
            <p> Name</p>
            <input type="text" name="name" placeholder="Enter Name" autocomplete="off" required>
            <p> Email </p>
            <input type="email" name="email" placeholder="Enter Email" autocomplete="off" required>
            <p> Password </p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="donor_reg" value="Donor Register">
            <input type="submit" name="acc_reg" value="Acceptor Register">
            <a href="login.php"> Have account?</a>

        </form>
        <div class="res-list">
        </div>
    </div>

    
</body>

</html>