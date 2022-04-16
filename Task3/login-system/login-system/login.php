<?php
$title = "Login";
include_once "layouts/header.php";
include_once "layouts/navbar.php";
include_once "middleware/auth.php";


$users = [
    [
        'id' => 1,
        'name' => 'esraa',
        'email' => 'esraa@gmail.com',
        'password' => 123456,
        'gender' => 'f',
        'image' => '1.jpg'
    ],
    [
        'id' => 2,
        'name' => 'fatma',
        'email' => 'fatma@gmail.com',
        'password' => 123456,
        'gender' => 'f',
        'image' => '2.jpg'
    ],
    [
        'id' => 2,
        'name' => 'ahmed',
        'email' => 'ahmed@gmail.com',
        'password' => 123456,
        'gender' => 'm',
        'image' => '3.jpg'
    ],
    [
        'id' => 2,
        'name' => 'omar',
        'email' => 'omaraymn411@gmail.com',
        'password' => '43494955_oG',
        'gender' => 'm',
        'image' => '3.jpg'
    ]
];

function login(string $email ,string $password ): bool{
    if($email == $_POST['email']  && $password == $_POST['password'] ){
       return true;
    }else{
        return false;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validation
    $errors = [];
    if (empty($_POST['email'])) {
        $errors['email-required'] = "<div class='text-danger font-weight-bold '> Email Is Required </div>";
    }
    if (empty($_POST['password'])) {
        $errors['password-required'] = "<div class='text-danger font-weight-bold my-2'> Password Is Required </div>";
    }
    if (empty($errors)) {
        foreach ($users as $user) {
            if (login($user['email'],$user['password'],)) {
                $_SESSION['user'] = $user;
                header('location:home.php');
                die;

            }
        }
        $errors['email-password-wrong'] = "<div class='text-danger font-weight-bold my-2'> Wrong Email Or Password </div>";
    }
}







?>

<div class="container">
    <div class="row">

        <div class="col-4 px-3 py-3 my-5 text-white offset-4 bg-dark text-center rounded-top">
            <form method="POST">
                <h3 class="text-center mb-4 "><?= $title ?> please.. </h3>
                <label for="email">Enter Your Email</label>
                <input type="text" name="email" value="<?= $_POST['email'] ?? "" ?>" class="text form-control ">
                <?= $errors['email-required'] ?? "" ?>

                <label for="password" class="mt-3">Your Password</label>
                <input type="password" name="password" value="<?= $_POST['password'] ?? "" ?>" class="text form-control ">
                <?= $errors['password-required'] ?? "" ?>
                <?= $errors['email-password-wrong'] ?? "" ?>


                <button type="Submit" class="btn btn-outline-light mt-3 form"><?= $title ?></button>
            </form>

        </div>
    </div>
</div>

<?php
include_once "layouts/Footer.php";

?>