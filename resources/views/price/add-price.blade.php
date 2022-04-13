@extends('layouts.app')

@section('content')

    <section class="personal-cab">
        <div class="content">
            <div class="profile-container flex">
                <div class="set-div flex w-100 setting-product-tab">
                    @include('profile.menu')
                    <div class="profile-info">
                        <div class="contacts-container grid bottom-tier">
                            <div class="contacts-form-main-wrapper">

                                <div class="new-card">
                                    <h2>Заповніть інформацію щодо квітки</h2>
                                    <form class="new-flower" method="POST" action="{{ route('price.add.post', app()->getLocale()) }}">
                                        @csrf

                                        <div class="flex">
                                            <div class="req-div w-50">
                                                <span class="req-span">
                                                    *Обов'язкове поле
                                                </span>
                                                <input class="form-input required-input flower-list" type="text" placeholder="Назва товару" name="name">
                                                @error('name')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <div class="card f-list" style="width: 18rem;">

                                                </div>

                                            </div>
                                            <div class="req-div w-50">
                                                <span class="req-span">
                                                    *Обов'язкове поле
                                                </span>
                                                <input class="form-input required-input" type="color" placeholder="Назва товару" name="color">
                                                @error('color')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="req-div">
                                                <span class="req-span">
                                                    *Обов'язкове поле
                                                </span>
                                                <input class="form-input required-input" type="text" placeholder="Цена" name="amount">
                                                @error('amount')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="flex align-center">
                                            <div class="checkbox-div flex w-50">
                                                <div class="relative w-100">
                                                    <div class="heading-white">
                                                        <span class="relative bg-white">Введіть розмір букету</span>
                                                    </div>
                                                </div>
                                                <div class="req-div">
                                                    <span class="req-span">
                                                        *Обов'язкове поле
                                                    </span>
                                                    <input class="form-input required-input" type="text" placeholder="Высота" name="height">
                                                </div>
                                            </div>
                                            <div class="checkbox-div flex w-50 relative">
                                                <div class="relative w-100">
                                                    <div class="heading-white">
                                                        <span class="relative bg-white">Вкажіть країну</span>
                                                    </div>
                                                </div>
                                                <div class="select select-parent relative special-marg">
                                                    <input type="hidden" class="select-inp" name="made_in">
                                                    <button class="btn main-btn select-btn main-gray before-chevron" type="button" id="country" data-bs-toggle="dropdown">Country</button>
                                                    <ul class="dropdown-menu" aria-labelledby="color">
                                                        <li>
                                                            <span role="menuitem" class="select-item flex" tabindex="-2"data-city="">Украина</span>
                                                        </li>
                                                        <li>
                                                            <span role="menuitem" class="select-item flex" tabindex="-2" data-city="">Голландия</span>
                                                        </li>
                                                        <li>
                                                            <span role="menuitem" class="select-item flex" tabindex="-2" data-city="">Кения</span>
                                                        </li>
                                                        <li>
                                                            <span role="menuitem" class="select-item flex" tabindex="-2" data-city="">Эквадор</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="req-div">
                                            <span class="req-span">
                                                *Обов'язкове поле
                                            </span>
                                            <input class="form-input required-input" type="text" placeholder="Сорт" name="sort">
                                        </div>
                                        <div class="req-div">
                                            <span class="req-span">
                                                *Обов'язкове поле
                                            </span>
                                            <input class="form-input required-input" type="text" placeholder="Коментарій" name="comment">
                                        </div>
                                        <button class="main-btn main-blue m-10" type="submit">Додати</button>
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
