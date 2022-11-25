<?php
session_start();
unset($_SESSION["donor_name"]);
unset($_SESSION["donor_id"]);
header("Location:../index.php");
?>