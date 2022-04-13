@extends('layouts.app')
@section('content')
    <section class="personal-cab">
        <div class="content">
            <div class="profile-container flex">
                <div class="align-center just-center w-100">
                    <h1 class="profile-mob-title">Кабінет користувача!!</h1>
                </div>
                <div class="set-div flex w-100 setting-profile-tab">
                    @include('profile.menu')
                    <div class="profile-info">
                        <div class="contacts-container grid bottom-tier">
                            <div class="contacts-form-main-wrapper">
                                <div class="heading-cab">
                                    <h2>Редагування бренду</h2>
                                </div>
                                <div class="shop-edit">
                                    <form class="reg-mag" method="POST"
                                          action="{{ route('shop.city.update', [app()->getLocale(), $point]) }}">
                                        @csrf
                                        <div class="">
                                            <div class="label-word">
                                                <h2>Місто магазину</h2>
                                            </div>
                                            <select class="form-input required-input" style="height: 45px;">
                                                @foreach($cities as $city)
                                                    @if($city->id == $point->city_id)
                                                        <option value="{{ $city->id }}"
                                                                selected>{{ $city->title }}</option>
                                                    @else
                                                        <option value="{{ $city->id }}">{{ $city->title }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="">
                                            <div class="label-word">
                                                <h2>Менеджер магазину</h2>
                                            </div>
                                            <div class="city-select city-select-pop">
                                                <div class="select select-parent relative">
                                                    <input type="hidden" class="select-inp" name="manager_id">
                                                    <button class="btn main-btn select-btn before-chevron" type="button"
                                                            id="manager-2" data-bs-toggle="dropdown">
                                                        Manager
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="manager-2">
                                                        @foreach($staffs as $staff)
                                                            <li>
                                                                <a role="menuitem" class="select-item" tabindex="-2"
                                                                   href="#"
                                                                   data-city="{{ $staff->id }}">{{ $staff->name }}</a>
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
                                                        <span class="relative bg-white">Вкажіть графік роботи</span>
                                                    </div>
                                                </div>
                                                <div class="checkbox-div">
                                                    <ul class="nav nav-tabs" id="myTab-3" role="tablist">
                                                        <li class="nav-item tab_pane-1-cl" role="presentation">
                                                            <label
                                                                class="nav-link radio-label @if($point->schedule_work_type == 1) active @endif"
                                                                id="grafik-pickup-1" data-bs-toggle="tab"
                                                                data-bs-target="#grafik-pickup-1-tab" role="tab"
                                                                aria-controls="home" aria-selected="true">
                                                                <div>Звичайний графік роботи</div>
                                                                <input type="radio" name="schedule_work_type"
                                                                       @if($point->schedule_work_type == 1) checked
                                                                       @endif value="1">
                                                            </label>
                                                        </li>
                                                        <li class="nav-item tab_pane-2-cl" role="presentation">
                                                            <label
                                                                class="nav-link radio-label @if($point->schedule_work_type == 2) active @endif"
                                                                id="grafik-pickup-2" data-bs-toggle="tab"
                                                                data-bs-target="#grafik-pickup-2-tab" role="tab"
                                                                aria-controls="profile" aria-selected="false">
                                                                <div>Графік роботи по дням</div>
                                                                <input type="radio" name="schedule_work_type" value="2"
                                                                       @if($point->schedule_work_type == 2) checked @endif>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content w-100 m-10 m-b-20" id="grafik-selfpickup">
                                                        <div
                                                            class="tab-pane tab_pane-1 fade @if($point->schedule_work_type == 1) show  active @endif"
                                                            id="grafik-pickup-1-tab" role="tabpanel"
                                                            aria-labelledby="grafik-pickup-1-tab">
                                                            <div class="flex cilo-t w-100">
                                                                <div class="relative m-20 w-100">
                                                                    <div class="heading-white">
                                                                        <span class="relative bg-white">З понеділка по п'ятницю</span>
                                                                    </div>
                                                                </div>
                                                                <div class="time-div w-33">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>З</small>
                                                                    <input type='time'
                                                                           name="export_time_all_work_day_start"
                                                                           class="input_1"
                                                                           value="{{ $point->export_work_shop_1_start }}"/>
                                                                </div>
                                                                <div class="time-div w-33">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time'
                                                                           name="export_time_all_work_day_end"
                                                                           class="input_2"
                                                                           value="{{ $point->export_work_shop_1_end }}"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label
                                                                        class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox"
                                                                               name="export_around_the_clock"
                                                                               class="filter-attribute-checkbox input-d-n input-cur-24"
                                                                               @if($point->export_work_shop_1_start == '00:00' && $point->export_work_shop_1_end == '23:59') checked @endif>
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
                                                                    <input type='time'
                                                                           name="export_time_all_weekend_start"
                                                                           class="input_1"
                                                                           value="{{ $point->export_work_shop_6_start }}"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time'
                                                                           name="export_time_all_weekend_end"
                                                                           class="input_2"
                                                                           value="{{ $point->export_work_shop_6_end }}"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label
                                                                        class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name=""
                                                                               class="filter-attribute-checkbox input-d-n input-cur-24"
                                                                               @if($point->export_work_shop_6_start == '00:00' && $point->export_work_shop_6_end == '23:59') checked @endif>
                                                                        <span class="filter-attribute-label ib-m">
                                       24/7
                                       </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="tab-pane tab_pane-2 fade @if($point->schedule_work_type == 2) show  active @endif"
                                                            id="grafik-pickup-2-tab" role="tabpanel"
                                                            aria-labelledby="grafik-pickup-2-tab">
                                                            <div class="flex cilo-t w-100">
                                                                <div class="relative m-10 w-100">
                                                                    <div class="heading-white">
                                                                        <span class="relative bg-white">Понеділок</span>
                                                                    </div>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>З</small>
                                                                    <input type='time'
                                                                           name="export_time_work_day_start_1"
                                                                           class="input_1"
                                                                           value="{{ $point->export_work_shop_1_start }}"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' name="export_time_work_day_end_1"
                                                                           class="input_2"
                                                                           value="{{ $point->export_work_shop_1_end }}"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label
                                                                        class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name=""
                                                                               class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                    <input type='time'
                                                                           name="export_time_work_day_start_2"
                                                                           class="input_1"
                                                                           value="{{ $point->export_work_shop_2_start }}"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' name="export_time_work_day_end_2"
                                                                           class="input_2"
                                                                           value="{{ $point->export_work_shop_2_end }}"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label
                                                                        class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name=""
                                                                               class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                    <input type='time'
                                                                           name="export_time_work_day_start_3"
                                                                           class="input_1"
                                                                           value="{{ $point->export_work_shop_3_start }}"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' name="export_time_work_day_end_3"
                                                                           class="input_2"
                                                                           value="{{ $point->export_work_shop_3_end }}"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label
                                                                        class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name=""
                                                                               class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                    <input type='time'
                                                                           name="export_time_work_day_start_4"
                                                                           class="input_1"
                                                                           value="{{ $point->export_work_shop_4_start }}"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' name="export_time_work_day_end_4"
                                                                           class="input_2"
                                                                           value="{{ $point->export_work_shop_4_end }}"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label
                                                                        class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name=""
                                                                               class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                    <input type='time'
                                                                           name="export_time_work_day_start_5"
                                                                           class="input_1"
                                                                           value="{{ $point->export_work_shop_5_start }}"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' name="export_time_work_day_end_5"
                                                                           class="input_2"
                                                                           value="{{ $point->export_work_shop_5_end }}"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label
                                                                        class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name=""
                                                                               class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                    <input type='time'
                                                                           name="export_time_work_day_start_6"
                                                                           class="input_1"
                                                                           value="{{ $point->export_work_shop_6_start }}"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' name="export_time_work_day_end_6"
                                                                           class="input_2"
                                                                           value="{{ $point->export_work_shop_6_end }}"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label
                                                                        class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name=""
                                                                               class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                    <input type='time'
                                                                           name="export_time_work_day_start_7"
                                                                           class="input_1"
                                                                           value="{{ $point->export_work_shop_7_start }}"/>
                                                                </div>
                                                                <div class="time-div">
                                                                    <label for="appt">Вкажіть час:</label>
                                                                    <small>До</small>
                                                                    <input type='time' name="export_time_work_day_end_7"
                                                                           class="input_2"
                                                                           value="{{ $point->export_work_shop_7_end }}"/>
                                                                </div>
                                                                <div class="w-33 m-10">
                                                                    <small>Цілодобово</small>
                                                                    <label
                                                                        class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                        <input type="checkbox" name=""
                                                                               class="filter-attribute-checkbox input-d-n input-cur-24">
                                                                        <span class="filter-attribute-label ib-m">
                                       24/7
                                       </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- kurier -->
                                                        <div class="label-word" style="margin-top: 15px;">
                                                            <h2>Кур'єр</h2>
                                                        </div>
                                                        <div class="your-shop relative">
                                                            <div class="relative">
                                                                <div class="heading-white">
                                                                    <span class="relative bg-white">Вкажіть графік роботи</span>
                                                                </div>
                                                            </div>
                                                            <div class="checkbox-div">
                                                                <ul class="nav nav-tabs" id="myTab-3" role="tablist">
                                                                    <li class="nav-item tab_pane-1-cl" role="presentation">
                                                                        <label
                                                                            class="nav-link radio-label @if($point->schedule_work_type == 1) active @endif"
                                                                            id="grafik-pickup-1" data-bs-toggle="tab"
                                                                            data-bs-target="#grafik-pickup-1-tab" role="tab"
                                                                            aria-controls="home" aria-selected="true">
                                                                            <div>Звичайний графік роботи</div>
                                                                            <input type="radio" name="schedule_work_type"
                                                                                   @if($point->schedule_work_type == 1) checked
                                                                                   @endif value="1">
                                                                        </label>
                                                                    </li>
                                                                    <li class="nav-item tab_pane-2-cl" role="presentation">
                                                                        <label
                                                                            class="nav-link radio-label @if($point->schedule_work_type == 2) active @endif"
                                                                            id="grafik-pickup-2" data-bs-toggle="tab"
                                                                            data-bs-target="#grafik-pickup-2-tab" role="tab"
                                                                            aria-controls="profile" aria-selected="false">
                                                                            <div>Графік роботи по дням</div>
                                                                            <input type="radio" name="schedule_work_type" value="2"
                                                                                   @if($point->schedule_work_type == 2) checked @endif>
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <div class="tab-content w-100 m-10 m-b-20" id="grafik-selfpickup">
                                                                    <div
                                                                        class="tab-pane tab_pane-1 fade @if($point->schedule_work_type == 1) show  active @endif"
                                                                        id="grafik-pickup-1-tab" role="tabpanel"
                                                                        aria-labelledby="grafik-pickup-1-tab">
                                                                        <div class="flex cilo-t w-100">
                                                                            <div class="relative m-20 w-100">
                                                                                <div class="heading-white">
                                                                                    <span class="relative bg-white">З понеділка по п'ятницю</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="time-div w-33">
                                                                                <label for="appt">Вкажіть час:</label>
                                                                                <small>З</small>
                                                                                <input type='time'
                                                                                       name="export_time_all_work_day_start"
                                                                                       class="input_1"
                                                                                       value="{{ $point->export_work_shop_1_start }}"/>
                                                                            </div>
                                                                            <div class="time-div w-33">
                                                                                <label for="appt">Вкажіть час:</label>
                                                                                <small>До</small>
                                                                                <input type='time'
                                                                                       name="export_time_all_work_day_end"
                                                                                       class="input_2"
                                                                                       value="{{ $point->export_work_shop_1_end }}"/>
                                                                            </div>
                                                                            <div class="w-33 m-10">
                                                                                <small>Цілодобово</small>
                                                                                <label
                                                                                    class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                                    <input type="checkbox"
                                                                                           name="export_around_the_clock"
                                                                                           class="filter-attribute-checkbox input-d-n input-cur-24"
                                                                                           @if($point->export_work_shop_1_start == '00:00' && $point->export_work_shop_1_end == '23:59') checked @endif>
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
                                                                                <input type='time'
                                                                                       name="export_time_all_weekend_start"
                                                                                       class="input_1"
                                                                                       value="{{ $point->export_work_shop_6_start }}"/>
                                                                            </div>
                                                                            <div class="time-div">
                                                                                <label for="appt">Вкажіть час:</label>
                                                                                <small>До</small>
                                                                                <input type='time'
                                                                                       name="export_time_all_weekend_end"
                                                                                       class="input_2"
                                                                                       value="{{ $point->export_work_shop_6_end }}"/>
                                                                            </div>
                                                                            <div class="w-33 m-10">
                                                                                <small>Цілодобово</small>
                                                                                <label
                                                                                    class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                                    <input type="checkbox" name=""
                                                                                           class="filter-attribute-checkbox input-d-n input-cur-24"
                                                                                           @if($point->export_work_shop_6_start == '00:00' && $point->export_work_shop_6_end == '23:59') checked @endif>
                                                                                    <span class="filter-attribute-label ib-m">
                                                24/7
                                                </span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="tab-pane tab_pane-2 fade @if($point->schedule_work_type == 2) show  active @endif"
                                                                        id="grafik-pickup-2-tab" role="tabpanel"
                                                                        aria-labelledby="grafik-pickup-2-tab">
                                                                        <div class="flex cilo-t w-100">
                                                                            <div class="relative m-10 w-100">
                                                                                <div class="heading-white">
                                                                                    <span class="relative bg-white">Понеділок</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="time-div">
                                                                                <label for="appt">Вкажіть час:</label>
                                                                                <small>З</small>
                                                                                <input type='time'
                                                                                       name="export_time_work_day_start_1"
                                                                                       class="input_1"
                                                                                       value="{{ $point->export_work_shop_1_start }}"/>
                                                                            </div>
                                                                            <div class="time-div">
                                                                                <label for="appt">Вкажіть час:</label>
                                                                                <small>До</small>
                                                                                <input type='time' name="export_time_work_day_end_1"
                                                                                       class="input_2"
                                                                                       value="{{ $point->export_work_shop_1_end }}"/>
                                                                            </div>
                                                                            <div class="w-33 m-10">
                                                                                <small>Цілодобово</small>
                                                                                <label
                                                                                    class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                                    <input type="checkbox" name=""
                                                                                           class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                                <input type='time'
                                                                                       name="export_time_work_day_start_2"
                                                                                       class="input_1"
                                                                                       value="{{ $point->export_work_shop_2_start }}"/>
                                                                            </div>
                                                                            <div class="time-div">
                                                                                <label for="appt">Вкажіть час:</label>
                                                                                <small>До</small>
                                                                                <input type='time' name="export_time_work_day_end_2"
                                                                                       class="input_2"
                                                                                       value="{{ $point->export_work_shop_2_end }}"/>
                                                                            </div>
                                                                            <div class="w-33 m-10">
                                                                                <small>Цілодобово</small>
                                                                                <label
                                                                                    class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                                    <input type="checkbox" name=""
                                                                                           class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                                <input type='time'
                                                                                       name="export_time_work_day_start_3"
                                                                                       class="input_1"
                                                                                       value="{{ $point->export_work_shop_3_start }}"/>
                                                                            </div>
                                                                            <div class="time-div">
                                                                                <label for="appt">Вкажіть час:</label>
                                                                                <small>До</small>
                                                                                <input type='time' name="export_time_work_day_end_3"
                                                                                       class="input_2"
                                                                                       value="{{ $point->export_work_shop_3_end }}"/>
                                                                            </div>
                                                                            <div class="w-33 m-10">
                                                                                <small>Цілодобово</small>
                                                                                <label
                                                                                    class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                                    <input type="checkbox" name=""
                                                                                           class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                                <input type='time'
                                                                                       name="export_time_work_day_start_4"
                                                                                       class="input_1"
                                                                                       value="{{ $point->export_work_shop_4_start }}"/>
                                                                            </div>
                                                                            <div class="time-div">
                                                                                <label for="appt">Вкажіть час:</label>
                                                                                <small>До</small>
                                                                                <input type='time' name="export_time_work_day_end_4"
                                                                                       class="input_2"
                                                                                       value="{{ $point->export_work_shop_4_end }}"/>
                                                                            </div>
                                                                            <div class="w-33 m-10">
                                                                                <small>Цілодобово</small>
                                                                                <label
                                                                                    class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                                    <input type="checkbox" name=""
                                                                                           class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                                <input type='time'
                                                                                       name="export_time_work_day_start_5"
                                                                                       class="input_1"
                                                                                       value="{{ $point->export_work_shop_5_start }}"/>
                                                                            </div>
                                                                            <div class="time-div">
                                                                                <label for="appt">Вкажіть час:</label>
                                                                                <small>До</small>
                                                                                <input type='time' name="export_time_work_day_end_5"
                                                                                       class="input_2"
                                                                                       value="{{ $point->export_work_shop_5_end }}"/>
                                                                            </div>
                                                                            <div class="w-33 m-10">
                                                                                <small>Цілодобово</small>
                                                                                <label
                                                                                    class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                                    <input type="checkbox" name=""
                                                                                           class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                                <input type='time'
                                                                                       name="export_time_work_day_start_6"
                                                                                       class="input_1"
                                                                                       value="{{ $point->export_work_shop_6_start }}"/>
                                                                            </div>
                                                                            <div class="time-div">
                                                                                <label for="appt">Вкажіть час:</label>
                                                                                <small>До</small>
                                                                                <input type='time' name="export_time_work_day_end_6"
                                                                                       class="input_2"
                                                                                       value="{{ $point->export_work_shop_6_end }}"/>
                                                                            </div>
                                                                            <div class="w-33 m-10">
                                                                                <small>Цілодобово</small>
                                                                                <label
                                                                                    class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                                    <input type="checkbox" name=""
                                                                                           class="filter-attribute-checkbox input-d-n input-cur-24">
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
                                                                                <input type='time'
                                                                                       name="export_time_work_day_start_7"
                                                                                       class="input_1"
                                                                                       value="{{ $point->export_work_shop_7_start }}"/>
                                                                            </div>
                                                                            <div class="time-div">
                                                                                <label for="appt">Вкажіть час:</label>
                                                                                <small>До</small>
                                                                                <input type='time' name="export_time_work_day_end_7"
                                                                                       class="input_2"
                                                                                       value="{{ $point->export_work_shop_7_end }}"/>
                                                                            </div>
                                                                            <div class="w-33 m-10">
                                                                                <small>Цілодобово</small>
                                                                                <label
                                                                                    class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
                                                                                    <input type="checkbox" name=""
                                                                                           class="filter-attribute-checkbox input-d-n input-cur-24">
                                                                                    <span class="filter-attribute-label ib-m">
                                                24/7
                                                </span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="order-options" style="margin-top: 10px;">
                                                                        <h2>Умови доставки</h2>
                                                                        <div class="heading-white">
                                                                            <span class="relative bg-white">ввести годину найближчої доставки листа замовлення</span>
                                                                        </div>
                                                                        <div class="order-options-form align-center just-center"
                                                                             style="margin: auto;">
                                                                            через <input style="width: 8%" value="120"
                                                                                         class="form-input required-input"
                                                                                         type="number" name="order_time" min="1">
                                                                            хвилин
                                                                        </div>
                                                                    </div>
                                                                    <div class="real-hour-time">
                                                                        <div class="heading-white">
                                             <span
                                                 class="relative bg-white">Доставка точний час</span>
                                                                        </div>
                                                                        <div style="
                                             display: flex;
                                             justify-content: center;
                                             ">
                                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting</span>
                                                                        </div>
                                                                        <div class="real-hour-time-btns"
                                                                             style="justify-content: center; display: flex; margin-left: 300px; margin-top: 20px; margin-bottom: 10px;">
                                                                            <label
                                                                                class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label"
                                                                                style="">
                                                                                <input type="checkbox" name=""
                                                                                       class="filter-attribute-checkbox input-d-n input-cur-24">
                                                                                <span class="filter-attribute-label ib-m">
                                             Так
                                             </span>
                                                                            </label>
                                                                            <label
                                                                                class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label"
                                                                                style="">
                                                                                <input type="checkbox" name=""
                                                                                       class="filter-attribute-checkbox input-d-n input-cur-24">
                                                                                <span class="filter-attribute-label ib-m">
                                             Ні
                                             </span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="delivery-options">
                                                                            <div class="heading-white">
                                                <span
                                                    class="relative bg-white">Встановлення тарифу</span>
                                                                            </div>
                                                                            <div style="
                                                display: flex;
                                                justify-content: center;
                                                ">
                                                                                <span>Lorem Ipsum is simply dummy text of the printing and typesetting</span>
                                                                                <br>
                                                                            </div>
                                                                            <div
                                                                                class="delivery-options-form align-center just-center"
                                                                                style="margin: auto;">
                                                                                <span style="margin-right: 13px;">Добний тариф</span> <input style="width: 8%" value="120"
                                                                                                                                             class="form-input required-input"
                                                                                                                                             type="number" name="dattariff"
                                                                                                                                             min="1">
                                                                                <span class="tariff-currency" style="margin-left: 150px;">грн</span>
                                                                            </div>
                                                                            <br>
                                                                            <div
                                                                                class="delivery-options-form align-center just-center">
                                                                                <span style="margin-right: 13px;">вечірній тариф</span> <input style="width: 8%" value="120"
                                                                                                                                               class="form-input required-input"
                                                                                                                                               type="number" name="evenintariff" min="1">
                                                                                <span class="tariff-currency" style="margin-left: 150px;">грн</span>
                                                                            </div>
                                                                            <br>
                                                                            <div class="delivery-options-form align-center just-center">
                                                                                <span style="margin-right: 13px;">нічний тариф</span> <input style="width: 8%" value="120"
                                                                                                                                             class="form-input required-input"
                                                                                                                                             type="number" name="nighttariff" min="1">
                                                                                <span class="tariff-currency" style="margin-left: 150px;">грн</span>
                                                                            </div>
                                                                            <div class="prices">
                                                                                <div class="delivery-options-form" style="margin-left: 300px;">
                                                                                    <span style="margin-right: 13px;">Якшо ціна до</span> <input style="width: 8%" value="120"
                                                                                                                                                 class="form-input required-input"
                                                                                                                                                 type="number" name="price-old" min="1">
                                                                                    <span class="tariff-currency" style="margin-left: 30px;">грн</span>
                                                                                    <span style="margin-left: 15px;">Вартісні доставки</span> <input style="width: 8%" value="120"
                                                                                                                                                      class="form-input required-input"
                                                                                                                                                      type="number" name="price-old" min="1">
                                                                                    <span class="tariff-currency" style="margin-left: 30px;">грн</span>
                                                                                </div>
                                                                                <div class="payment-options">
                                                                                    <h2 class="relative bg-white">Варіанти оплати</h2>
                                                                                    <div class="payment-options-form" style="margin-left: 25px;">
                                                                                        <label
                                                                                            class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label"
                                                                                            style="">
                                                                                            <input type="checkbox" name=""
                                                                                                   class="filter-attribute-checkbox input-d-n input-cur-24">
                                                                                            <span class="filter-attribute-label ib-m">
                                                      варіант 1
                                                      </span>
                                                                                        </label>
                                                                                        <label
                                                                                            class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label"
                                                                                            style="">
                                                                                            <input type="checkbox" name=""
                                                                                                   class="filter-attribute-checkbox input-d-n input-cur-24">
                                                                                            <span class="filter-attribute-label ib-m">
                                                      варіант 2
                                                      </span>
                                                                                        </label>
                                                                                        <label
                                                                                            class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label"
                                                                                            style="">
                                                                                            <input type="checkbox" name=""
                                                                                                   class="filter-attribute-checkbox input-d-n input-cur-24">
                                                                                            <span class="filter-attribute-label ib-m">
                                                      варіант 3
                                                      </span>
                                                                                        </label>
                                                                                        <label
                                                                                            class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label"
                                                                                            style="">
                                                                                            <input type="checkbox" name=""
                                                                                                   class="filter-attribute-checkbox input-d-n input-cur-24">
                                                                                            <span class="filter-attribute-label ib-m">
                                                      варіант 4
                                                      </span>
                                                                                        </label>
                                                                                        <label
                                                                                            class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label"
                                                                                            style="">
                                                                                            <input type="checkbox" name=""
                                                                                                   class="filter-attribute-checkbox input-d-n input-cur-24">
                                                                                            <span class="filter-attribute-label ib-m">
                                                      варіант 5
                                                      </span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
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
