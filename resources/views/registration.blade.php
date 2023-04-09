@extends('loyouts/main')

@section('main')

    <section>
        <div class="container">
            <div class="reg-cont">
                <div class="title-reg">
                    <h1>Регистрация</h1>
                    <p class='error'></p>
                </div>
                <div class="form-container">
                    <form name="" method="post" action="reg.php">
                        <fieldset class="names">
                            <legend>ФИО</legend>
                            <div class="inputs-reg">
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="second-name" value="" placeholder="Фамилия"
                                        required />
                                </div>
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="first-name" value="" placeholder="Имя" required />
                                </div>
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="three-name" value="" placeholder="Отчество"
                                        required />
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="pasport">
                            <legend>Паспортные данные</legend>
                            <div class="inputs-reg">
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="id-pass" value="" placeholder="Серия и номер паспорта" />
                                </div>
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="reg-date" value="" placeholder="Дата выдачи" />
                                </div>
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="issued" value="" placeholder="Кем выдан" />
                                </div>
                            </div>
                            <div class="inputs-reg">
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="brith-date" value="" placeholder="Дата рождения" />
                                </div>
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="brith-place" value="" placeholder="Место рождения" />
                                </div>
                                <div class="cont-inp">
                                    <input class="reg-inp" type="text" name="resident-place" value="" placeholder="Место проживания" />
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
                            <h3>Есть аккаунт? <a class="reg" href="{{ route('login') }}">Авторизация</a>
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