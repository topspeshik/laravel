@extends('layout')

@section('title')Войти @endsection


@section('main_content')
    <h1>Войти в аккаунт(Not working)</h1>

    @if($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="post" action="{{route('registration_check')}}">
        @csrf

        <div class="container">
            <p>Пожалуйста заполните форму, что бы войти в аккаунт.(на данный момент не реализовано)</p>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="email" name="email1" id="email1" placeholder="Enter Email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" name="password" id="password1" placeholder="Enter Password" required>

            <button type="submit" class="btn_btn-success">Login</button>
        </div>

        <div class="container signin">
            <p>Нету аккаунта? <a href="/registration">Register</a>.</p>
        </div>
    </form>
@endsection
