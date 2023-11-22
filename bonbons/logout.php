<?php
//include('entete.php');

session_start();
unset($_SESSION['admin']);
unset($_SESSION['autorisation']);
session_destroy();
header("location:admin.php");
?>
