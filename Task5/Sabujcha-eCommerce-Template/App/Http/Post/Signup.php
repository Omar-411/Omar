<?php


include_once "../../Middlewares/RequestPost.php";
include_once "../../../vendor/autoload.php";


use App\Http\Requests\Validation;

$validation = new Validation;
$validation ->setName('first_name')-> setValue($_POST['first_name'])->required()->max(32);
$validation ->setName('last_name')-> setValue($_POST['last_name'])->required()->max(32);

$validation ->setName('email')-> setValue($_POST['email'])->required()->regEx('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/')->max(64)->unique();
$validation ->setName('phone')-> setValue($_POST['phone'])->required()->regEx('//')->unique();

$validation ->setName('password')-> setValue($_POST['password'])->required();


$validation ->setName('password-confirm')-> setValue($_POST['password-confirm'])->required() ->confirmation($_POST['password']);


$validation ->setName('gender')-> setValue($_POST['gender'])->in(['f','m']);

print_r($validation ->getErrors());



if (!empty($validation->getErrors())) {

    $_SESSION['errorsArray'] = $validation->getErrors();

    $_SESSION['oldData'] = $_POST;
    header('location:../../../signup.php');
    die;
}
