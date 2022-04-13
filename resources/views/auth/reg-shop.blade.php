@extends('layouts.app')

@section('content')
	<div class="content page-req-shop">
	    <form class="reg-mag step-2 step @if(!$shop) active @endif" method="POST" action="{{ route('register.shop.step', [app()->getLocale(), 1]) }}" id="register-shop-step-1">
            @csrf

	        <div class="">
	            <div class="step-word">
	                <h3>Крок <span class="index-step_current">1</span> з 4</h3>
	            </div>
	            <div class="progress-step step-p-1">

	            </div>
	            <div class="label-word">
	                <h2>Графік обробки замовлень</h2>
	            </div>
	            <div class="checkbox-div">
	                <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item tab_pane-1-cl" role="presentation">
                            <label class="nav-link radio-label active" id="grafik-1" data-bs-toggle="tab" data-bs-target="#grafik-1-tab" role="tab" aria-controls="home" aria-selected="true">
                                <div >Звичайний графік роботи</div>
                                <input type="radio" name="shedule-work" checked>
                            </label>
                        </li>
                        <li class="nav-item tab_pane-2-cl" role="presentation">
                            <label class="nav-link radio-label" id="grafik-2" data-bs-toggle="tab" data-bs-target="#grafik-2-tab" role="tab" aria-controls="profile" aria-selected="false">
                                <div >Графік роботи по дням</div>
                                <input type="radio" name="shedule-work">
                            </label>
                        </li>
                    </ul>
	                <div class="tab-content w-100 m-10 m-b-20" id="grafik-zamovlen">
	                    <div class="tab-pane tab_pane-1 fade show active" id="grafik-1-tab" role="tabpanel" aria-labelledby="grafik-1tab">
	                        <div class="flex cilo-t w-100">
	                            <div class="relative m-20 w-100">
	                                <div class="heading-white">
	                                    <span class="relative bg-white">З понеділка по п'ятницю</span>
	                                </div>
	                            </div>
	                            <div class="time-div w-33">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>З</small>
	                                <input type='time' class="input_1" name="time_all_work_day_start"/>
	                            </div>
	                            <div class="time-div w-33">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>До</small>
	                                <input type='time' class="input_2" name="time_all_work_day_end"/>
	                            </div>
	                            <div class="w-33 m-10">
	                                <small>Цілодобово</small>
	                                <label class="w-100 filter-attribute-item m-10 day_and_night">
	                                    <input type="checkbox" name="around_the_clock_weekdays" class="filter-attribute-checkbox input-d-n">
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
	                                <input type='time' class="input_1" name="time_all_weekend_start"/>
	                            </div>
	                            <div class="time-div">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>До</small>
	                                <input type='time' class="input_2" name="time_all_weekend_end"/>
	                            </div>
	                            <div class="w-33 m-10">
	                                <small>Цілодобово</small>
	                                <label class="w-100 filter-attribute-item m-10 day_and_night">
	                                    <input type="checkbox" name="around_the_clock_weekend" class="filter-attribute-checkbox input-d-n">
	                                    <span class="filter-attribute-label ib-m">
	                                        24/7
	                                    </span>
	                                </label>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="tab-pane tab_pane-2 fade" id="grafik-2-tab" role="tabpanel" aria-labelledby="grafik-2tab">
	                         <div class="flex cilo-t w-100">
	                            <div class="relative m-10 w-100">
	                                <div class="heading-white">
	                                    <span class="relative bg-white">Понеділок</span>
	                                </div>
	                            </div>
	                            <div class="time-div">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>З</small>
	                                <input type='time' class="input_1" name="time_work_day_start_1"/>
	                            </div>
	                            <div class="time-div">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>До</small>
	                                <input type='time' class="input_2" name="time_work_day_end_1"/>
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
	                                <input type='time' class="input_1" name="time_work_day_start_2"/>
	                            </div>
	                            <div class="time-div">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>До</small>
	                                <input type='time' class="input_2" name="time_work_day_end_2"/>
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
	                                <input type='time' class="input_1" name="time_work_day_start_3"/>
	                            </div>
	                            <div class="time-div">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>До</small>
	                                <input type='time' class="input_2" name="time_work_day_end_3"/>
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
	                                <input type='time' class="input_1" name="time_work_day_start_4"/>
	                            </div>
	                            <div class="time-div">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>До</small>
	                                <input type='time' class="input_2" name="time_work_day_end_4"/>
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
	                                <input type='time' class="input_1" name="time_work_day_start_5"/>
	                            </div>
	                            <div class="time-div">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>До</small>
	                                <input type='time' class="input_2" name="time_work_day_end_5"/>
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
	                                <input type='time' class="input_1" name="time_work_day_start_6"/>
	                            </div>
	                            <div class="time-div">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>До</small>
	                                <input type='time' class="input_2" name="time_work_day_end_6"/>
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
	                                <input type='time' class="input_1" name="time_work_day_start_7"/>
	                            </div>
	                            <div class="time-div">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>До</small>
	                                <input type='time' class="input_2" name="time_work_day_end_7"/>
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

	            <div class="label-word">
	                <h2>Графік роботи кур`єра</h2>
	            </div>
	            <div class="checkbox-div">
	                <ul class="nav nav-tabs" id="myTab-2" role="tablist">
                        <li class="nav-item tab_pane-1-cl" role="presentation">
                            <label class="nav-link radio-label active" id="grafik-curier-1" data-bs-toggle="tab" data-bs-target="#grafik-curier-1-tab" role="tab" aria-controls="home" aria-selected="true">
                                <div >Звичайний графік роботи</div>
                                <input type="radio" name="shedule-work" checked>
                            </label>
                        </li>
                        <li class="nav-item tab_pane-2-cl" role="presentation">
                            <label class="nav-link radio-label" id="grafik-curier-2" data-bs-toggle="tab" data-bs-target="#grafik-curier-2-tab" role="tab" aria-controls="profile" aria-selected="false">
                                <div >Графік роботи по дням</div>
                                <input type="radio" name="shedule-work">
                            </label>
                        </li>
                    </ul>
	                <div class="tab-content w-100 m-10 m-b-20" id="grafik-curier">
	                    <div class="tab-pane tab_pane-1 fade show active" id="grafik-curier-1-tab" role="tabpanel" aria-labelledby="grafik-curier-1-tab">
	                        <div class="flex cilo-t w-100">
	                            <div class="relative m-20 w-100">
	                                <div class="heading-white">
	                                    <span class="relative bg-white">З понеділка по п'ятницю</span>
	                                </div>
	                            </div>
	                            <div class="time-div w-33">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>З</small>
	                                <input type='time' class="input_1" name="driver_time_all_work_day_start"/>
	                            </div>
	                            <div class="time-div w-33">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>До</small>
	                                <input type='time' class="input_2" name="driver_time_all_work_day_end"/>
	                            </div>
	                            <div class="w-33 m-10">
	                                <small>Цілодобово</small>
	                                <label class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
	                                    <input type="checkbox" name="driver_around_the_clock_weekdays" class="filter-attribute-checkbox input-d-n input-cur-24">
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
	                                <input type='time' class="input_1" name="driver_time_all_weekend_start"/>
	                            </div>
	                            <div class="time-div">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>До</small>
	                                <input type='time' class="input_2" name="driver_time_all_weekend_end"/>
	                            </div>
	                            <div class="w-33 m-10">
	                                <small>Цілодобово</small>
	                                <label class="w-100 filter-attribute-item m-10 day_and_night input-cur-24-label">
	                                    <input type="checkbox" name="driver_around_the_clock_weekend" class="filter-attribute-checkbox input-d-n input-cur-24">
	                                    <span class="filter-attribute-label ib-m">
	                                        24/7
	                                    </span>
	                                </label>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="tab-pane tab_pane-2 fade" id="grafik-curier-2-tab" role="tabpanel" aria-labelledby="grafik-curier-2-tab">
	                         <div class="flex cilo-t w-100">
	                            <div class="relative m-10 w-100">
	                                <div class="heading-white">
	                                    <span class="relative bg-white">Понеділок</span>
	                                </div>
	                            </div>
	                            <div class="time-div">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>З</small>
	                                <input type='time' class="input_1" name="driver_time_work_day_start_1"/>
	                            </div>
	                            <div class="time-div">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>До</small>
	                                <input type='time' class="input_2" name="driver_time_work_day_end_1"/>
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
	                                <input type='time' class="input_1" name="driver_time_work_day_start_2"/>
	                            </div>
	                            <div class="time-div">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>До</small>
	                                <input type='time' class="input_2" name="driver_time_work_day_end_2"/>
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
	                                <input type='time' class="input_1" name="driver_time_work_day_start_3"/>
	                            </div>
	                            <div class="time-div">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>До</small>
	                                <input type='time' class="input_2" name="driver_time_work_day_end_3"/>
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
	                                <input type='time' class="input_1" name="driver_time_work_day_start_4"/>
	                            </div>
	                            <div class="time-div">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>До</small>
	                                <input type='time' class="input_2" name="driver_time_work_day_end_4"/>
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
	                                <input type='time' class="input_1" name="driver_time_work_day_start_5"/>
	                            </div>
	                            <div class="time-div">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>До</small>
	                                <input type='time' class="input_2" name="driver_time_work_day_end_5"/>
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
	                                <input type='time' class="input_1" name="driver_time_work_day_start_6"/>
	                            </div>
	                            <div class="time-div">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>До</small>
	                                <input type='time' class="input_2" name="driver_time_work_day_end_6"/>
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
	                                <input type='time' class="input_1" name="driver_time_work_day_start_7"/>
	                            </div>
	                            <div class="time-div">
	                                <label for="appt">Вкажіть час:</label>
	                                <small>До</small>
	                                <input type='time' class="input_2" name="driver_time_work_day_end_7"/>
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
	            <div class="just-right">
	                <button class="main-btn main-blue click-step click-step-3">Далі</button>
	            </div>
	        </div>
	    </form>
	    <form class="reg-mag step-3 step @if($shop && !$shop->waiting_for_delivery) active @endif" method="POST" action="{{ route('register.shop.step', [app()->getLocale(), 2]) }}" id="register-shop-step-2">
	        @csrf
            <div class="">
	            <div class="step-word">
	                <h3>Крок <span class="index-step_current">2</span> з 4</h3>
	            </div>
	            <div class="label-word">
	                <h2>Вкажіть інформацію про доставку</h2>
	            </div>
	            <div class="progress-step step-p-2">

	            </div>
	            <div class="relative">
	                <div class="heading-white">
	                    <span class="relative bg-white">Введіть час найближчої доставки після замовлення</span>
	                </div>
	            </div>
	            <div class="checkbox-div flex">
	                <div class="time-text align-center just-center w-100">
	                    <p>через</p>
	                        <div class="req-div">
	                            <span class="req-span">
	                                *Обов'язкове поле
	                            </span>
	                            <input class="form-input form-number required-input" type="number" min="0" name="waiting_for_delivery">
	                        </div>
	                    <p>хвилин</p>
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
	                    <div class="time-text align-center just-center w-100">
	                        <input class="form-input form-number" type="number" min="0" name="cost_of_delivery">
	                        <p>грн</p>
	                    </div>
	                </div>
	                <div class="more-setting">
	                    <div class="heading-white w-100">
	                        <span class="relative bg-white">Налаштування вартості доставки</span>
	                    </div>
	                    <h5 class="m-10 just-center w-100">*якщо ви вокристовуєте кур'єра який працює 24/7</h5>
	                    <div class="time-text align-center just-center w-100 m-10">
	                        <p>Денний тариф</p>
	                        <div class="req-div">
	                            <span class="req-span">
	                                *Обов'язкове поле
	                            </span>
	                            <input class="form-input form-number add-req" type="number" min="0" name="cost_of_delivery_day">
	                        </div>
	                        <p>грн</p>
	                    </div>
	                    <div class="time-text align-center just-center w-100 m-10">
	                        <p>Вечірній тариф</p>
	                        <div class="req-div">
	                            <span class="req-span">
	                                *Обов'язкове поле
	                            </span>
	                            <input class="form-input form-number add-req" type="number" min="0" name="cost_of_delivery_evening">
	                        </div>
	                        <p>грн</p>
	                    </div>
	                    <div class="time-text align-center just-center w-100 m-10">
	                        <p>Нічний тариф</p>
	                        <div class="req-div">
	                            <span class="req-span">
	                                *Обов'язкове поле
	                            </span>
	                            <input class="form-input form-number add-req" type="number" min="0" name="cost_of_delivery_night">
	                        </div>
	                        <p>грн</p>
	                    </div>
	                    <div class="flex m-10 w-100">
	                        <h5 class="m-10 just-center w-100">*ціна доставки може відрізнятися в залежності від ціни букета</h5>
	                        <div class="time-text align-center just-center w-50">
	                            <p>Якщо ціна до</p>
	                            <div class="req-div">
	                                <span class="req-span">
	                                    *Обов'язкове поле
	                                </span>
	                                <input class="form-input form-number add-req" type="number" min="0" name="price_max_bouquet">
	                            </div>
	                            <p>грн</p>
	                        </div>
	                        <div class="time-text align-center just-center w-50">
	                            <p>Вартість доставки</p>
	                            <div class="req-div">
	                                <span class="req-span">
	                                    *Обов'язкове поле
	                                </span>
	                                <input class="form-input form-number add-req" type="number" min="0" name="price_max_delivery">
	                            </div>
	                            <p>грн</p>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="flex ">
	                <div class="w-50 just-left">
	                    <button class="main-btn click-step-back m-none">Назад</button>
	                </div>
	                <div class="w-50 just-right">
	                    <button class="main-btn main-blue click-step click-step-4 m-none">Далі</button>
	                </div>
	            </div>
	        </div>
	    </form>
	    <form class="reg-mag step-4 step @if($shop && $shop->waiting_for_delivery) active @endif" method="POST" action="{{ route('register.shop.step', [app()->getLocale(), 3]) }}">
	        @csrf
            <div class="">
	            <div class="step-word">
	                <h3>Крок <span class="index-step_current">3</span> з 4</h3>
	            </div>
	            <div class="label-word">
	                <h2>Вкажіть інформацію про оплату</h2>
	            </div>
	            <div class="progress-step step-p-3">

	            </div>
	            <div class="relative">
	                <div class="heading-white">
	                    <span class="relative bg-white">Отримувач - Покупець</span>
	                </div>
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
	            </div>
	            <div class="relative">
	                <div class="heading-white">
	                    <span class="relative bg-white">Отримувач - 3-тя особа</span>
	                </div>
	            </div>
	            <h5 class="m-10">*Наприклад якщо букет це подарунок, то отримуватичеві не потрібно буде його оплачувати</h5>
	            <div class="checkbox-div flex">
	                <label class="w-100 filter-attribute-item">
	                    <input type="checkbox" name="payment_by_details_not_my" class="filter-attribute-checkbox ib-m">
	                    <span class="filter-attribute-label ib-m">
	                        Оплата за реквізитами
	                    </span>
	                </label>
	                <label class="w-100 filter-attribute-item">
	                    <input type="checkbox" name="cashless_payments_not_my" class="filter-attribute-checkbox ib-m">
	                    <span class="filter-attribute-label ib-m">
	                        Безготівковий розрахунок для юридичної особи
	                    </span>
	                </label>
	            </div>
	            <div class="flex ">
	                <div class="w-50 just-left">
	                    <button class="main-btn click-step-back m-none">Назад</button>
	                </div>
	                <div class="w-50 just-right">
	                    <button class="main-btn main-blue click-step click-step-5 m-none">Далі</button>
	                </div>
	            </div>
	        </div>
	    </form>
	    <form class="reg-mag step-5 step" method="POST" action="{{ route('register.shop.step', [app()->getLocale(), 4]) }}"id="register-shop-end">
            @csrf
	        <div class="">
	            <div class="step-word">
	                <h3>Крок <span class="index-step_current">4</span> з 4</h3>
	            </div>
	            <div class="label-word">
	                <h2>Точки самовивозу</h2>
	            </div>
	            <div class="progress-step step-p-4">

	            </div>
	            <div class="your-shop">
	                <div class="relative">
	                    <div class="heading-white">
	                        <span class="relative bg-white">Вкажіть вашу адресу</span>
	                    </div>
	                </div>
	                <div class="req-div input-div m-10">
	                    <span class="req-span">
	                        *Обов'язкове поле
	                    </span>
	                    <input class="form-input required-input" type="text" placeholder="Адреса" name="address">
	                </div>
	                <div class="relative">
	                    <div class="heading-white">
	                        <span class="relative bg-white">Вкажіть графік роботи</span>
	                    </div>
	                </div>
	                <div class="checkbox-div">
	                    <ul class="nav nav-tabs" id="myTab-3" role="tablist">
                            <li class="nav-item" role="presentation">
                                <label class="nav-link tab_pane-1-cl radio-label active" id="grafik-pickup-1" data-bs-toggle="tab" data-bs-target="#grafik-pickup-1-tab" role="tab" aria-controls="home" aria-selected="true">
                                    <div >Звичайний графік роботи</div>
                                    <input type="radio" name="shedule-work" checked>
                                </label>
                            </li>
                            <li class="nav-item" role="presentation">
                                <label class="nav-link tab_pane-2-cl radio-label" id="grafik-pickup-2" data-bs-toggle="tab" data-bs-target="#grafik-pickup-2-tab" role="tab" aria-controls="profile" aria-selected="false">
                                    <div >Графік роботи по дням</div>
                                    <input type="radio" name="shedule-work">
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
	                <div class="payment-s">
                        <span class="req">Потрібно вказати хоча б один спосіб платежу</span>
                        <label class="w-100 filter-attribute-item">
                            <input type="checkbox" name="export_pay_cash" class="filter-attribute-checkbox required-input ib-m" >
                            <span class="filter-attribute-label ib-m">
                                Оплата готівкою
                        </span>
                        </label>
                        <label class="w-100 filter-attribute-item">
                            <input type="checkbox" name="export_pay_bank" class="filter-attribute-checkbox required-input ib-m">
                            <span class="filter-attribute-label ib-m">
                                Оплата через термінал
                        </span>
                        </label>
                    </div>
	            </div>
	            <div class="add-shop m-10 m-b-20">
	                <button class="add-btn main-btn">Додати</button>
	            </div>
	            <div class="no-p m-10">
	                <label class="w-100 filter-attribute-item input-shop-label">
	                    <input type="checkbox" name="export_not" class="filter-attribute-checkbox ib-m input-shop">
	                    <span class="filter-attribute-label ib-m">
	                        Немає точок самовивозу, працюю тільки онлайн
	                    </span>
	                </label>
	            </div>
	            <div class="flex ">
	                <div class="w-50 just-left">
	                    <button class="main-btn click-step-back m-none">Назад</button>
	                </div>
	                <div class="w-50 just-right">
	                    <button class="main-btn main-blue m-none click-step" type="submit">Закінчити</button>
	                </div>
	            </div>
	        </div>
	    </form>
	</div>
@endsection
