<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="css/style-login.css">
        <img src="{{ asset('images/c1.jpg') }}" id="" alt="">
        <img src="{{ asset('images/c2.jpg') }}" id="" alt="">
        <img src="{{ asset('images/c3.jpg') }}" id="" alt="">
        <img src="{{ asset('images/c4.jpg') }}" id="" alt="">
        <img src="{{ asset('images/c5.jpg') }}" id="" alt="">
        <img src="{{ asset('images/c6.jpg') }}" id="" alt="">
        <img src="{{ asset('images/fb.png') }}" id="" alt="">
        <img src="{{ asset('images/gg.png') }}" id="" alt="">
        <img src="{{ asset('images/login.jpg') }}" id="" alt="">
        <img src="{{ asset('images/twitt.png') }}" id="" alt="">

    </head>

    <body>
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Login</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>

                <div class="social-icon">
                    <img src="asset/fb.png">
                    <img src="asset/twitt.png">
                    <img src="asset/gg.png">
                </div>
                <form id="login" class="input-group">
                    <input type="text" class="input-field" placeholder="Email"
                    required>
                    <input type="text" class="input-field" placeholder="Password"
                    required>
                    <input type="checkbox" class="check-box"><span>Remember me</span>
                    <a href="{{ url('/') }}">
                        <button type="" class="submit-btn">Login</button>
                    </a>

                </form>
                <form id="register" class="input-group">
                    <input type="text" class="input-field" placeholder="User Id"
                    required>
                    <input type="email" class="input-field" placeholder="email"
                    required>
                    <input type="text" class="input-field" placeholder="Password"
                    required>
                    <input type="checkbox" class="check-box"><span>I agree to the terms & condition</span>
                    <a href="{{ url('/') }}">
                        <button type="" class="submit-btn">Register</button>
                    </a>
                </form>
            </div>
        </div>

        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn");

            function register(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }
            function login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0px";
            }
        </script>
    </body>
</html>