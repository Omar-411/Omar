<?php

$title = "Login";

include_once "layouts/header.php";
include_once "App/Http/Middlewares/Guest.php";
include_once "layouts/navbar.php";
include_once "layouts/breadcrumb.php";
?>
<div class="login-register-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab">
                            <h4> <?= $title ?> </h4>
                        </a>

                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="App/Http/Post/login.php" method="post">

                                        <!-- To Disply All  Errors -->
                                        <!-- <?= getAllErrors() ?> -->

                                        <!-- To Disply Another Errors -->
                                        <?= getError('wentWrong') ?>

                                        <div class="form-group">
                                            <label for="email">Username</label>
                                            <input type="email" name="email" value="<?= oldData('email') ?>">
                                            <?= getError('email') ?>

                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password">
                                            <?= getError('password') ?>

                                        </div>
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox" name="remember_me">
                                                <label>Remember me</label>
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                            <button type="submit"><span>Login</span></button>
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
include_once "layouts/footerScripts.php";
?>