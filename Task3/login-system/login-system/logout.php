<?php
session_start();
include_once "middleware/guest.php";
unset($_SESSION['user']);
header('location:login.php');