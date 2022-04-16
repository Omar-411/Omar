<?php
$title = "Profile";



include_once "layouts/header.php";
include_once "layouts/navbar.php";
include_once "middleware/guest.php";



?>


<div class="container">
    <div class="row mt-3 ">
    <div class="col-12 text-center">
                    <?= $_SESSION['success'] ?? "" ?>
                </div>
        <div class="col-4 px-3 py-3  text-white offset-4 bg-dark  rounded-top ">
            <form action="post/profile.php" method="POST">
                <h3 class="text-center mb-4 "><?= $title ?></h3>
               
                <div class="form-group">

                    <label for="name">Edit Your Name</label>
                    <input type="text" name="name" value="<?= ucfirst($_SESSION['user']['name'] ?? "") ?>" class="text form-control text-center mb-3">
                    <?= $_SESSION['errors']['name-required'] ?? "" ?>
                </div>

                <div class="form-group">

                    <label for="email">Edit Your Email</label>
                    <input type="text" name="email" value="<?= $_SESSION['user']['email'] ?? "" ?>" class="text form-control text-center  mb-3 ">
                    <?= $_SESSION['errors']['email-required'] ?? "" ?>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="m" <?= $_SESSION['user']['gender'] == 'm' ? 'checked' : '' ?>>
                            Male
                        </label>
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="f" <?= $_SESSION['user']['gender'] == 'f' ? 'checked' : '' ?>>
                            Female
                        </label>
                    </div>
                    <?= $_SESSION['errors']['gender-required'] ?? "" ?>
                </div>

                <button class="btn btn-outline-light mt-3 form-control">Update <?= $title ?></button>
            </form>

        </div>

    </div>
</div>


<?php

include_once "layouts/footer.php";
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>