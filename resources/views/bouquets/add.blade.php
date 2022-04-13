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
                                    <h2>Створення нового товару</h2>
                                    <form class="new-product" method="POST" action="{{ route('bouquets.create.store', app()->getLocale()) }}" enctype="multipart/form-data">
                                        @csrf

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <div class="field" align="left">
                                            <h3>Upload your images</h3>
                                            <input type="file" id="files" name="image" />
                                        </div>
                                        <div class="req-div">
                                            <span class="req-span">
                                                *Обов'язкове поле
                                            </span>
                                            <input class="form-input required-input" type="text" placeholder="Назва товару" name="name">
                                        </div>
                                        <div class="flex align-center">
                                            <div class="checkbox-div flex w-50">
                                                <div class="relative w-100">
                                                    <div class="heading-white">
                                                        <span class="relative bg-white">Введіть час пакування букету</span>
                                                    </div>
                                                </div>
                                                <div class="time-text align-center just-center w-100">
                                                    <p>через</p>
                                                    <div class="req-div">
                                                        <span class="req-span">
                                                            *Обов'язкове поле
                                                        </span>
                                                        <input class="form-input form-number required-input" type="number" name="packing_time">
                                                    </div>
                                                    <p>хвилин</p>
                                                </div>
                                            </div>
                                            <div class="checkbox-div flex w-50">
                                                <div class="relative w-100">
                                                    <div class="heading-white">
                                                        <span class="relative bg-white">Введіть ширину букету</span>
                                                    </div>
                                                </div>
                                                <div class="time-text align-center just-center w-100">
                                                    <div class="req-div">
                                                        <span class="req-span">
                                                            *Обов'язкове поле
                                                        </span>
                                                        <input class="form-input form-number required-input" type="number" name="width">
                                                    </div>
                                                    <p>см</p>
                                                </div>
                                            </div>
                                            <div class="checkbox-div flex w-50">
                                                <div class="relative w-100">
                                                    <div class="heading-white">
                                                        <span class="relative bg-white">Введіть висоту букету</span>
                                                    </div>
                                                </div>
                                                <div class="time-text align-center just-center w-100">
                                                    <div class="req-div">
                                                        <span class="req-span">
                                                            *Обов'язкове поле
                                                        </span>
                                                        <input class="form-input form-number required-input" type="number" name="height">
                                                    </div>
                                                    <p>см</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex align-center">
                                            <div class="checkbox-div flex w-50">
                                                <div class="relative w-100">
                                                    <div class="heading-white">
                                                        <span class="relative bg-white">Введіть категорію букету</span>
                                                    </div>
                                                </div>
                                                <div class="select select-parent relative special-marg">
                                                    <input type="hidden" class="select-inp" name="category_id">
                                                    <button class="btn main-btn select-btn main-gray before-chevron" type="button" id="category" data-bs-toggle="dropdown">Category</button>
                                                    <ul class="dropdown-menu" aria-labelledby="category">
                                                        @foreach($categories as $category)
                                                            <li>
                                                                <span role="menuitem" class="select-item" tabindex="-2" data-city="{{ $category->id }}">{{ $category->name }}</span>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="checkbox-div flex w-50 relative">
                                                <div class="relative w-100">
                                                    <div class="heading-white">
                                                        <span class="relative bg-white">Вкажіть колір</span>
                                                    </div>
                                                </div>
                                                <div class="select select-parent relative special-marg">
                                                    <input type="color" class="select-inp" name="color">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="req-div">
                                            <span class="req-span">
                                                *Обов'язкове поле
                                            </span>
                                            <input class="form-input required-input" type="text" placeholder="Нагода" name="description">
                                        </div>
                                        <div class="req-div">
                                            <span class="req-span">
                                                *Обов'язкове поле
                                            </span>
                                            <span>Склад букету</span>
                                            <div class="box-search">
                                                <div class="search-buket">
                                                    <div class="in-count">
                                                        <input class="form-input form-number required-input" type="number" name="count">
                                                        <p>кількість</p>
                                                    </div>
                                                    <div class="select select-parent relative special-marg">
                                                        <input type="hidden" class="select-inp" name="price[]">
                                                        <button class="btn main-btn select-btn main-gray w-100 before-chevron" type="button" data-bs-toggle="dropdown">Склад</button>
                                                        <ul class="dropdown-menu list-search" aria-labelledby="search">
                                                            <input type="text" class="form-control search_field navbar-form navbar-right" placeholder="Search...">
                                                            @foreach($prices as $price)
                                                                <li>
                                                                    <span role="menuitem" class="select-item" tabindex="-2" data-city="{{ $price->id }}">{{ $price->name }}</span>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-10">
                                                <a class="add-search"><i class="fa fa-plus" aria-hidden="true"></i> Додати складник</a>
                                            </div>
                                        </div>
                                        <div class="checkbox-div w-100 flex">
                                            <div class="parent-input">
                                                <label class="w-100 filter-attribute-item shadow-on-2">
                                                    <input type="checkbox" name="addons" class="filter-attribute-checkbox ib-m sh-2">
                                                    <span class="filter-attribute-label ib-m">
                                                        Додатки до букету
                                                    </span>
                                                </label>
                                                <div class="shadow-bl-2 w-100">
                                                    <label class="w-100 filter-attribute-item">
                                                        <input type="checkbox" name="leaflets" class="filter-attribute-checkbox ib-m">
                                                        <span class="filter-attribute-label ib-m">
                                                            Листівки
                                                        </span>
                                                    </label>
                                                    <label class="w-100 filter-attribute-item">
                                                        <input type="checkbox" name="toys" class="filter-attribute-checkbox ib-m">
                                                        <span class="filter-attribute-label ib-m">
                                                            Іграшки
                                                        </span>
                                                    </label>
                                                    <label class="w-100 filter-attribute-item">
                                                        <input type="checkbox" name="sweets" class="filter-attribute-checkbox ib-m">
                                                        <span class="filter-attribute-label ib-m">
                                                            Солодощі
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="main-btn main-blue">Создать</button>
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
