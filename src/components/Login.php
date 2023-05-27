<?php
session_start();

unset($_SESSION['email']);
unset($_SESSION['userid']);
unset($_SESSION['name']);

session_destroy();
?>
<div class="row gx-0 g-0">
    <div class="col-12 col-md-12 col-lg-8 bg-primary justify-content-center d-flex">
        <img src="src/assets/media/engineer.svg" width="66%">
    </div>
    <div class="col-12 col-md-12 col-lg pad-xy-20p mt-5 pt-3">
        <div class="row gx-0 g-0">
            <div class="col">
                <div class="title-1 text-center">Sign In to Your Account</div>
                <div class="pad-top-20p">
                    <div class="row gx-0 g-0 justify-content-center">
                        <div class="col-10">
                            <input type="email" id="email" name="email" placeholder="Email" class="form-control text-input">
                        </div>
                    </div>
                    <div class="row gx-0 g-0 pad-top-20p justify-content-center">
                        <div class="col-10">
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control text-input">
                        </div>
                    </div>
                    <div class="row gx-0 g-0 pad-top-20p">
                        <div class="col-11 text-end">
                            <a class="text-roboto text-primary text-decoration-none" href="">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="row gx-0 g-0 justify-content-center pad-top-20p">
                        <div class="col-auto">
                            <button class="button-1 button" onclick="login(email.value,password.value)">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
<div class="alert alert-success side-alert d-none" role="alert" id="sideAlert">
    Email address does not exist
</div>

<script src="src/assets/js/loginprocess.js"></script>


