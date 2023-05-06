@extends('layouts/main')

@section('main')

<section>
    <div class="container">
        <div class="index-cont">
            <div class="title">
                <h1 class="welcome">Добро пожаловать!</h1>
                <p>Если вы на нашем сайте впервые,<br> то нажмите "Регистрация"!</p>
            </div>
            <div class="buttons">
                <h2><a class="btn" href="{{ route('user.registration') }}">Регистрация</a></h2>
                <h2><a class="btn" href="{{ route('user.login') }}">Аутентификация</a></h2>
            </div>
        </div>
    </div>
</section>

@endsection