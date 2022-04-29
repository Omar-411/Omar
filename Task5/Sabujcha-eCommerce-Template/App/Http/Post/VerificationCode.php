<?php

include_once "../../Middlewares/RequestPost.php";
include_once "../../../vendor/autoload.php";
session_start();


use App\Database\Models\User;
use App\Http\Requests\Validation;


//Vlidation before insert data
$validation = new Validation;


$validation->setName('verification_code')->setValue($_POST['verification_code'])->required()->integer()->digits(5)->exists('users');



if (!empty($validation->getErrors())) {

    $_SESSION['errorsArray'] = $validation->getErrors();
    $_SESSION['oldData'] = $_POST;
    header('location:../../../signup.php');
    die;
}

$user = new User;
$user->setEmail($_SESSION['email'])->setVerification_code($_POST['verification_code']);


if($user->checkCode()->num_rows != 1 ){
    $_SESSION['errorsArray']['verification_code']['wrong'] = "Code Is Wrong";
    $_SESSION['oldData'] = $_POST;
    header('location:../../../verificationCode.php');
    die;

}
$user->setEmail_verified_at(date('Y-m-d H:i:s'));

    if ($user->VerifyUser()) {
        header('location:../../../login.php');
        die;
    } else {
        $_SESSION['errorsArray']['wentWrong']['error'] = "Somethong Went Wrong";
        $_SESSION['oldData'] = $_POST;
        header('location:../../../verificationCode.php');
        die;
    }


