<div class="row gx-0 g-0">
    <div class="col-12 col-md-12 col-lg-8 bg-primary justify-content-center d-flex">
        <img src="src/assets/media/engineer.svg" width="66%">
    </div>
    <div class="col-12 col-md-12 col-lg pad-xy-20p mt-5 pt-3">
        <div class="row gx-0 g-0">
            <div class="col">
                <div class="title-1 text-center">Create an Account</div>
                <div class="pad-top-20p">
                    <div class="row gx-0 g-0 justify-content-center">
                        <div class="col-10">
                            <input type="text" id="user_firstname" name="user_firstname" placeholder="First Name" class="form-control text-input">
                        </div>
                    </div>
                    <div class="row gx-0 g-0 justify-content-center pad-top-20p">
                        <div class="col-10">
                            <input type="text" id="user_lastname" name="user_lastname" placeholder="Last Name" class="form-control text-input">
                        </div>
                    </div>
                    <div class="row gx-0 g-0 justify-content-center pad-top-20p">
                        <div class="col-10">
                            <input type="email" id="user_email" name="user_email" placeholder="Email" class="form-control text-input">
                        </div>
                    </div>
                    <div class="row gx-0 g-0 pad-top-20p justify-content-center">
                        <div class="col-10">
                            <input type="password" id="user_password" name="user_password" placeholder="Password" class="form-control text-input">
                        </div>
                    </div>
                    <div class="row gx-0 g-0 pad-top-20p justify-content-center">
                        <div class="col-10">
                            <div class="d-flex">
                                <input type="checkbox" id="user_chkpolicy" name="user_chkpolicy" class="form-check-input input-checkbox">
                                <div class="font-gotham margin-start-10p">
                                    I accept the terms of the offer of the 
                                    <a href="#" class="text-decoration-none text-primary">privacy policy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-0 g-0 justify-content-center pad-top-20p">
                        <div class="col-auto">
                            <div class="d-none" id="loadDiv">
                            <img class="mx-auto" src="src/assets/media/spinner-loading.gif" width="100%" height="60%">
                            </div>
                            <button class="button-1 button" id="btnRegister" onclick="register(user_firstname.value,user_lastname.value,user_email.value,user_password.value)">Register</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>

<script src="src/assets/js/register.js"></script>
