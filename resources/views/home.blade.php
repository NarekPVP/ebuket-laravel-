@extends('layouts.app')

@section('content')

    <section class="personal-cab">
        <div class="content">
            <div class="profile-container flex">
                <div class="align-center just-center w-100">
                    <h1 class="profile-mob-title">Кабинет пользователя</h1>
                </div>
                <div class="set-div flex w-100 setting-profile-tab">
                    @include('profile.menu')
                    <div class="profile-info">
                        <div class="contacts-container grid bottom-tier">
                            <div class="contacts-form-main-wrapper">
                                <form class="contacts-form-container" method="POST" action="{{ route('profile.update', app()->getLocale()) }}">
                                    @csrf
                                    <div class="grid contacts-form">
                                        @if(Auth::user()->role_id == 3)
                                            <div class="relative">
                                                <div class="heading-white">
                                                    <span class="relative bg-white">Данні про компанію</span>
                                                </div>
                                            </div>

                                            <div class="list-errors">
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="req-div trust">
                                                <span class="req-span">
                                                    *Обов'язкове поле
                                                </span>
                                                <span class="val-inp">{{ Auth::user()->shop_name??'Shop name' }}</span>
                                                <a class="activate-inp link-click"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <input class="form-input required-input" type="text" placeholder="Назва" name="shop_name" value="{{ Auth::user()->shop_name }}">
                                            </div>
                                            <div class="req-div trust non-act">
                                            <span class="req-span">
                                                *Обов'язкове поле
                                            </span>
                                                <span class="val-inp">{{ Auth::user()->url??'Link Site' }}</span>
                                                <a class="activate-inp link-click"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <input class="form-input required-input" type="text" placeholder="Посилання на сайт/інстаграм" name="url" value="{{ Auth::user()->url }}">
                                            </div>

                                            <div class="relative">
                                                <div class="city-select city-select-pop trust">
                                                    <a class="activate-inp link-click"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    <div class="select select-parent relative">
                                                        <span class="val-inp">City</span>
                                                        <input type="hidden" class="select-inp" name="city_id" value="{{ Auth::user()->city_id }}">
                                                        <button class="btn main-btn select-btn before-chevron" type="button" id="dropdownMenu5" data-bs-toggle="dropdown">
                                                            Місто
                                                        </button>
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
                                                </div>
                                            </div>
                                        @endif
                                        <div class="relative">
                                            <div class="heading-white">
                                                <span class="relative bg-white">контактна інформація</span>
                                            </div>
                                        </div>
                                        <div class="req-div trust">
                                            <span class="req-span">
                                                *Обов'язкове поле
                                            </span>
                                            <span class="val-inp">{{ Auth::user()->name }}</span>
                                            <a class="activate-inp link-click"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <input class="form-input required-input" type="text" placeholder="Ім`я" name="name" value="{{ Auth::user()->name }}">
                                        </div>
                                        @if(Auth::user()->role_id)
                                            <div class="req-div trust">
                                                <span class="req-span">
                                                    *Обов'язкове поле
                                                </span>
                                                <span class="val-inp">{{ Auth::user()->phone??'Phone' }}</span>
                                                <a class="activate-inp link-click"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <input class="form-input tel-input required-input" type="tel" placeholder="Номер телефону" name="phone" value="{{ Auth::user()->name }}">
                                            </div>
                                        @endif
                                        <div class="req-div trust">
                                        <span class="req-span">
                                            *Обов'язкове поле
                                        </span>
                                            <span class="val-inp">{{ Auth::user()->email }}</span>
                                            <a class="activate-inp link-click"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <input class="form-input required-input" type="email" placeholder="E-mail" name="email" value="{{ Auth::user()->email }}">
                                        </div>
                                        <div class="req-div trust">
                                        <span class="req-span">
                                            *Обов'язкове поле
                                        </span>
                                            <span class="val-inp">Password</span>
                                            <a class="activate-inp link-click"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <input class="form-input required-input" type="password" placeholder="Пароль" name="password">
                                        </div>
                                        <div class="errors-message"></div>
                                    </div>
                                    <div class="save-btn">
                                        <button type="submit" class="main-btn main-blue">Зберегти</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
