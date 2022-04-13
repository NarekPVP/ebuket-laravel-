<div class="popup">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                <div class="login-registration flex">
                    <div class="login just-center">
                        <h2><a class="before-bottom-hover active" href="#">Вхід</a></h2>
                    </div>
                    <div class="login-r just-center">
                        <h2><a class="before-bottom-hover" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#exampleModal2" href="#">Реєстрація</a></h2>
                    </div>
                </div>
                <form class="login-form" method="POST" action="{{ route('login', app()->getLocale()) }}" id="login-form">
                    @csrf
                    <button class="main-btn btn-grey">Увійти через Google </button>
                    <div class="relative">
                        <div class="heading-white">
                            <span class="relative bg-white">або</span>
                        </div>
                    </div>
                    <input class="form-input" type="text" placeholder="E-mail" name="email">
                    <input class="form-input" type="password" placeholder="Пароль" name="password">
                    <div class="flex password-forgot">
                        <div class="check-pass">
                            <li class="filter-attribute-item">
                                <input type="checkbox" id="size-attribute-2" class="filter-attribute-checkbox ib-m" name="remember">
                                <label for="size-attribute-2" class="filter-attribute-label ib-m">
                                    запам’ятати мене
                                </label>
                            </li>
                        </div>
                        <div class="check-pass v-2-ch-p">
                            <a class="orange-under" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#exampleModal5" href="#">Забули пароль?</a>
                        </div>
                    </div>
                    <div class="errors-message"></div>
                    <button class="main-btn main-blue" type="submit">Увійти</button>
                </form>
                <div class="p-300 just-center">
                    <p>Немає профілю?</p>
                    <a class="orange-under" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#exampleModal2" href="#">Зареєструватись</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popup popup-2">
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                <div class="login-registration flex">
                    <div class="login just-center">
                        <h2><a class="before-bottom-hover" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#exampleModal" href="#">Вхід</a></h2>
                    </div>
                    <div class="login-r just-center">
                        <h2><a class="before-bottom-hover active" href="#">Реєстрація</a></h2>
                    </div>
                </div>
                <form class="login-form" id="register-form-user" action="{{ route('register', app()->getLocale()) }}">
                    @csrf

                    <button class="main-btn btn-grey">Реєстрація через Google </button>
                    <div class="relative">
                        <div class="heading-white">
                            <span class="relative bg-white">або</span>
                        </div>
                    </div>
                    <input class="form-input" type="text" placeholder="Ім`я" name="name">
                    <input class="form-input" type="text" placeholder="E-mail" name="email">
                    <input class="form-input" type="password" placeholder="Пароль" name="password">

                    <div class="errors-message"></div>

                    <div class="flex password-forgot">
                        <div class="just-center w-100">
                            <p>Є профіль?  <a class="orange-under" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#exampleModal" href="#">Увійти</a></p>
                        </div>
                    </div>
                    <button class="main-btn main-blue" type="submit">Зареєструватися</button>
                </form>
                <div class="p-300 txt-center">
                    <p>Реєструючись, ви погоджуєтесь з</p>
                    <a class="orange-under" href="#">Угодою користувача</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popup popup-3">
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                <div class="chosen-filter">
                    <h3>Вы выбрали:</h3>
                    <div class="ch-f-d flex">
                        <a href="#">в коробке<img src="{{ asset('img/chevron-x.svg') }}"></a>
                        <a href="#">в корзине<img src="{{ asset('img/chevron-x.svg') }}"></a>
                        <a href="#">монобукеты<img src="{{ asset('img/chevron-x.svg') }}"></a>
                        <a href="#">авторские<img src="{{ asset('img/chevron-x.svg') }}"></a>
                    </div>
                    <div class="reset-filter">
                        <a href="#">Сбросить</a>
                    </div>
                </div>
                <div class="price-filter">
                    <h2>Цена</h2>
                    <div class="polzunok-container-5">
                        <input type="text" class="polzunok-input-5-left" />
                        <input type="text" class="polzunok-input-5-right "/>
                        <div class="polzunok-5"></div>
                    </div>
                </div>
                <div class="rest-filter">
                    <ul class="filter ul-reset">
                        <li class="filter-item">
                            <section class="filter-item-inner">
                                <h2 class="filter-item-inner-heading minus plus">
                                    Lorem
                                </h2>
                                <ul class="filter-attribute-list ul-reset" style="display: none">
                                    <div class="filter-attribute-list-inner">
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>

                                    </div>
                                </ul>
                            </section>
                        </li>
                        <li class="filter-item">
                            <section class="filter-item-inner">
                                <h2 class="filter-item-inner-heading minus plus">
                                    Lorem
                                </h2>
                                <ul class="filter-attribute-list ul-reset" style="display: none">
                                    <div class="filter-attribute-list-inner">
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>

                                    </div>
                                </ul>
                            </section>
                        </li>
                        <li class="filter-item">
                            <section class="filter-item-inner">
                                <h2 class="filter-item-inner-heading minus plus">
                                    Lorem
                                </h2>
                                <ul class="filter-attribute-list ul-reset" style="display: none">
                                    <div class="filter-attribute-list-inner">
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>

                                    </div>
                                </ul>
                            </section>
                        </li>
                        <li class="filter-item">
                            <section class="filter-item-inner">
                                <h2 class="filter-item-inner-heading minus plus">
                                    Lorem
                                </h2>
                                <ul class="filter-attribute-list ul-reset" style="display: none">
                                    <div class="filter-attribute-list-inner">
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>
                                        <li class="filter-attribute-item">
                                            <label class="w-100">
                                                <input type="checkbox" name="" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                        Lorem
                                                    </span>
                                            </label>
                                        </li>

                                    </div>
                                </ul>
                            </section>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popup popup-4">
    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                <div class="login-registration flex">
                    <div class="reg-pop just-center">
                        <h2><a class="before-bottom-hover active" href="#">Реєстрація магазину</a></h2>
                    </div>
                </div>
                <form class="login-form" method="POST" action="{{ route('register.shop.store', app()->getLocale()) }}" id="register-form-shop">
                    @csrf
                    <div class="step-1 step active">
                        <div class="relative">
                            <div class="heading-white">
                                <span class="relative bg-white">данні про компанію</span>
                            </div>
                        </div>
                        <div class="req-div">
                            <span class="req-span">
                                *Обов'язкове поле
                            </span>
                            <input class="form-input required-input" type="text" placeholder="Назва" name="shop_name">
                        </div>
                        <div class="parent-input">
                            <div class="req-div non-act">
                                <span class="req-span">
                                    *Обов'язкове поле
                                </span>
                                <input class="form-input required-input" type="text" placeholder="Посилання на сайт/інстаграм" name="url">
                            </div>
                            <div class="flex password-forgot">
                                <div class="check-pass">
                                    <div class="req-div">
                                        <span class="req-span">
                                            *Обов'язкове поле
                                        </span>
                                        <label class="w-100 filter-attribute-item d-h-site">
                                            <input type="checkbox" class="filter-attribute-checkbox ib-m dh-inp">
                                            <span class="filter-attribute-label ib-m">
                                                у мене немає сайту
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="city-select city-select-pop">
                            <div class="select select-parent">
                                <input type="hidden" class="select-inp" name="city_id">
                                <button class="btn main-btn select-btn before-chevron" type="button" id="dropdownMenu5" data-bs-toggle="dropdown">
                                    Місто
                                </button>
                                @php
                                    $cities = \App\Models\City::get();
                                @endphp
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu5">
                                    @foreach($cities as $city)
                                        <li>
                                            <a role="menuitem" class="select-item" tabindex="-2" href="#" data-city="{{ $city->id }}">
                                                {{  $city->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale') }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div> -->
                        <div class="relative">
                            <div class="heading-white">
                                <span class="relative bg-white">контактна інформація</span>
                            </div>
                        </div>
                        <div class="req-div">
                            <span class="req-span">
                                *Обов'язкове поле
                            </span>
                            <input class="form-input required-input" type="text" placeholder="Ім`я" name="name">
                        </div>
                        <div class="req-div">
                            <span class="req-span">
                                *Обов'язкове поле
                            </span>
                            <input class="form-input tel-input required-input" type="tel" placeholder="Номер телефону" name="phone">
                        </div>
                        <div class="req-div">
                            <span class="req-span">
                                *Обов'язкове поле
                            </span>
                            <input class="form-input required-input" type="email" placeholder="E-mail" name="email">
                        </div>
                        <div class="req-div">
                            <span class="req-span">
                                *Обов'язкове поле
                            </span>
                            <input class="form-input required-input" type="password" placeholder="Пароль" name="password">
                        </div>
                        <div class="errors-message"></div>
                        <button type="submit" class="main-btn main-blue click-step-2">Створити магазин</button>
                        <div class="p-300 txt-center">
                            <p>Реєструючись, ви погоджуєтесь з</p>
                            <a class="orange-under" href="#">Угодою користувача</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="popup popup-5">
    <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                <div class="login-registration flex">
                    <div class="reg-pop just-center">
                        <h2><a class="before-bottom-hover active" href="#">Відновлення паролю</a></h2>
                    </div>
                </div>
                <form method="POST" action="{{ route('password.email', app()->getLocale()) }}" class="login-form" id="form-reset">
                    @csrf
                    <input class="form-input" type="text" placeholder="E-mail" name="email">
                    <button class="main-btn main-blue" type="submit">Відновити пароль</button>
                    <div class="errors-message"></div>
                    <div class="success-message"></div>
                </form>
            </div>
        </div>
    </div>
</div>
