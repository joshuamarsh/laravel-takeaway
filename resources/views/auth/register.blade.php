@extends('master')

@section('title', 'Login')

@section('content')
    <div class="main-content">
        <div class="login">
            <h1>Register</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <label for="name" ></label>
                <input id="name" type="text" name="name" placeholder="Name" required autocomplete="name" autofocus>
                <label for="email" ></label>
                <input id="email" type="email" name="email" placeholder="Email" required autocomplete="email">
                <label for="password"></label>
                <input type="password" name="password" placeholder="Password" required autocomplete="new-password">     
                <label for="password-confirm"></label>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">   
                <button type="submit">
                            Register
                </button>
            </form>
        </div>
    </div>
@endsection
