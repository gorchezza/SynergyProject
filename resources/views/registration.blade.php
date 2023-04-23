@extends('loyouts/main')

@section('main')

    <section>
        <div class="container">
            <div class="reg-cont">
                <div class="title-reg">
                    <h1>Регистрация</h1>
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
                    <form name="registration" method="post" action="{{ route('user.register') }}">
                        @csrf
                        <fieldset class="names">
                            <legend>ФИО</legend>
                            <div class="inputs-reg">
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="second_name" value="" placeholder="Фамилия"
                                        required />
                                </div>
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="first_name" value="" placeholder="Имя" 
                                        required />
                                </div>
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="three_name" value="" placeholder="Отчество"
                                        required />
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="pasport">
                            <legend>Паспортные данные</legend>
                            <div class="inputs-reg">
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="id_passport" value="" placeholder="Серия и номер паспорта" maxlength="10"/>
                                </div>
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="issued" value="" placeholder="Кем выдан" />
                                </div>
                                <div class="cont-inp">
                                    <input class="reg-inp"  name="register_date" value="" placeholder="Дата выдачи" type="datetime-local"/>
                                </div>
                            </div>
                            <div class="inputs-reg">
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="brith_date" value="" placeholder="Дата рождения" />
                                </div>
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="brith_place" value="" placeholder="Место рождения" />
                                </div>
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="resident_place" value="" placeholder="Место проживания" />
                                </div>
                            </div>
                        </fieldset>
                        <div class="inputs-reg">
                            <div class="cont-inp">
                                <input class="reg-inp" type="email" name="email" value="" placeholder="Почта" />
                            </div>
                            <div class="cont-inp">
                                <input class="reg-inp" type="password" name="password" placeholder="Пароль" />
                            </div>
                        </div>
                        <div class="addition">
                            <h3>Есть аккаунт? <a class="reg" href="{{ route('user.login') }}">Авторизация</a>
                            </h3>
                        </div>
                        <div class="submit">
                            <button class="btn" type="submit" name="button-reg">
                                <h2>Зарегистрироваться</h2>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
@endsection