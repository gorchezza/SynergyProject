@extends('loyouts/main')

@section('main')
    @extends('loyouts/header')
@section('header')
@endsection

<div class="flex-container">
    <main>
        <section class="lk">
            <div class="container">
                <div class="user">
                    <form action="{{ route('about') }}" method="POST">
                        @csrf
                        <div class="user-section-one">
                            <div class="user-image">
                                <img src="C:\SynergyProject\resources\images\pachito.jpg" alt="">
                            </div>
                            <div class="user-about">
                                <fieldset class='about'>
                                    <legend>О себе</legend>
                                    <div class="about-cont">
                                        <textarea name="about_user" col="100" rows="10" placeholder="" value=""></textarea>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="user-section-two">
                            <div class="user-data">
                                <form action="lk.php" method="post">
                                    <fieldset class="names">
                                        <legend>ФИО</legend>
                                        <div class="inputs-reg">
                                            <div class="cont-inp">
                                                <input class="reg-inp" type="text" name="second_name" value=""
                                                    placeholder="Фамилия" />
                                            </div>
                                            <div class="cont-inp">
                                                <input class="reg-inp" type="text" name="first_name" value=""
                                                    placeholder="Имя" />
                                            </div>
                                            <div class="cont-inp">
                                                <input class="reg-inp" type="text" name="three_name" value=""
                                                    placeholder="Отчество" />
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset class="pasport">
                                        <legend>Паспортные данные</legend>
                                        <div class="inputs-reg">
                                            <div class="cont-inp">
                                                <input class="reg-inp" type="number" name="id_passport" value=""
                                                    placeholder="Серия и номер паспорта" />
                                            </div>
                                            <div class="cont-inp">
                                                <input class="reg-inp" type="text" name="issued" value=""
                                                    placeholder="Кем выдан" />
                                            </div>
                                            <div class="cont-inp">
                                                <input class="reg-inp" type="text" name="register_date" value=""
                                                    placeholder="Дата выдачи" />
                                            </div>
                                        </div>
                                        <div class="inputs-reg">
                                            <div class="cont-inp">
                                                <input class="reg-inp" type="text" name="brith_date" value=""
                                                    placeholder="Дата рождения" />
                                            </div>
                                            <div class="cont-inp">
                                                <input class="reg-inp" type="text" name="brith_place" value=""
                                                    placeholder="Место рождения" />
                                            </div>
                                            <div class="cont-inp">
                                                <input class="reg-inp" type="text" name="resident_place"
                                                    value="" placeholder="Место проживания" />
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="inputs-reg">
                                        <div class="cont-inp">
                                            <input class="reg-inp" type="email" name="email" value=""
                                                placeholder="Почта" readonly />
                                        </div>
                                    </div>

                                    <div class="submit">
                                        <button class="btn" type="submit" name="button-lk">
                                            <h2>Сохранить</h2>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
        </section>
    </main>
    <footer>

    </footer>
</div>
@endsection
