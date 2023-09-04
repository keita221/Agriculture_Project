<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="login">
            <div class="card">
                <div class="titre">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="">
                            <label for="name" class="label">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="item-input" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="donner votre nom complet">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="label">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="item-input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="donner votre adresse email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="profile" class="label">{{ __('profile') }}</label>

                            <div class="">
                                <select id="name" type="text" class="item-input1" name="profile" value="{{ old('profile') }}" required autocomplete="profile" autofocus autofocus >
                                    <option placeholder="choissiez votre profile"></option>
                                    <option>Client</option>
                                    <option>Cultivateur</option>
                                </select>
                                @error('profile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="label">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="item-input" name="password" required autocomplete="new-password" autofocus placeholder="donner votre mot de passe">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="item-input" name="password_confirmation" required autocomplete="new-password" autofocus placeholder="confirmer votre mot de passe ">
                            </div>
                        </div><br>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('login') }}" class="btn1">Login</a>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
