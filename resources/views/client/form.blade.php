<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('cssfile/form.css') }}">
    <title>Form</title>
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">

                <div id="btn"> </div>
                <button type="button" class="toggle-btn" onclick="login()">User</button>
                {{-- <button type="button" class="toggle-btn" onclick="register()">Designer</button> --}}

            </div>


            {{-- User Login Form  --}}
            <form id="login" action="{{ route ('register')}}" class="inp-group" method="POST">
                @csrf
                <input type="text" class="inp  @error('name') is-invalid @enderror"  name="name" placeholder="Username" value="{{ old('name') }}">
                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                <input type="email" class="inp @error('email') is-invalid @enderror" name="email" id="uemail" placeholder="Email Id" value="{{ old('email') }}">
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                <input type="text" class="inp @error('address') is-invalid @enderror" name="address" placeholder="Address" value="{{ old('address') }}">
                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                <input type="radio" id="html" name="role_id" value="3">
                <label for="">User</label><br>
                <input type="radio" id="css" name="role_id" value="2">
                <label for="">Designer</label><br>
                <input type="password" class="inp @error('password') is-invalid @enderror" name="password" placeholder="Enter your password!!">
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <input type="password" class="inp" name="password_confirmation" placeholder="Confirm your password!!">
                <div class="mt-3">
                    <p class="mb-0 text-muted">Don't have an account?</p>
                    <a href="Usersignup">
                        <div class="btn btn-primary">Sign up<span class="fas fa-chevron-right ms-1"></span></div>
                    </a>
                </div>
                <button type="submit" name="submit" class="sub">Register</button>
            </form>
            {{-- End user login form --}}

        {{-- Designer login form --}}
            {{-- <form id="register" action="" class="inp-group" method="post">
                @csrf
                <input type="text" class="inp" name="dname" id="name" placeholder="Username">
                <input type="email" class="inp" name="demail" id="demail" placeholder="Email Id">
                <input type="text" class="inp" name="daddress" placeholder="Address">
                <input type="password" class="inp" name="dpass" id="pw" placeholder="Enter your password!!">
                <input type="password" class="inp" name="dcpass" id="confirmPw"
                    placeholder="Confirm your password!!">
                <div class="mt-3">
                    <p class="mb-0 text-muted">Don't have an account?</p>
                    <a href="Usersignup">
                        <div class="btn btn-primary">Sign in<span class="fas fa-chevron-right ms-1"></span></div>
                    </a>
                </div>
                <button type="submit" name="submit" class="sub">Register</button>
            </form> --}}
            {{-- End of designer form --}}

        </div>


    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
</body>

</html>
