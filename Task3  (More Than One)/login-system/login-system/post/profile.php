<?php


session_start();
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    header('location:../errors/405.php');die;
}

$errors = [];
$succes = "";


if(empty($_POST['name'])){
    $errors['name-required'] = "<div class='font-weight-bold text-danger'>Name Is Required</div>";
}
if(empty($_POST['email'])){
    $errors['email-required'] = "<div class='font-weight-bold text-danger'>Email Is Required</div>";
}
if(empty($_POST['gender'])){
    $errors['gender-required'] = "<div class='font-weight-bold text-danger'>Gender Is Required</div>";
}


if(empty($errors)){
    $_SESSION['user']['name'] = $_POST['name'];
    $_SESSION['user']['email'] = $_POST['email'];
    $_SESSION['user']['gender'] = $_POST['gender'];
    $succes = "<div class='alert alert-success'>Data Updated Successfully</div>";
}
$_SESSION['errors'] = $errors;
$_SESSION['success'] = $succes;
header('location:../profile.php');

?>




<?php

include_once "layouts/footer.php";

?>