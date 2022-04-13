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
                                <div class="heading-cab alex2">
                                    <h2>Магазини</h2>
                                </div>
                                    <form>
                                    <div class="shop-card alex">
                                        <div class="addres-shop w-100 m-10">
                                            <h4>Вивести місто</h4>
                                        </div>
                                        <div class="pickup-self w-100 relative">
                                            <div class="addres-shop w-50 m-10">
                                                <h4>Адрес 1</h4>
                                            </div>

                                            <div class="ways-payment w-50 m-10">
                                                <h4>способи оплати</h4>
                                            </div>
                                            <div class="work-time w-100 m-10">
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
                                                <a class="edit" href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="abs-delete delete-2">
                                                <a class="edit" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="pickup-self w-100 relative">
                                            <div class="addres-shop w-50 m-10">
                                                <h4>Адрес 2</h4>
                                            </div>

                                            <div class="ways-payment w-50 m-10">
                                                <h4>способи оплати</h4>
                                            </div>
                                            <div class="work-time w-100 m-10">
                                                <div class="pn-pt sb-vs flex">
                                                    <div class="f-1">
                                                        <span>Пн - Пт</span><span class="time">08:00 - 22:00</span>
                                                    </div>
                                                    <div class="f-1">
                                                        <span>Cб - Вс</span><span class="time">08:00 - 22:00</span>
                                                    </div>
                                                </div>
                                                <div class="every-day flex">
                                                </div>
                                            </div>
                                            <div class="abs-edit">
                                                <a class="edit" href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="abs-delete delete-2">
                                                <a class="edit" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="w-100 just-center">
                                                <button class="main-btn main-blue" type="button">Показати все</button>
                                            </div>
                                        </div>
                                        <a href="#" class="add-new-shop">
                                            <button class="main-btn main-blue" type="button">Додати новий магазин</button>
                                        </a>
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
