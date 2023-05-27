<div class="row gx-0 g-0">
    <div class="col-12 col-md-12 col-lg-8 bg-primary justify-content-center d-flex">
        <img src="src/assets/media/engineer.svg" width="66%">
    </div>
    <div class="col-12 col-md-12 col-lg pad-xy-20p mt-5 pt-3">
        <div class="row gx-0 g-0">
            <div class="col">
                <div class="title-1 text-center">Email Verification</div>
                <div class="pad-top-20p">
                    <div class="row gx-0 g-0 justify-content-center">
                        <div class="col-10">
                            <input type="number" id="email_otp" name="email_otp" placeholder="OTP" class="form-control text-input no-number-scroll" onkeydown="validateNumber(event)">
                        </div>
                    </div>
                    <div class="row gx-0 g-0 justify-content-center pad-top-20p">
                        <div class="col-auto">
                            <button class="button-1 button" onclick="verifyotp(email_otp.value)">Verify</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>



<script src="./src/assets/js/validate_number.js"></script>
<script src="src/assets/js/register.js"></script>


