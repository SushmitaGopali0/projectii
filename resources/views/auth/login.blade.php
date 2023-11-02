<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('cssfile/form.css') }}">
    <title>Form</title>
    <style>

        .back {
            font-weight: 900;
            font-style: normal;
            color: black;
            background-color: cornsilk;
            width: 100px;
            height: 50px;
            margin-left: 90px;
            border-radius: 30%;

        }
    </style>
</head>

<body>
<div class="hero">
    <button class="back" onclick="history.back();">Back</button>
    <div class="form-box">
        <div class="button-box">

            <div id="btn"> </div>
            <button type="button" class="toggle-btn" >Log In </button>

        </div>
                    <form id="login" class="inp-group"method="POST" action="{{ route('login') }}">
                        @csrf


                            <input id="email"  class="inp" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror



                            <input id="password" class="inp" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

<br><br>

                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}

<br><br>
                        <button type="submit"  class="sub" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

<br><br>
                        @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
