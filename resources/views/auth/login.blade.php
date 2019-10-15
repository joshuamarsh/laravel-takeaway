@extends('master')

@section('title', 'Login')

@section('content')
    <div class="main-content">
        <div class="login">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                    <h1>Login</h1>
                    <label for="email">EMAIL</label>
                    <input id="email" type="email" name="email" required autocomplete="email" autofocus>
                    <label for="password">PASSWORD</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password">
                    <div>
                        <label for="remember">Remember Me</label>
                        <input type="checkbox" name="remember" id="remember">
                    </div>
                    <button>
                        SIGN IN
                    </button>
            </form>
        </div>
    </div>
@endsection
