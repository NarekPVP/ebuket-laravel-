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
                                    <h2>Додавання бренду</h2>
                                </div>

                                <div class="shop-edit add-sh">
                                    <form class="reg-mag" method="POST" action="{{ route('shop.city.store', app()->getLocale()) }}">
                                        @csrf
                                        <div class="">
                                            <div class="label-word">
                                                <h2>Місто магазину</h2>
                                            </div>
                                            <div class="city-select city-select-pop">
                                                <div class="select select-parent relative">
                                                    <input type="hidden" class="select-inp" name="city_id">
                                                    <button class="btn main-btn select-btn before-chevron" type="button" id="manager-2" data-bs-toggle="dropdown">
                                                        Місто
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="manager-2">
                                                        @foreach($cities as $city)
                                                            <li>
                                                                <a role="menuitem" class="select-item" tabindex="-2" href="#" data-city="{{ $city->id }}">{{ $city->title }}</a>
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
                                            <div class="city-select city-select-pop">
                                                <div class="select select-parent relative">
                                                    <input type="hidden" class="select-inp" name="manager_id">
                                                    <button class="btn main-btn select-btn before-chevron" type="button" id="manager-2" data-bs-toggle="dropdown">
                                                        Manager
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="manager-2">
                                                        @foreach($staffs as $staff)
                                                            <li>
                                                                <a role="menuitem" class="select-item" tabindex="-2" href="#" data-city="{{ $staff->id }}">{{ $staff->name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="your-shop relative">
                                                <div class="relative">
                                                    <div class="heading-white">
                                                        <span class="relative bg-white">Вкажіть графік роботи менеджера</span>
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
                                                                    <input type='time' name="export_time_all_work_day_start" class="input_1"/>
                                                                </div>
                                                                <div class="time-div w-33">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' name="export_time_all_work_day_end" class="input_2"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name="export_around_the_clock" class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                    <input type='time' name="export_time_all_weekend_start" class="input_1"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' name="export_time_all_weekend_end" class="input_2"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n input-cur-24">
                                                                        <span class="filter-attribute-label ib-m">
                                                                        24/7
                                                                    </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="label-word">
                                                <h2>Кур'єр</h2>
                                            </div>
                                            <div class="your-shop relative">

                                                <div class="relative">
                                                    <div class="heading-white">
                                                        <span class="relative bg-white">Вкажіть графік роботи курʼєра</span>
                                                    </div>
                                                </div>
                                                <div class="checkbox-div">
                                                    <ul class="nav nav-tabs" id="myTab-3" role="tablist">
                                                        <li class="nav-item tab_pane-1-cl" role="presentation">
                                                            <label class="nav-link radio-label active" id="grafik-pickup-1-cur" data-bs-toggle="tab" data-bs-target="#grafik-pickup-1-tab-cur" role="tab" aria-controls="home" aria-selected="true">
                                                                <div >Звичайний графік роботи</div>
                                                                <input type="radio" name="schedule_work_type" checked value="1">
                                                            </label>
                                                        </li>
                                                        <li class="nav-item tab_pane-2-cl" role="presentation">
                                                            <label class="nav-link radio-label" id="grafik-pickup-2-cur" data-bs-toggle="tab" data-bs-target="#grafik-pickup-2-tab-cur" role="tab" aria-controls="profile" aria-selected="false">
                                                                <div >Графік роботи по дням</div>
                                                                <input type="radio" name="schedule_work_type" value="2">
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content w-100 m-10 m-b-20" id="grafik-selfpickup">
                                                        <div class="tab-pane tab_pane-1 fade show active" id="grafik-pickup-1-tab-cur" role="tabpanel" aria-labelledby="grafik-pickup-1-tab-cur">
                                                            <div class="flex cilo-t w-100">
                                                                <div class="relative m-20 w-100">
                                                                    <div class="heading-white">
                                                                        <span class="relative bg-white">З понеділка по п'ятницю</span>
                                                                    </div>
                                                                </div>
                                                                <div class="time-div w-33">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>З</small>
                                                                    <input type='time' name="export_time_all_work_day_start" class="input_1"/>
                                                                </div>
                                                                <div class="time-div w-33">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' name="export_time_all_work_day_end" class="input_2"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name="export_around_the_clock" class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                    <input type='time' name="export_time_all_weekend_start" class="input_1"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' name="export_time_all_weekend_end" class="input_2"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n input-cur-24">
                                                                        <span class="filter-attribute-label ib-m">
                                                                            24/7
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane tab_pane-2 fade" id="grafik-pickup-2-tab-cur" role="tabpanel" aria-labelledby="grafik-pickup-2-tab-cur">
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
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                    <label class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name="" class="filter-attribute-checkbox input-d-n input-cur-24">
                                                                        <span class="filter-attribute-label ib-m">
                                                                        24/7
                                                                    </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="label-word">
                                                <h2>Умови доставки</h2>
                                            </div>
                                            <div class="relative">
                                                <div class="heading-white">
                                                    <span class="relative bg-white">Введіть час найближчої доставки після замовлення</span>
                                                </div>
                                            </div>
                                            <div class="checkbox-div flex">
                                                <div class="time-text align-center just-center w-100 relative">
                                                    <div class="req-div align-center">
                                                        <p>через</p>
                                                        <span class="req-span">
                                                            *Обов'язкове поле
                                                        </span>
                                                        <input class="form-input form-number required-input" type="number" min="0" name="waiting_for_delivery" value="">
                                                        <p>хвилин</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="relative">
                                                <div class="heading-white">
                                                    <span class="relative bg-white">Доставка у точний час</span>
                                                </div>
                                                <h5 class="m-10 just-center">*якщо ви вокристовуєте кур'єра іншої компанії швидкість доставки може відрізнятися</h5>
                                            </div>
                                            <div class="checkbox-div flex">
                                                <label class="w-50 filter-attribute-item">
                                                    <input type="radio" name="delivery_right_time" class="filter-attribute-checkbox ib-m" value="1">
                                                    <span class="filter-attribute-label ib-m just-center">
                                                    Так
                                                </span>
                                                </label>
                                                <label class="w-50 filter-attribute-item">
                                                    <input type="radio" name="delivery_right_time" class="filter-attribute-checkbox ib-m" value="0">
                                                    <span class="filter-attribute-label ib-m just-center">
                                                    Ні
                                                </span>
                                                </label>
                                            </div>
                                            <div class="checkbox-div flex cur-24-box">
                                                <div class="default-setting">
                                                    <div class="relative w-100">
                                                        <div class="heading-white">
                                                            <span class="relative bg-white">Вартість доставки</span>
                                                        </div>
                                                        <h5 class="m-10 just-center">*введіть ціну доставки звичним тарифом
                                                        </h5>
                                                    </div>
                                                    <div class="time-text align-center just-center w-100 relative">
                                                        <div class="req-div align-center">
                                                        <span class="req-span">
                                                            *Обов'язкове поле
                                                        </span>
                                                            <input class="form-input form-number add-req" type="number" min="0" name="cost_of_delivery" value="">
                                                            <p>грн</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="more-setting">
                                                    <div class="heading-white w-100">
                                                        <span class="relative bg-white">Налаштування вартості доставки</span>
                                                    </div>
                                                    <h5 class="m-10 just-center w-100">*якщо ви використовуєте кур'єра який працює 24/7</h5>
                                                    <div class="time-text align-center just-center w-100 m-10 relative">
                                                        <p>Денний тариф</p>
                                                        <div class="req-div">
                                                        <span class="req-span">
                                                            *Обов'язкове поле
                                                        </span>
                                                            <input class="form-input form-number add-req" type="number" min="0" value="">
                                                        </div>
                                                        <p>грн</p>
                                                    </div>
                                                    <div class="time-text align-center just-center w-100 m-10 relative">
                                                        <p>Вечірній тариф</p>
                                                        <div class="req-div">
                                                        <span class="req-span">
                                                            *Обов'язкове поле
                                                        </span>
                                                            <input class="form-input form-number add-req" type="number" min="0" value="" name="cost_of_delivery_evening">
                                                        </div>
                                                        <p>грн</p>
                                                    </div>
                                                    <div class="time-text align-center just-center w-100 m-10 relative">
                                                        <p>Нічний тариф</p>
                                                        <div class="req-div">
                                                        <span class="req-span">
                                                            *Обов'язкове поле
                                                        </span>
                                                            <input class="form-input form-number add-req" type="number" min="0" value="" name="cost_of_delivery_night">
                                                        </div>
                                                        <p>грн</p>
                                                    </div>
                                                    <div class="flex m-10 w-100">
                                                        <h5 class="m-10 just-center w-100">*ціна доставки може відрізнятися в залежності від ціни букета</h5>
                                                        <div class="time-text align-center just-center w-50 relative">
                                                            <p>Якщо ціна до</p>
                                                            <div class="req-div">
                                                            <span class="req-span">
                                                                *Обов'язкове поле
                                                            </span>
                                                                <input class="form-input form-number add-req" type="number" min="0" value="" name="price_max_bouquet">
                                                            </div>
                                                            <p>грн</p>
                                                        </div>
                                                        <div class="time-text align-center just-center w-50 relative">
                                                            <p>Вартість доставки</p>
                                                            <div class="req-div">
                                                            <span class="req-span">
                                                                *Обов'язкове поле
                                                            </span>
                                                                <input class="form-input form-number add-req" type="number" min="0" value="" name="price_max_delivery">
                                                            </div>
                                                            <p>грн</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="label-word">
                                            <h2>Умови оплати</h2>
                                        </div>
                                        <div class="checkbox-div flex">
                                            <label class="w-100 filter-attribute-item">
                                                <input type="checkbox" name="payment_by_details" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                    Оплата за реквізитами
                                                </span>
                                            </label>
                                            <div class="parent-input add-parent">
                                                <label class="w-100 filter-attribute-item shadow-on part-label">
                                                    <input type="checkbox" name="prepayment" class="filter-attribute-checkbox ib-m sh input-part">
                                                    <span class="filter-attribute-label ib-m">
                                                        Часткова передплата
                                                    </span>
                                                </label>
                                                <div class="shadow-bl">
                                                    <div class="req-div flex align-center">
                                                        <span class="req-span">
                                                            *Обов'язкове поле
                                                        </span>
                                                        <input class="form-input form-number add-req" type="number" min="0" placeholder="" name="prepayment_sum">
                                                        <p>грн</p><p style="font-size: 12px;">Передплата яку повинен внести покупець якщо букет дорожчий ніж *** грн</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="parent-input">
                                                <label class="w-100 filter-attribute-item shadow-on-2">
                                                    <input type="checkbox" name="payment_courier" class="filter-attribute-checkbox ib-m sh-2">
                                                    <span class="filter-attribute-label ib-m">
                                                        Оплата при отриманні
                                                    </span>
                                                </label>
                                                <div class="shadow-bl-2 w-100">
                                                    <label class="w-100 filter-attribute-item">
                                                        <input type="checkbox" name="payment_courier_cash" class="filter-attribute-checkbox ib-m">
                                                        <span class="filter-attribute-label ib-m">
                                                            Готівкою кур`єру
                                                        </span>
                                                    </label>
                                                    <label class="w-100 filter-attribute-item">
                                                        <input type="checkbox" name="payment_courier_bank" class="filter-attribute-checkbox ib-m">
                                                        <span class="filter-attribute-label ib-m">
                                                            Через термінал
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <label class="w-100 filter-attribute-item">
                                                <input type="checkbox" name="cashless_payments" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                    Безготівковий розрахунок для юридичної особи
                                                </span>
                                            </label>
                                            <label class="w-100 filter-attribute-item">
                                                <input type="checkbox" name="crypto_payments" class="filter-attribute-checkbox ib-m">
                                                <span class="filter-attribute-label ib-m">
                                                    Криптовалюта
                                                </span>
                                            </label>
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
