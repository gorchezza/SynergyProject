@extends('loyouts/main')

@section('main')

    <section>
        <div class="container">
            <div class="login-cont">
                <div class="title">
                    <h1>Аутентификация</h1>
                    @if ($errors->any())
                    <div class="errors">
                        <ul calss="errors-ul">
                            @foreach($errors->all() as $error)
                            <li class="error">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <div class="form-container">
                    <form name="login" method="post" action="{{ route('user.loginPost') }}">
                        @csrf
                        <div class="inputs">
                            <div class="cont-inp">
                                <input class="inp" type="email" name="email" value="" placeholder="Почта" required/>
                            </div>
                            <div class="cont-inp">
                                <input class="inp" type="password" name="password" placeholder="Пароль" required/>
                            </div>
                        </div>
                        <div class="addition">
                            <h3>Еще нет аккаунта? <a class="reg"
                                    href="{{ route('user.registration') }}">Регистрация</a></h3>
                        </div>
                        <div class="submit">
                            <button class="btn" type="submit" name="button-log">
                                <h2>Войти</h2>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
@endsection