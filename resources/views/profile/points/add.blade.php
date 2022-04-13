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
                                    <h2>Додайте точку самовивізу для м.<span>City</span></h2>
                                </div>

                                <div class="shop-edit">
                                    <form class="reg-mag" method="POST" action="{{ route('shop.point.add.store', app()->getLocale()) }}">
                                        @csrf
                                        <div class="">
                                            <div class="your-shop relative">
                                                <div class="relative">
                                                    <div class="heading-white">
                                                        <span class="relative bg-white">Вкажіть вашу адресу</span>
                                                    </div>
                                                </div>
                                                <div class="relative">
                                                    <div class="req-div input-div m-10">
                                                    <span class="req-span">
                                                        *Обов'язкове поле
                                                    </span>                                                        
                                                    <input class="form-input required-input" type="text" placeholder="Адреса" name="address">
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
                                                            <label class="nav-link radio-label active" id="grafik-pickup-1" data-bs-toggle="tab" data-bs-target="#grafik-pickup-1-tab" role="tab" aria-controls="home" aria-selected="true">
                                                                <div >Звичайний графік роботи</div>
                                                                <input type="radio" name="schedule_work_type" checked value="1">
                                                            </label>
                                                        </li>
                                                        <li class="nav-item tab_pane-2-cl" role="presentation">
                                                            <label class="nav-link radio-label" id="grafik-pickup-2" data-bs-toggle="tab" data-bs-target="#grafik-pickup-2-tab" role="tab" aria-controls="profile" aria-selected="false">
                                                                <div >Графік роботи по дням</div>
                                                                <input type="radio" name="schedule_work_type" value="2">
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content w-100 m-10 m-b-20" id="grafik-selfpickup">
                                                        <div class="tab-pane tab_pane-1 fade show active" id="grafik-pickup-1-tab" role="tabpanel" aria-labelledby="grafik-pickup-1-tab">
                                                            <div class="flex cilo-t w-100">
                                                                <div class="relative m-20 w-100">
                                                                    <div class="heading-white">
                                                                        <span class="relative bg-white">З понеділка по п'ятницю</span>
                                                                    </div>
                                                                </div>
                                                                <div class="time-div w-33">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>З</small>
                                                                    <input type='time' class="input_1" name="export_time_all_work_day_start"/>
                                                                </div>
                                                                <div class="time-div w-33">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' class="input_2" name="export_time_all_work_day_end"/>
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
                                                                    <input type='time' class="input_1" name="export_time_all_weekend_start"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' class="input_2" name="export_time_all_weekend_end"/>
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
                                                        <div class="tab-pane tab_pane-2 fade" id="grafik-pickup-2-tab" role="tabpanel" aria-labelledby="grafik-pickup-2-tab">
                                                            <div class="flex cilo-t w-100">
                                                                <div class="relative m-10 w-100">
                                                                    <div class="heading-white">
                                                                        <span class="relative bg-white">Понеділок</span>
                                                                    </div>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>З</small>
                                                                    <input type='time' class="input_1" name="export_time_work_day_start_1"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' class="input_2" name="export_time_work_day_end_1"/>
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
                                                                    <input type='time' class="input_1" name="export_time_work_day_start_2"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' class="input_2" name="export_time_work_day_end_2"/>
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
                                                                    <input type='time' class="input_1" name="export_time_work_day_start_3"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' class="input_2" name="export_time_work_day_end_3"/>
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
                                                                    <input type='time' class="input_1" name="export_time_work_day_start_4"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' class="input_2" name="export_time_work_day_end_4"/>
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
                                                                    <input type='time' class="input_1" name="export_time_work_day_start_5"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' class="input_2" name="export_time_work_day_end_5"/>
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
                                                                    <input type='time' class="input_1" name="export_time_work_day_start_6"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' class="input_2" name="export_time_work_day_end_6"/>
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
                                                                    <input type='time' class="input_1" name="export_time_work_day_start_7"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' class="input_2" name="export_time_work_day_end7"/>
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
                                                <div class="relative">
                                                    <div class="heading-white">
                                                        <span class="relative bg-white">Вкажіть види оплати</span>
                                                    </div>
                                                </div>
                                                <div class="payment-s">
                                                    <label class="w-100 filter-attribute-item">
                                                        <input type="checkbox" name="export_pay_cash" class="filter-attribute-checkbox ib-m" checked>
                                                        <span class="filter-attribute-label ib-m">
                                                            Оплата готівкою
                                                    </span>
                                                    </label>
                                                    <label class="w-100 filter-attribute-item">
                                                        <input type="checkbox" name="export_pay_bank" class="filter-attribute-checkbox ib-m">
                                                        <span class="filter-attribute-label ib-m">
                                                            Оплата через термінал
                                                    </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="add-new-shop">
                                            <button class="main-btn main-blue">Зберегти</button>
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
