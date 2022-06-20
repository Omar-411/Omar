<?php

use App\Database\Models\User;
use App\Http\Requests\Validation;




include_once "../Middlewares/RequestPost.php";
include_once "../../../vendor/autoload.php";
session_start();


define('NOT_ACTIVE',0);

$validation = new Validation;

$validation->setName('email')->setValue($_POST['email'])->required()->regEx('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/')->max(64)->exists('users');

$validation->setName('password')->setValue($_POST['password'])->required();

if (!empty($validation->getErrors())) {
    $_SESSION['errorsArray'] = $validation->getErrors();
    $_SESSION['oldData'] = $_POST;
    header('location:../../../login.php');
    die;
}



$userRows = new User;
$rowsNum = $userRows->setEmail($_SESSION['email'])->getUser();


if ($rowsNum->num_rows != 1) {
    $_SESSION['errorsArray']['email']['wrong'] = "Wrong Email Or Password";
    $_SESSION['oldData'] = $_POST;
    header('location:../../../login.php');
    die;
}

$user = $rowsNum->fetch_object(User::class);

// print_r($user);die;


// Check if password correct or not
if(!password_verify($_POST['password'],$user->getPassword())){

    $_SESSION['errorsArray']['password']['wrong'] = "Wrong Email Or Password";
    $_SESSION['oldData'] = $_POST;
    header('location:../../../login.php');

    die;
}

//Chef if His account is blocked
if($user->getStatus() == NOT_ACTIVE){
    $_SESSION['errorsArray']['wentWrong']['block'] = "Sorry Your Account Has been Blocked!";
    $_SESSION['oldData'] = $_POST;
    header('location:../../../login.php');
    die;
}

// Check Email verified or not
if(is_null($user->getEmail_verified_at())){
    $_SESSION['email'] = $_POST['email'];
    header('location:../../../verificationCode.php');
    die;
}


if(isset($_POST['remember_me'])){
    $rememberToken = uniqid(more_entropy:true);
    $user ->setRememberToken($rememberToken);
    setcookie('user',$rememberToken, time() + (365*24*60*60) ,'/');
}
$_SESSION['user'] = $user->safeData();
header('location:../../../index.php');





