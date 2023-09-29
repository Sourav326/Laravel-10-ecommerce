@extends('layouts.app')
@section('content')

<div class="register-box pb-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="register-form description-box">
                    

                    <form method="post" action="{{route('user.verifyotp')}}">
                        @csrf
                        <h3>LOGIN</h3>
                        <div class="form-group mt-3">
                            <label for="exampleFormControlTextarea1">Email Id <span class="star-r">*</span></label>
                            <input type="email" value="{{$user->email}}" name="email" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">OTP </label>
                            <input type="number" name="otp" class="form-control" autofocus required>
                            <div class="otpresendBx">
                                <p class="mb-0 resendCountDown">Resend OTP in <span id="otpCountDown">10: 00</span>s</p>
                                <a href="{{route('user.sendOtp',$user->id)}}" class="resendOTP" id="resendOTP" type="button">Resend OTP</a>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{$user->id}}">

                        <div class="fixCartButtonpp">
                            <button type="submit" class="loginSubmitBtn ">Login</button>
                        </div>
                    <form>
                    <p class="login-form-footer mt-3">
                        <!-- <a href="#" class="woocommerce-LostPassword lost_password">Lost your password?</a> -->
                        <!-- <label class="">
                               <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" value="forever" title="Remember me" aria-label="Remember me">
                               <span>Remember me</span>
                            </label> -->
                    </p>
                    <p class="title wd-login-divider "><span>Or login with</span></p>

                    <div class="wd-social-login">
                        <a href="" class="login-fb-link btn"> <i class="bi bi-facebook"></i> Facebook</a>
                        <a href="" class="login-goo-link btn"><i class="bi bi-google"></i> Google</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="login-text description-box text-center">
                    <h3>REGISTER</h3>
                    <p>Registering for this site allows you to access your order status and history. Just fill in the
                        fields below, and we’ll get a new account set up for you in no time. We will only ask you for
                        information necessary to make the purchase process faster and easier.</p>
                    <div class="searchInput position-relative justify-content-center w-100">
                        <a href="{{ route('register') }}">
                            <button type="button" class="btn signInBtn write-review addreviewBtn">Register</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>

<script>
    const resendOtpEl = document.getElementById('resendOTP');
    const resendCountDown = document.querySelector('.resendCountDown');
    resendOtpEl.style.display = "none";
    const startingMinutes = 10;
    let time = startingMinutes * 60;
    const countdownEl = document.getElementById('otpCountDown');
    setInterval(updateCountdown, 1000);
    function updateCountdown() {
        const minutes = Math.floor(time / 60);
        let seconds = time % 60;
        seconds = seconds < 10 ? '0' + seconds : seconds;
        countdownEl.innerHTML = `${minutes}: ${seconds}`;
        time--;
        if(minutes == 0 && seconds == 0){
            resendCountDown.style.display = "none";
            resendOtpEl.style.display = "block";

        }
    }
</script>

@endsection