@extends('layouts.app')

@section('content')

    <section class="personal-cab">
        <div class="content">
            <div class="profile-container flex">
                <div class="align-center just-center w-100">
                    <h1 class="profile-mob-title">Кабінет користувача</h1>
                </div>
                <div class="set-div flex w-100 setting-profile-tab">
                    @include('profile.menu')
                    <div class="profile-info">
                        <div class="contacts-container grid bottom-tier">
                            <div class="contacts-form-main-wrapper">
                                <div class="heading-cab">
                                    <h2>Міста</h2>
                                </div>
                                @foreach($points as $point)
                                    @if(!isset($point->city->title)) @continue @endif
                                    <div class="shop-card">
                                        <div class="addres-shop w-50 m-10">
                                            <h4>{{ $point->city->title }}</h4>
                                        </div>
                                        <div class="addres-shop w-50 m-10">
                                            <h4>{{ $point->address }}</h4>
                                        </div>
                                        <div class="manager w-50 m-10">
                                            <h4>{{ $point->manager->name??'Не назначен' }}</h4>
                                        </div>
                                        <div class="ways-payment w-50 m-10">
                                            <h4>способи оплати</h4>
                                        </div>
                                        <div class="work-time w-100">
                                            <div class="pn-pt sb-vs flex">
                                                <div class="f-1">
                                                    <span>Пн - Пт</span><span class="time">08:00 - 22:00</span>
                                                </div>
                                                <div class="f-1">
                                                    <span>Cб - Вс</span><span class="time">08:00 - 22:00</span>
                                                </div>
                                            </div>
                                            <div class="every-day flex">
                                                <div class="f-1">
                                                    <span>Пн</span><span class="time">08:00 - 22:00</span>
                                                </div>
                                                <div class="f-1">
                                                    <span>Вт</span><span class="time">08:00 - 22:00</span>
                                                </div>
                                                <div class="f-1">
                                                    <span>Ср</span><span class="time">08:00 - 22:00</span>
                                                </div>
                                                <div class="f-1">
                                                    <span>Чт</span><span class="time">08:00 - 22:00</span>
                                                </div>
                                                <div class="f-1">
                                                    <span>Пт</span><span class="time">08:00 - 22:00</span>
                                                </div>
                                                <div class="f-1">
                                                    <span>Сб</span><span class="time">08:00 - 22:00</span>
                                                </div>
                                                <div class="f-1">
                                                    <span>Вс</span><span class="time">08:00 - 22:00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="abs-edit">
                                            <a class="edit" href="{{ route('shop.city.edit', [app()->getLocale(), $point]) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="abs-delete delete-2">
                                            <a class="edit" href="{{ route('shop.city.delete', [app()->getLocale(), $point]) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                @endforeach
                                <a href="{{ route('shop.city.add', app()->getLocale()) }}" class="add-new-shop">
                                    <button class="main-btn main-blue" type="button">Додати нове місто</button>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
