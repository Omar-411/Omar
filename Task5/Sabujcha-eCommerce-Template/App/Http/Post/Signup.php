<?php


include_once "../../Middlewares/RequestPost.php";
include_once "../../../vendor/autoload.php";
session_start();


use App\Database\Models\User;
use App\Mailer\VerificationCode;
use App\Http\Requests\Validation;

//Vlidation before insert data
$validation = new Validation;

$validation->setName('first_name')->setValue($_POST['first_name'])->required()->max(32);

$validation->setName('last_name')->setValue($_POST['last_name'])->required()->max(32);

$validation->setName('email')->setValue($_POST['email'])->required()->regEx('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/' , 'Your Email M')->max(64)->unique('users');

$validation->setName('password')->setValue($_POST['password'])->required()->regEx('//', "Minimum eight and maximum 20 characters, at least one uppercase letter, one lowercase letter, one number and one special character")
->confirmation($_POST['password_confirm']);

$validation->setName('phone')->setValue($_POST['phone'])->required()->regex('/^01[0125][0-9]{8}$/')->unique('users');

$validation->setName('password_confirm')->setValue($_POST['password_confirm'])->required()->confirmation($_POST['password']);

$validation->setName('gender')->setValue($_POST['gender'])->in(['f', 'm']);



if (!empty($validation->getErrors())) {

    $_SESSION['errorsArray'] = $validation->getErrors();
    $_SESSION['oldData'] = $_POST;
    header('location:../../../signup.php');
    die;
}

$verification_code = rand(10000, 99999);
$user = new User;
$user->setFirst_name($_POST['first_name'])->setLast_name($_POST['last_name'])
    ->setEmail($_POST['email'])->setPhone($_POST['phone'])
    ->setPassword(password_hash($_POST['password'], PASSWORD_BCRYPT))
    ->setGender($_POST['gender'])->setVerification_code($verification_code);


// If The user data inserted successfully to DB redirect him to verification code bage
if ($user->create()) {
    // mail($_POST['email'] , );
    // ecommerce.dashboard@gmail.com;

    $verification_code = new VerificationCode(
        $_POST['email'],
        "Verification Code",
        "<h3>Hello {$_POST['first_name']}<h3>
        <p>Your Verification Code Is :<strong>{$verification_code}</strong></p>
        <br>
        <p>Thank You</p>"
    );
    if ($verification_code->send()) {
        //Success
        $_SESSION['email'] = $_POST['email'];
        header('location:../../../verificationCode.php');
        die;
    } else {
        // Fail
        $_SESSION['errorsArray']['mail']['error'] = "Try Again Later ";
        header('location:../../../signup.php');
        die;
    }
} else {
    // Display This Message
    $_SESSION['errorsArray']['wentWrong']['error'] = "Somethong Went Wrong";
    header('location:../../../signup.php');
    die;
}
