@extends('layouts/main')

@section('main')

    <section> 
        <div class="container">
            <div class="email-confirm-cont">
                <div class="title">
                    <h1>Подтверждение почты</h1>
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
                <div class="description">
                    Напишите свою электронную почту,<br> на которую мы вышлем код для подтверждения
                </div>
                <div class="email-confirm-form">
                    <div class="form-container">
                        <form name="email" method="post" action="{{ route('user.submitCode') }}">
                            @csrf
                            <div class="inputs">
                                <div class="cont-inp">
                                    <input class="inp" type="email" name="email" value="" placeholder="Почта" required/>
                                </div>
                            </div>
                            <div class="addition">
                                <h3>Подтвержден аккаунт? <a class="reg"
                                        href="{{ route('user.private') }}">Назад</a></h3>
                            </div>
                            <div class="submit">
                                <button class="btn" type="submit" name="button-log">
                                    <h2>Выслать код</h2>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection