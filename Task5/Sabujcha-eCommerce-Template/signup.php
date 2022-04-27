<?php


$title = "Signup";
include_once "layouts/header.php";
include_once "layouts/navbar.php";
include_once "layouts/breadcrumb.php";
?>
<div class="login-register-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        </a>
                        <a class="active" data-toggle="tab" href="#lg2">
                            <h4> <?= $title ?> </h4>
                        </a>
                    </div>
                    <div class="tab-content">

                        <div id="lg2" class="tab-pane active ">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="App/Http/Post/Signup.php" method="post">

                                        <div class="form-group  mb-0 mb-0">
                                            <label for="first-name">First Name</label>
                                            <input type="text" name="first_name">
                                        </div>

                                        <div class="form-group  mb-0  mb-0">
                                            <label for="last-name">Last Name</label>
                                            <input type="text" name="last_name">
                                        </div>

                                        <div class="form-group  mb-0">
                                            <label for="email">Email</label>
                                            <input type="email" name="email">
                                        </div>

                                        <div class="form-group  mb-0">
                                            <label for="phone">Phone Number</label>
                                            <input type="number" name="phone">
                                        </div>

                                        <div class="form-group  mb-0">
                                            <label for="password">Password</label>
                                            <input type="password" name="password">

                                        </div>

                                        <div class="form-group  mb-0">
                                            <label for="password-confirm">Password Confirmation</label>
                                            <input type="password" name="password-confirm">
                                        </div>

                                        <div class="form-group  mb-0">
                                            <label for="gender">Gender</label>
                                            <select name="gender" class="form-control" id="">
                                                <option value="m">Male</option>
                                                <option value="f">Female</option>
                                            </select>
                                        </div>
                                        <div class="button-box mt-5">
                                            <button type="submit"><span><?= $title ?></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once "layouts/footer.php";
include_once "layouts/footer-scripts.php";
?>