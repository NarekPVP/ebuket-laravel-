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
                                <div class="heading-cab">
                                    <h2>Товари</h2>
                                </div>
                                <div class="shop-card">
                                    <div class="item-view w-100">
                                        <div class="item flex">
                                            <div class="img-item">
                                                <a href="#"><img src="{{ asset('img/product-1.png') }}"></a>
                                            </div>
                                            <div class="info-item flex">
                                                <div class="name-item w-100">
                                                    <a href="#"><p class="a-left">букет lorem букет лорем корзинка лорем</p></a>
                                                </div>
                                                <div class="shop-and-grade flex w-50 flex-start">
                                                    <div class="grade-store">
                                                        <img src="{{ asset('img/star-grade.png') }}">
                                                        <p class="grade">4.3</p>
                                                        <p class="count-grade">(108)</p>
                                                    </div>
                                                </div>
                                                <div class="shipment flex w-50 flex-start">
                                                    <img src="{{ asset('img/ship-car.png') }}">
                                                    <p class="price-ship">80 грн</p>
                                                </div>
                                                <div class="like-and-buy">
                                                    <p class="">Категория</p>
                                                    <p class="">время на сборку 30 минут</p>
                                                    <p class="">повод</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="abs-edit">
                                        <a class="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="abs-duplicate">
                                        <a class="edit"><i class="fa fa-clone" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="abs-delete">
                                        <a class="edit"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <button class="main-btn main-blue" type="submit">Додати новий товар</button>
                                <div class="new-card">
                                    <h2>Створення нового товару</h2>
                                    <form class="new-product">
                                        <div class="form-group">
                                            <label class="control-label">Upload File</label>
                                            <div class="preview-zone hidden">
                                                <div class="box box-solid">
                                                    <div class="box-header with-border">
                                                        <div><b>Preview</b></div>
                                                        <div class="box-tools pull-right">
                                                            <button type="button" class="btn btn-danger btn-xs remove-preview">
                                                                <i class="fa fa-times"></i> Reset This Form
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="box-body"></div>
                                                </div>
                                            </div>
                                            <div class="dropzone-wrapper">
                                                <div class="dropzone-desc">
                                                    <i class="glyphicon glyphicon-download-alt"></i>
                                                    <p>Choose an image file or drag it here.</p>
                                                </div>
                                                <input type="file" name="img_logo" class="dropzone">
                                            </div>
                                        </div>
                                        <div class="req-div">
                                        <span class="req-span">
                                            *Обов'язкове поле
                                        </span>
                                            <input class="form-input required-input" type="text" placeholder="Назва товару" name="product_name">
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
                                                        <input class="form-input form-number required-input" type="number" name="waiting_for_making">
                                                    </div>
                                                    <p>хвилин</p>
                                                </div>
                                            </div>
                                            <div class="checkbox-div flex w-50">
                                                <div class="relative w-100">
                                                    <div class="heading-white">
                                                        <span class="relative bg-white">Вкажіть розмір букету</span>
                                                    </div>
                                                </div>
                                                <div class="select select-parent relative special-marg">
                                                    <input type="hidden" class="select-inp" name="size_id">
                                                    <button class="btn main-btn select-btn main-gray before-chevron" type="button" id="size-2" data-bs-toggle="dropdown">Size</button>
                                                    <ul class="dropdown-menu" aria-labelledby="size-2">
                                                        <li>
                                                            <span role="menuitem" class="select-item" tabindex="-2" href="#" data-city="">Size 1</span>
                                                        </li>
                                                        <li>
                                                            <span role="menuitem" class="select-item" tabindex="-2" href="#" data-city="">Size 2</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex align-center">
                                            <div class="checkbox-div flex w-50">
                                                <div class="relative w-100">
                                                    <div class="heading-white">
                                                        <span class="relative bg-white">Введіть час пакування букету</span>
                                                    </div>
                                                </div>
                                                <div class="select select-parent relative special-marg">
                                                    <input type="hidden" class="select-inp" name="category_id">
                                                    <button class="btn main-btn select-btn main-gray before-chevron" type="button" id="category" data-bs-toggle="dropdown">Category</button>
                                                    <ul class="dropdown-menu" aria-labelledby="category">
                                                        <li>
                                                            <span role="menuitem" class="select-item" tabindex="-2" data-city="">category 1</span>
                                                        </li>
                                                        <li>
                                                            <span role="menuitem" class="select-item" tabindex="-2" data-city="">category 2</span>
                                                        </li>
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
                                                    <input type="hidden" class="select-inp" name="color_id">
                                                    <button class="btn main-btn select-btn main-gray before-chevron flex" type="button" id="color" data-bs-toggle="dropdown">Color</button>
                                                    <ul class="dropdown-menu" aria-labelledby="color">
                                                        <li>
                                                            <span role="menuitem" class="select-item flex" tabindex="-2"data-city=""><div class="red"></div>red</span>
                                                        </li>
                                                        <li>
                                                            <span role="menuitem" class="select-item flex" tabindex="-2" data-city=""><div class="green"></div>green</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="req-div">
                                        <span class="req-span">
                                            *Обов'язкове поле
                                        </span>
                                            <input class="form-input required-input" type="text" placeholder="Нагода" name="occasion_name">
                                        </div>
                                        <div class="req-div">
                                        <span class="req-span">
                                            *Обов'язкове поле
                                        </span>
                                            <textarea class="form-input required-input" rows="5" placeholder="Склад" name="contents_product"></textarea>
                                        </div>
                                        <div class="checkbox-div flex">
                                            <div class="parent-input">
                                                <label class="w-100 filter-attribute-item shadow-on-2">
                                                    <input type="checkbox" name="payment_courier" class="filter-attribute-checkbox ib-m sh-2">
                                                    <span class="filter-attribute-label ib-m">
                                                    Додатки до букету
                                                </span>
                                                </label>
                                                <div class="shadow-bl-2 w-100">
                                                    <label class="w-100 filter-attribute-item">
                                                        <input type="checkbox" name="gift_1" class="filter-attribute-checkbox ib-m">
                                                        <span class="filter-attribute-label ib-m">
                                                        Листівки
                                                    </span>
                                                    </label>
                                                    <label class="w-100 filter-attribute-item">
                                                        <input type="checkbox" name="gift_2" class="filter-attribute-checkbox ib-m">
                                                        <span class="filter-attribute-label ib-m">
                                                        Іграшки
                                                    </span>
                                                    </label>
                                                    <label class="w-100 filter-attribute-item">
                                                        <input type="checkbox" name="gift_3" class="filter-attribute-checkbox ib-m">
                                                        <span class="filter-attribute-label ib-m">
                                                        Солодощі
                                                    </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="set-div flex w-100 setting-product-tab">
                    @include('profile.menu')
                    <div class="profile-info">
                        <div class="contacts-container grid bottom-tier">
                            <div class="contacts-form-main-wrapper">
                                <div class="heading-cab">
                                    <h2>Прайслист</h2>
                                </div>
                                <div class="shop-card">
                                </div>
                                <div class="add-new just-center">
                                    <h2 class="w-100 a-center">Додайте асортимент в свій прайс</h2>
                                    <a class="m-10 w-100 a-center" href="">як це зробити?</a>
                                    <button class="main-btn main-blue" type="submit">+ Додати</button>
                                </div>
                                <div class="new-card">
                                    <h2>Заповніть інформацію щодо квітки</h2>
                                    <form class="new-flower">
                                        <div class="flex">
                                            <div class="req-div w-66">
                                            <span class="req-span">
                                                *Обов'язкове поле
                                            </span>
                                                <input class="form-input required-input" type="text" placeholder="Назва товару" name="product_name">
                                            </div>
                                            <div class="select select-parent relative w-33 special-marg">
                                                <input type="hidden" class="select-inp" name="color_id">
                                                <button class="btn main-btn select-btn main-gray before-chevron relative w-100 flex" type="button" id="color-2" data-bs-toggle="dropdown">Color</button>
                                                <ul class="dropdown-menu" aria-labelledby="color-2">
                                                    <li>
                                                        <span role="menuitem" class="select-item flex" tabindex="-2"data-city=""><div class="red"></div>red</span>
                                                    </li>
                                                    <li>
                                                        <span role="menuitem" class="select-item flex" tabindex="-2" data-city=""><div class="green"></div>green</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="flex align-center">
                                            <div class="checkbox-div flex w-50">
                                                <div class="relative w-100">
                                                    <div class="heading-white">
                                                        <span class="relative bg-white">Введіть розмір букету</span>
                                                    </div>
                                                </div>
                                                <div class="select select-parent relative special-marg">
                                                    <input type="hidden" class="select-inp" name="size_id">
                                                    <button class="btn main-btn select-btn main-gray before-chevron" type="button" id="size" data-bs-toggle="dropdown">Size</button>
                                                    <ul class="dropdown-menu" aria-labelledby="size">
                                                        <li>
                                                            <span role="menuitem" class="select-item" tabindex="-2" data-city="">size 1</span>
                                                        </li>
                                                        <li>
                                                            <span role="menuitem" class="select-item" tabindex="-2" data-city="">size 2</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="checkbox-div flex w-50 relative">
                                                <div class="relative w-100">
                                                    <div class="heading-white">
                                                        <span class="relative bg-white">Вкажіть країну</span>
                                                    </div>
                                                </div>
                                                <div class="select select-parent relative special-marg">
                                                    <input type="hidden" class="select-inp" name="country_id">
                                                    <button class="btn main-btn select-btn main-gray before-chevron" type="button" id="country" data-bs-toggle="dropdown">Country</button>
                                                    <ul class="dropdown-menu" aria-labelledby="color">
                                                        <li>
                                                            <span role="menuitem" class="select-item flex" tabindex="-2"data-city="">ukr</span>
                                                        </li>
                                                        <li>
                                                            <span role="menuitem" class="select-item flex" tabindex="-2" data-city="">rus</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="req-div">
                                        <span class="req-span">
                                            *Обов'язкове поле
                                        </span>
                                            <input class="form-input required-input" type="text" placeholder="Сорт" name="product_sort">
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
                                <div class="acordeon">
                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                    Flower 1
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                                <div class="accordion-body relative flex">
                                                    <div class="color-flower w-33 just-center">
                                                        <img src="{{ asset('img/vlszaika-02.png') }}">
                                                    </div>
                                                    <div class="w-66 info-flower">
                                                        <div class="price">
                                                            <span class="price_flower info-flower-span">50грн</span>
                                                        </div>
                                                        <div class="size">
                                                            <span class="size_flower info-flower-span">50см</span>
                                                        </div>
                                                        <div class="count-flowers">
                                                            <span class="count_flower info-flower-span">14 flowers</span>
                                                        </div>
                                                        <div class="country">
                                                            <span class="country_flower info-flower-span">Ukraine</span>
                                                        </div>
                                                        <div class="comment-field">
                                                            <span class="comment_flower">text lorem comment test text lorem comment test</span>
                                                        </div>
                                                        <div class="abs-switch">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                    Flower 2
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                                <div class="accordion-body">
                                                    <div class="accordion-body relative flex">
                                                        <div class="color-flower w-33 just-center">
                                                            <img src="{{ asset('img/vlszaika-02.png') }}">
                                                        </div>
                                                        <div class="w-66 info-flower">
                                                            <div class="price">
                                                                <span class="price_flower info-flower-span">50грн</span>
                                                            </div>
                                                            <div class="size">
                                                                <span class="size_flower info-flower-span">50см</span>
                                                            </div>
                                                            <div class="count-flowers">
                                                                <span class="count_flower info-flower-span">14 flowers</span>
                                                            </div>
                                                            <div class="country">
                                                                <span class="country_flower info-flower-span">Ukraine</span>
                                                            </div>
                                                            <div class="comment-field">
                                                                <span class="comment_flower">text lorem comment test text lorem comment test</span>
                                                            </div>
                                                            <div class="abs-switch">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"/>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
