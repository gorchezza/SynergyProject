@extends('layouts/main')

@section('main')
    <div class="flex-container">
        @extends('layouts/header')
        <main>
            {{--             
            <div class="notification-container">
                <h2 class="nitofication-title">Уведомления</h2>
                <div class="notification-message">
                    Уведомлений пока нет
                </div>
                <a href="{{ route('user.verificationEmail') }}">Сюды</a>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div> --}}
           
            <section class="lk">
                <div class="user">
                    @if ($errors->any())
                        <div class="errors">
                            <ul calss="errors-ul">
                                @foreach($errors->all() as $error)
                                <li class="error">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="user-section-one">
                        <div class="user-image">
                            <div class="avatar-cont">
                                <img id="preview" class="avatar" src="{{ $avatar }}" alt="avatar">
                            </div>
                            <div id="modal" class="modal">
                                <div class="modal-conteiner">
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <form action="{{ route('user.avatar') }}" method="POST" enctype="multipart/form-data">
                                            <div class="upload-cont">
                                                @csrf
                                                <input type="file" id="avatar" name="avatar" hidden>
                                                <label class="upload-avatar" for="avatar">Загрузить аватар</label>
                                                <img id="modal-image" class="modal-image" src="{{ $avatar }}" alt="avatar">
                                                <button class="upload-btn" type="submit">Сохранить</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user-description">
                            <div id="modal-nickname" class="modal">
                                <div class="modal-conteiner">
                                    <div class="modal-content">
                                        <span id="close-nickname-modal-btn" class="close-nickname">&times;</span>
                                        <form action="{{ route('user.nickname') }}" method="POST">
                                            @csrf
                                            <div class="upload-cont">
                                                <input name="nickname" class="user-nickname-inp" type="text" placeholder="{{ $nickname }}">
                                                <button class="upload-btn" type="submit">Сохранить</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="user-desc-cont">
                                <img id="refactor" class="icon-btn-copy" src="storage/icons/paper-and-pen-icon.png" alt="">
                                <div id="user-nickname" class="user-nickname">{{ $nickname}}</div>
                                <div id="user-id" class="user-id">{{ $user_id }}</div>
                                <img id="icon-btn-copy" class="icon-btn-copy" src="storage/icons/icon-copy-transparent.png">
                            </div>
                        </div>
                    </div>
                    <div class="user-section-two">
                        <form action="{{ route('user.update') }}" method="POST">
                        @csrf
                            <fieldset class='about-user'>
                                <legend>О себе</legend>
                                <div class="about-cont">
                                    <textarea name="about" col="10" rows="8" placeholder="О себе">{{ $about }}</textarea>
                                </div>
                            </fieldset>
                            <fieldset class="names">
                                <legend>ФИО</legend>
                                <div class="inputs-reg">
                                    <div class="cont-inp-reg">
                                        <input class="reg-inp" type="text" name="second_name"
                                            value="{{ $second_name }}" placeholder="Фамилия" />
                                    </div>
                                    <div class="cont-inp-reg">
                                        <input class="reg-inp" type="text" name="first_name"
                                            value="{{ $first_name }}" placeholder="Имя" />
                                    </div>
                                    <div class="cont-inp-reg">
                                        <input class="reg-inp" type="text" name="three_name"
                                            value=" {{ $three_name }}" placeholder="Отчество" />
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="pasport">
                                <legend>Паспортные данные</legend>
                                <div class="inputs-reg">
                                    <div class="cont-inp">
                                        <input class="reg-inp" type="text" name="id_passport"
                                            value="{{ $id_passport }}" placeholder="Серия и номер паспорта" />
                                    </div>
                                    <div class="cont-inp">
                                        <input class="reg-inp" type="text" name="issued"
                                            value="{{ $issued }}" placeholder="Кем выдан" />
                                    </div>
                                    <div class="cont-inp">
                                        <input class="reg-inp" type="text" name="register_date"
                                            value="{{ $register_date }}" placeholder="Дата выдачи" />
                                    </div>
                                </div>
                                <div class="inputs-reg">
                                    <div class="cont-inp">
                                        <input class="reg-inp" type="text" name="brith_date"
                                            value="{{ $brith_date }}" placeholder="Дата рождения" />
                                    </div>
                                    <div class="cont-inp">
                                        <input class="reg-inp" type="text" name="brith_place"
                                            value="{{ $brith_place }}" placeholder="Место рождения" />
                                    </div>
                                    <div class="cont-inp">
                                        <input class="reg-inp" type="text" name="resident_place"
                                            value="{{ $resident_place }}" placeholder="Место проживания" />
                                    </div>
                                </div>
                            </fieldset>
                            <div class="inputs-reg">
                                <div class="cont-inp">
                                    <input class="reg-inp" type="email" name="email"
                                        value="{{ $email }}" placeholder="Почта" readonly />
                                </div>
                            </div>
                            <div class="submit">
                                <button class="btn" type="submit" name="button-lk">
                                    <h2>Сохранить</h2>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="author"><a href="https://github.com/gorchezza" target="_blank">@gorchezza</a></div>
        </footer>
    </div>

@endsection
