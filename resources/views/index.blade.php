@extends('loyouts/main')

@section('main')

<section>
    <div class="container">
        <div class="index-cont">
            <div class="title">
                <h1>Добро пожаловать!</h1>
                <p>Если вы на нашем сайте впервые,<br> то нажмите "Регистрация"!</p>
            </div>
            <div class="buttons">
                <h2><a class="btn" href="{{ route('registration') }}">Регистрация</a></h2>
                <h2><a class="btn" href="{{ route('login') }}">Авторизация</a></h2>
            </div>
        </div>
    </div>
</section>

@endsection