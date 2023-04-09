@extends('loyouts/main')

@section('main')

    <section>
        <div class="container">
            <div class="login-cont">
                <div class="title">
                    <h1>Авторизация</h1>
                    <p class='error'></p>
                </div>
                <div class="form-container">
                    <form name="login" method="post" action="#">
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
                                    href="{{ route('registration') }}">Регистрация</a></h3>
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