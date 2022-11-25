<?php 
session_start();
include 'dbcon.php';
if (isset($_POST['donor_login'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql ="SELECT * FROM donor WHERE email='$email' and BINARY password ='$password'";
$result = mysqli_query($conn, $sql);
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["donor_name"] = $row['name'];
$_SESSION["donor_id"]=$row['id'];
} else {
     echo "<script> alert('Invalid Email or Password!');</script>";
}
}
if(isset($_SESSION["donor_id"])){
     header("Location:donor/donor.php");
    
}
if (isset($_POST['acc_login'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql ="SELECT * FROM acceptor WHERE email='$email' and BINARY password ='$password'";
$result = mysqli_query($conn, $sql);
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["acceptor_name"] = $row['name'];
$_SESSION["acceptor_id"]=$row['id'];
} else {
     echo "<script> alert('Invalid Email or Password!');</script>";
}
}
if(isset($_SESSION["acceptor_id"])){
     header("Location:acceptor/acceptor.php");
    
}
?>
<html>
<head>
    <link rel="shortcut icon" href="images/download.png">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <title>Login - SavingTheSouls</title>
</head>

<body>
    <div class="loginbox">
        <img src="./images/login.png" class="login">
        <h1> login here </h1>
        <form action="login.php" method="POST">
            <p>Email</p>
            <input type="email" name="email" placeholder="Enter Email Address" autocomplete="off" required>
            <p> Password </p>
            <input type="password" name="password" placeholder="Enter Password" autocomplete="off" required>
            <input type="submit" name="donor_login" value="Donor">
            <input type="submit" name="acc_login" value="Acceptor">
           
            <a href="register.php"> Don't have account?</a>
        </form>

        <div class="res-list">
        </div>
    </div>
</body>

</html>