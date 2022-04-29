<?php
session_start();
include_once "App/Http/Middlewares/Auth.php";
unset($_SESSION['user']);
setcookie('user',"",time()-1,'/');
header('location:login.php');