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
                                    <h2>Редагування бренду</h2>
                                </div>

                                <div class="shop-edit">
                                    <form class="reg-mag" method="POST" action="{{ route('shops.update', app()->getLocale()) }}">
                                        @csrf
                                        <div class="">
                                            <div class="label-word">
                                                <h2>Опис магазину</h2>
                                            </div>
                                            <div class="relative">
                                                <div class="heading-white">
                                                    <span class="relative bg-white">Введіть опис вашого магазину</span>
                                                </div>
                                            </div>
                                            <div class="checkbox-div flex trust">
                                                <div class="time-text align-center just-center w-100 relative">
                                                    <div class="req-div align-center trust">
                                                        <span class="req-span">
                                                            *Обов'язкове поле
                                                        </span>
                                                        <span class="val-inp">Опис:{{ $shop->desc??'' }}</span>
                                                        <a class="activate-inp link-click"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <textarea class="form-input required-input" name="desc" id="" cols="30" rows="10">{{ $shop->desc??'' }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="">
                                            <div class="label-word">
                                                <h2>Вкажіть інформацію про оплату</h2>
                                            </div>
                                            <div class="relative">
                                                <div class="heading-white">
                                                    <span class="relative bg-white">Отримувач - Покупець</span>
                                                </div>
                                            </div>
                                            <div class="checkbox-div flex">
                                                <label class="w-100 filter-attribute-item">
                                                    <input type="checkbox" name="payment_by_details" class="filter-attribute-checkbox ib-m" @if($shop->payment_by_details == 1) checked @endif>
                                                    <span class="filter-attribute-label ib-m">
                                                    Оплата за реквізитами
                                                </span>
                                                </label>
                                                <div class="parent-input add-parent @if($shop->prepayment == 1) active @endif">
                                                    <label class="w-100 filter-attribute-item shadow-on part-label">
                                                        <input type="checkbox" name="prepayment" class="filter-attribute-checkbox ib-m sh input-part" @if($shop->prepayment == 1) checked @endif>
                                                        <span class="filter-attribute-label ib-m">
                                                        Часткова передплата
                                                    </span>
                                                    </label>
                                                    <div class="shadow-bl relative">
                                                        <div class="req-div flex align-center trust">
                                                        <span class="req-span">
                                                            *Обов'язкове поле
                                                        </span>
                                                            <span class="val-inp">{{ $shop->prepayment_sum }}</span>
                                                            <a class="activate-inp link-click"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                            <input class="form-input form-number add-req" type="tel" placeholder="" name="prepayment_sum" value="{{ $shop->prepayment_sum }}">
                                                            <p>грн</p><p style="font-size: 12px;">Передплата яку повинен внести покупець якщо букет дорожчий ніж *** грн</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="parent-input @if($shop->payment_courier == 1) active @endif">
                                                    <label class="w-100 filter-attribute-item shadow-on-2">
                                                        <input type="checkbox" name="payment_courier" class="filter-attribute-checkbox ib-m sh-2" @if($shop->payment_courier == 1) checked @endif>
                                                        <span class="filter-attribute-label ib-m">
                                                        Оплата при отриманні
                                                    </span>
                                                    </label>
                                                    <div class="shadow-bl-2 w-100">
                                                        <label class="w-100 filter-attribute-item">
                                                            <input type="checkbox" name="payment_courier_cash" class="filter-attribute-checkbox ib-m" @if($shop->payment_courier_cash == 1) checked @endif>
                                                            <span class="filter-attribute-label ib-m">
                                                            Готівкою кур`єру
                                                        </span>
                                                        </label>
                                                        <label class="w-100 filter-attribute-item">
                                                            <input type="checkbox" name="payment_courier_bank" class="filter-attribute-checkbox ib-m" @if($shop->payment_courier_bank == 1) checked @endif>
                                                            <span class="filter-attribute-label ib-m">
                                                            Через термінал
                                                        </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <label class="w-100 filter-attribute-item">
                                                    <input type="checkbox" name="cashless_payments" class="filter-attribute-checkbox ib-m" @if($shop->cashless_payments == 1) checked @endif>
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
                                                    <input type="checkbox" name="payment_by_details_not_my" class="filter-attribute-checkbox ib-m" @if($shop->payment_by_details_not_my == 1) checked @endif>
                                                    <span class="filter-attribute-label ib-m">
                                                    Оплата за реквізитами
                                                </span>
                                                </label>
                                                <label class="w-100 filter-attribute-item">
                                                    <input type="checkbox" name="cashless_payments_not_my" class="filter-attribute-checkbox ib-m" @if($shop->cashless_payments_not_my == 1) checked @endif>
                                                    <span class="filter-attribute-label ib-m">
                                                    Безготівковий розрахунок для юридичної особи
                                                </span>
                                                </label>
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
