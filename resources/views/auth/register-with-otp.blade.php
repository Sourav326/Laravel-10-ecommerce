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
                        <h3>REGISTER</h3>
                        <div class="form-group mt-3">
                            <label for="exampleFormControlTextarea1">Full Name <span class="star-r">*</span></label>
                            <input type="text" class="form-control" name="name" value="{{$user->name}}" required>
                        </div>


                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Email <span class="star-r">*</span></label>
                            <input type="email" class="form-control" name="email" value="{{$user->email}}" required disabled>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">OTP <span class="star-r">*</span></label>
                            <input type="number" name="otp" class="form-control" autofocus required>
                            <div class="otpresendBx">
                                <p class="mb-0 resendCountDown">Resend OTP in <span id="otpCountDown">10: 00</span>s</p>
                                <a href="{{route('user.sendOtp',$user->id)}}" class="resendOTP" id="resendOTP" type="button">Resend OTP</a>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <div class="woocommerce-privacy-policy-text">
                            <p>Your personal data will be used to support your experience throughout this website, to manage
                                access to your account, and for other purposes described in our <a href="#!"
                                    class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.</p>
                        </div>


                        <div class="fixCartButtonpp">
                            <button type="submit" class="loginSubmitBtn ">Register</button>
                        </div>
                    <form>
                </div>

            </div>
            <div class="col-md-5">
                <div class="login-text description-box text-center">
                    <h3>LOGIN</h3>
                    <p>Login here by filling you're username and password or use your favorite social network account to
                        enter to the site. Site login will simplify the purchase process and allows you to manage your
                        personal account.</p>

                    <div class="searchInput position-relative justify-content-center w-100">
                        <a href="{{ route('login') }}">
                            <button type="button" class="btn signInBtn write-review addreviewBtn">Login</button>
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