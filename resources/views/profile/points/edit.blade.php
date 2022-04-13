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
                                    <h2>Точка магазину редагувати</h2>
                                </div>

                                <div class="shop-edit">
                                    <form class="reg-mag" method="POST" action="{{ route('shop.point.edit.update', [app()->getLocale(), $point]) }}">
                                        @csrf
                                        <div class="">
                                            <div class="label-word">
                                                <h2>Місто магазину</h2>
                                            </div>
                                            <div class="city-select city-select-pop trust">
                                                <a class="activate-inp link-click"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <div class="select select-parent relative">
                                                    <span class="val-inp">{{ $point->city->title??'' }}</span>
                                                    <input type="hidden" class="select-inp" name="city_point_id">
                                                    <button class="btn main-btn select-btn before-chevron" type="button" id="manager-2" data-bs-toggle="dropdown" value="{{ $point->city_point_id }}">
                                                        Місто
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="manager-2">
                                                        @foreach($cities as $city)
                                                            <li>
                                                                <a role="menuitem" class="select-item" tabindex="-2" href="#" data-city="{{ $city->city->id }}">{{ $city->city->title }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="label-word">
                                                <h2>Менеджер магазину</h2>
                                            </div>
                                            <div class="city-select city-select-pop trust">
                                                <a class="activate-inp link-click"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <div class="select select-parent relative">
                                                    <span class="val-inp">{{ $point->manager->name??'Не указан' }}</span>
                                                    <input type="hidden" class="select-inp" name="manager_id" value="{{ $point->manager_id }}">
                                                    <button class="btn main-btn select-btn before-chevron" type="button" id="manager-2" data-bs-toggle="dropdown">
                                                        Manager
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="manager-2">
                                                        @foreach($managers as $manager)
                                                            @if(!isset($manager->user->id)) @continue @endif
                                                            <li>
                                                                <a role="menuitem" class="select-item" tabindex="-2" href="#" data-city="{{ $manager->user->id }}">{{ $manager->user->name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="label-word">
                                                <h2>Точки самовивозу</h2>
                                            </div>
                                            <div class="your-shop relative">
                                                <div class="relative">
                                                    <div class="heading-white">
                                                        <span class="relative bg-white">Вкажіть вашу адресу</span>
                                                    </div>
                                                </div>
                                                <div class="relative">
                                                    <div class="req-div input-div m-10 trust">
                                                    <span class="req-span">
                                                        *Обов'язкове поле
                                                    </span>
                                                        <span class="val-inp">{{ $point->address }}</span>
                                                        <a class="activate-inp link-click"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <input class="form-input required-input" type="text" placeholder="Адреса" name="address" value="{{ $point->address }}">
                                                    </div>
                                                </div>
                                                <div class="relative">
                                                    <div class="heading-white">
                                                        <span class="relative bg-white">Вкажіть графік роботи</span>
                                                    </div>
                                                </div>
                                                <div class="checkbox-div">
                                                    <ul class="nav nav-tabs" id="myTab-3" role="tablist">
                                                        <li class="nav-item tab_pane-1-cl" role="presentation">
                                                            <label class="nav-link radio-label @if($point->schedule_work_type == 1) active @endif" id="grafik-pickup-1" data-bs-toggle="tab" data-bs-target="#grafik-pickup-1-tab" role="tab" aria-controls="home" aria-selected="true">
                                                                <div >Звичайний графік роботи</div>
                                                                <input type="radio" name="schedule_work_type" @if($point->schedule_work_type == 1) checked @endif value="1">
                                                            </label>
                                                        </li>
                                                        <li class="nav-item tab_pane-2-cl" role="presentation">
                                                            <label class="nav-link radio-label @if($point->schedule_work_type == 2) active @endif" id="grafik-pickup-2" data-bs-toggle="tab" data-bs-target="#grafik-pickup-2-tab" role="tab" aria-controls="profile" aria-selected="false">
                                                                <div >Графік роботи по дням</div>
                                                                <input type="radio" name="schedule_work_type" value="2" @if($point->schedule_work_type == 2) checked @endif>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content w-100 m-10 m-b-20" id="grafik-selfpickup">
                                                        <div class="tab-pane tab_pane-1 fade @if($point->schedule_work_type == 1) show  active @endif" id="grafik-pickup-1-tab" role="tabpanel" aria-labelledby="grafik-pickup-1-tab">
                                                            <div class="flex cilo-t w-100">
                                                                <div class="relative m-20 w-100">
                                                                    <div class="heading-white">
                                                                        <span class="relative bg-white">З понеділка по п'ятницю</span>
                                                                    </div>
                                                                </div>
                                                                <div class="time-div w-33">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>З</small>
                                                                    <input type='time' name="export_time_all_work_day_start" class="input_1" value="{{ $point->export_work_shop_1_start }}"/>
                                                                </div>
                                                                <div class="time-div w-33">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' name="export_time_all_work_day_end" class="input_2" value="{{ $point->export_work_shop_1_end }}"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night">
                                                                        <input type="checkbox" name="export_around_the_clock" class="filter-attribute-checkbox input-d-n">
                                                                        <span class="filter-attribute-label ib-m">
                                                                        24/7
                                                                    </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="flex cilo-t w-100">
                                                                <div class="relative m-20 w-100">
                                                                    <div class="heading-white">
                                                                        <span class="relative bg-white">З суботи по неділю</span>
                                                                    </div>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>З</small>
                                                                    <input type='time' name="export_time_all_weekend_start" class="input_1" value="{{ $point->export_work_shop_6_start }}"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' name="export_time_all_weekend_end" class="input_2" value="{{ $point->export_work_shop_6_end }}"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n">
                                                                        <span class="filter-attribute-label ib-m">
                                                                            24/7
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane tab_pane-2 fade @if($point->schedule_work_type == 2) show  active @endif" id="grafik-pickup-2-tab" role="tabpanel" aria-labelledby="grafik-pickup-2-tab">
                                                            <div class="flex cilo-t w-100">
                                                                <div class="relative m-10 w-100">
                                                                    <div class="heading-white">
                                                                        <span class="relative bg-white">Понеділок</span>
                                                                    </div>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>З</small>
                                                                    <input type='time' name="export_time_work_day_start_1" class="input_1" value="{{ $point->export_work_shop_1_start }}"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' name="export_time_work_day_end_1" class="input_2" value="{{ $point->export_work_shop_1_end }}"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n">
                                                                        <span class="filter-attribute-label ib-m">
                                                                        24/7
                                                                    </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="flex cilo-t w-100">
                                                                <div class="relative m-10 w-100">
                                                                    <div class="heading-white">
                                                                        <span class="relative bg-white">Вівторок</span>
                                                                    </div>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>З</small>
                                                                    <input type='time' name="export_time_work_day_start_2" class="input_1" value="{{ $point->export_work_shop_2_start }}"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' name="export_time_work_day_end_2" class="input_2" value="{{ $point->export_work_shop_2_end }}"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n">
                                                                        <span class="filter-attribute-label ib-m">
                                                                        24/7
                                                                    </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="flex cilo-t w-100">
                                                                <div class="relative m-10 w-100">
                                                                    <div class="heading-white">
                                                                        <span class="relative bg-white">Середа</span>
                                                                    </div>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>З</small>
                                                                    <input type='time' name="export_time_work_day_start_3" class="input_1" value="{{ $point->export_work_shop_3_start }}"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' name="export_time_work_day_end_3" class="input_2" value="{{ $point->export_work_shop_3_end }}"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n">
                                                                        <span class="filter-attribute-label ib-m">
                                                                        24/7
                                                                    </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="flex cilo-t w-100">
                                                                <div class="relative m-10 w-100">
                                                                    <div class="heading-white">
                                                                        <span class="relative bg-white">Четверг</span>
                                                                    </div>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>З</small>
                                                                    <input type='time' name="export_time_work_day_start_4" class="input_1" value="{{ $point->export_work_shop_4_start }}"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' name="export_time_work_day_end_4" class="input_2" value="{{ $point->export_work_shop_4_end }}"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n">
                                                                        <span class="filter-attribute-label ib-m">
                                                                        24/7
                                                                    </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="flex cilo-t w-100">
                                                                <div class="relative m-10 w-100">
                                                                    <div class="heading-white">
                                                                        <span class="relative bg-white">П'ятниця</span>
                                                                    </div>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>З</small>
                                                                    <input type='time' name="export_time_work_day_start_5" class="input_1" value="{{ $point->export_work_shop_5_start }}"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' name="export_time_work_day_end_5" class="input_2" value="{{ $point->export_work_shop_5_end }}"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n">
                                                                        <span class="filter-attribute-label ib-m">
                                                                        24/7
                                                                    </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="flex cilo-t w-100">
                                                                <div class="relative m-10 w-100">
                                                                    <div class="heading-white">
                                                                        <span class="relative bg-white">Субота</span>
                                                                    </div>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>З</small>
                                                                    <input type='time' name="export_time_work_day_start_6" class="input_1" value="{{ $point->export_work_shop_6_start }}"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' name="export_time_work_day_end_6" class="input_2" value="{{ $point->export_work_shop_6_end }}"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n">
                                                                        <span class="filter-attribute-label ib-m">
                                                                        24/7
                                                                    </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="flex cilo-t w-100">
                                                                <div class="relative m-10 w-100">
                                                                    <div class="heading-white">
                                                                        <span class="relative bg-white">Неділя</span>
                                                                    </div>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>З</small>
                                                                    <input type='time' name="export_time_work_day_start_7" class="input_1" value="{{ $point->export_work_shop_7_start }}"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' name="export_time_work_day_end_7" class="input_2" value="{{ $point->export_work_shop_7_end }}"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n">
                                                                        <span class="filter-attribute-label ib-m">
                                                                        24/7
                                                                    </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="payment-s">
                                                    <span class="req">Потрібно вказати хоча б один спосіб платежу</span>
                                                    <label class="w-100 filter-attribute-item">
                                                        <input type="checkbox" name="export_pay_cash" class="filter-attribute-checkbox required-input ib-m" @if($point->export_pay_cash == 1) checked @endif>
                                                        <span class="filter-attribute-label ib-m">
                                                            Оплата готівкою
                                                        </span>
                                                    </label>
                                                    <label class="w-100 filter-attribute-item">
                                                        <input type="checkbox" name="export_pay_bank" class="filter-attribute-checkbox required-input ib-m" @if($point->export_pay_bank == 1) checked @endif>
                                                        <span class="filter-attribute-label ib-m">
                                                            Оплата через термінал
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="add-new-shop">
                                            <button class="main-btn main-blue click-check">Зберегти</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
