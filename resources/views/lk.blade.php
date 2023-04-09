@extends('loyouts/main')

@section('main')
    
<body>
    <div class="flex-container">
        
        @extends('loyouts/header')
        @section('header')
        @endsection
        
        <main>
        <section class="lk">
            <div class="container">
                <div class="lk-cont">
                    <div class="lk-title">
                        <h2>Личный кабинет</h2>
                    </div>
                </div>
                <div class="user">
                    <div class="user-image">
                    </div> 
                    <div class="user-data">
                        <form action="lk.php" method="post">
                            <fieldset class="names">
                                <legend>ФИО</legend>
                                <div class="inputs-reg">
                                    <div class="cont-inp">
                                        <input class="reg-inp" type="text" name="second-name" value=""/>
                                    </div>
                                    <div class="cont-inp">
                                        <input class="reg-inp" type="text" name="first-name" value=""/>
                                    </div>
                                    <div class="cont-inp">
                                        <input class="reg-inp" type="text" name="three-name" value="" placeholder="Отчество"/>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="pasport">
                                <legend>Паспортные данные</legend>
                                <div class="inputs-reg">
                                    <div class="cont-inp">
                                        <input class="reg-inp" type="number" name="id-pass" value="" placeholder="Серия и номер паспорта" />
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
                                    <input class="reg-inp" type="email" name="email" value="" placeholder="Почта" readonly/>
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

            </div>
        </section>
        </main>
        <footer>

        </footer>
    </div>

@endsection
