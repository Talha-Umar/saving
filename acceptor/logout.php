<?php
session_start();
unset($_SESSION["acceptor_name"]);
unset($_SESSION["acceptor_id"]);
header("Location:../index.php");
?>