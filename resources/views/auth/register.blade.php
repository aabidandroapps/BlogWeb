@include('include.header')
<body style="background-color: #999999;">
    
    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more" style="background-image: url('{{ url('assets') }}/images/bg-01.jpg');"></div>

            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                <form method="POST" action="{{ route('register') }}" class="login100-form validate-form" >
                   @csrf
                    <span class="login100-form-title p-b-59">
                        Sign Up
                    </span>

                    <div class="form-group row">
                            <label for="name" class="label-input100">{{ __('Name') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                                <span class="focus-input100"></span>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    <div class="form-group row">
                            <label for="email" class="label-input100">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
                                <span class="focus-input100"></span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    <div class="form-group row">
                            <label for="password" class="label-input100">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                <span class="focus-input100"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="label-input100">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                        </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" name="submit" class="login100-form-btn">
                                Sign Up
                            </button>
                        </div>

                        <a href="{{ route('login') }}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                            Sign in
                            <i class="fa fa-long-arrow-right m-l-5"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
<!--===============================================================================================-->
    <script src="{{ url('assets') }}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="{{ url('assets') }}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="{{ url('assets') }}/vendor/bootstrap/js/popper.js"></script>
    <script src="{{ url('assets') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="{{ url('assets') }}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="{{ url('assets') }}/vendor/daterangepicker/moment.min.js"></script>
    <script src="{{ url('assets') }}/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="{{ url('assets') }}/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="{{ url('assets') }}/js/main.js"></script>

</body>
</html> 