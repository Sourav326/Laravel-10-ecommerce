@extends('layouts.app')
@section('content')


<div class="register-box pb-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="register-form description-box">
                   
                    <form method="post" action="{{route('user.register')}}">
                        @csrf
                        <h3>REGISTER</h3>
                        <div class="form-group mt-3">
                            <label for="exampleFormControlTextarea1">Full Name <span class="star-r">*</span></label>
                            <input type="text" class="form-control" name="name" autofocus required>
                        </div>


                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Email <span class="star-r">*</span></label>
                            <input type="email" class="form-control" name="email" required>
                        </div>

                        <!-- <div class="form-group">
                            <label for="exampleFormControlTextarea1">OTP <span class="star-r">*</span></label>
                            <input type="text" class="form-control">
                            <div class="otpresendBx">
                                <p class="mb-0">Resend OTP in <span>23</span>s</p>
                                <button class="resendOTP" type="button">Resend OTP</button>
                            </div>
                        </div> -->
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




@endsection