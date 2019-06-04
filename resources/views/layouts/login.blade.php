<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/libraries/bootstrap4.3.1.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome/css/solid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <title>Telefonia 2</title>
</head>
<body>

    <div class="base d-flex">

        <section class="area-login d-flex flex-column justify-content-center align-items-center position-relative">

            <form class="f-login w-75" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Login">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha">
                </div>

                <div class="form-group ctn-remember text-right">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">Lembrar-me</label>
                </div>


                <button type="submit" class="btn btn-sm btn-block btn-success">Entrar</button>

                <div class="forgot-password ">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Esqueceu sua senha?
                        </a>
                    @endif
                </div>
            </form>

            <div class="rede-sociais w-100 position-absolute">
                <a href="https://www.facebook.com/twtelecom/" style="background-image: url(/imgs/geral/facebook.gif)">facebook</a>
                <a href="https://www.linkedin.com/company/t-w-solutions" style="background-image: url(/imgs/geral/linkedin.gif)">linkedin</a>
                <span>Copyright © Twsolutions 2019</span>
            </div>
        </section>
        <aside></aside>
    </div>

    <script src="{{ asset('js/libraries/jquery.min.js') }}"></script>
    <script src="{{ asset('js/libraries/popper.min.js') }}"></script>
    <script src="{{ asset('js/libraries/bootstrap4.3.1.min.js') }}"></script>
    <script src="{{ asset('fonts/fontawesome/js/fontawesome.min.js') }}"></script> <!-- font -->
    <script src="{{ asset('fonts/fontawesome/js/solid.min.js') }}"></script> <!-- font -->
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
