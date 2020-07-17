@include('include.header')
<body style="background-color: #999999;">
    
    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more" style="background-image: url('{{ url('assets') }}/images/bg-01.jpg');"></div>

            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <span class="login100-form-title p-b-59">
                        Sign Up
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <span class="label-input100">Name</span>
                        <input class="input100" type="text" name="name" placeholder="Name...">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="email" placeholder="Email addess...">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
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