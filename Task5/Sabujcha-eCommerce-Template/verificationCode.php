<?php

$title = "Verification Code";
include_once "layouts/header.php";
include_once "App/Http/Middlewares/guest.php";

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
                                    <form action="App/Http/Post/VerificationCode.php" method="post">    
                                    
                                    
                                    <!-- To Disply All  Errors -->
                                    <!-- <?= getAllErrors() ?> -->

                                            <!-- To Disply Another Errors -->
                                            <?= getError('wentWrong') ?>


                                            <!-- When mail didnt sent -->
                                            <?= getError('mail') ?>    
                                        <div class="form-group">
                                            <label for="verification_code"><?=$title?></label>
                                            <input type="number" name="verification_code">
                                            <?= getError('verification_code') ?>

                                        </div>
                                        <div class="button-box">
                                            <button type="submit"><span>Submit</span></button>
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
include_once "layouts/footerScripts.php";
?>