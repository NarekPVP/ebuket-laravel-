@extends('layouts.app')

@section('content')
@if(isset($product))
<div class="default-content flex">
    <div class="left-col">
        <div class="img-item">
            <img src="{{ asset($product->img) }}">
        </div>
    </div>
    <div class="right-col">
        <div class="info-product">
            <div class="name-product">
                <h1>{{ $product->name }}</h1>
            </div>
            <div class="price">
                <h3><b>{{ $product->price }} грн</b></h3>
            </div>
            <div class="product-label-line delivery js-open-select-place-time">
                <b class="js-text-current-address"></b>
                <b class="js-text-nearest-time">Доставка 55 - 75 мин</b>
                <b class="js-text-delivery-cost clarify">Вартість доставки
                    <span class="with-cost">
	            		<span class="js-product-delivery-cost">100</span>
	            		<i class="r norub">грн</i>
	                </span>
                </b>
            </div>
            <div class="buy flex">
                <div class="number">
                    <span class="minus">-</span>
                    <input id="single-qty" type="text" value="1"/>
                    <span class="plus">+</span>
                    <script>
                        let minus = document.getElementsByClassName('minus')[0];
                        let plus = document.getElementsByClassName('plus')[0];
                        minus.addEventListener('click', function() {
                            let val = parseInt(document.getElementById('single-qty').value);
                            if(val != 1) val -= 1;
                            document.getElementById('single-qty').value = val;
                        })
                        plus.addEventListener('click', function() {
                            let val = parseInt(document.getElementById('single-qty').value);
                            val += 1;
                            document.getElementById('single-qty').value = val;
                        })
                        document.getElementById('single-qty').addEventListener('focusout', function() {
                            val = parseInt(this.value);
                            if(val <= 0)
                                document.getElementById('single-qty').value = 1;
                        });
                    </script>
                </div>
                <button class="main-btn main-blue">Додати до кошика</button>
                <div class="buy-now">
                    <span class="abo">або</span>
                    <button class="main-btn main-blue">Купити зараз</button>
                </div>
            </div>
            <div class="flex m-10">
                <div class="ads-for-product w-50">
                    <h4>Додаткові речі до букету</h4>
                    @if($product->toys != null)
                    <label class="w-100 filter-attribute-item">
                        <input type="checkbox" name="gift_1" class="filter-attribute-checkbox ib-m">
                        <span class="filter-attribute-label ib-m">
	                    	<img class="ads-img" src="{{ asset('img/bear-test.webp') }}">
	                        Іграшка
	                    </span>
                    </label>
                    @endif
                    @if($product->leaflets != null)
                    <label class="w-100 filter-attribute-item m-10">
                        <input type="checkbox" name="gift_2" class="filter-attribute-checkbox ib-m">
                        <span class="filter-attribute-label ib-m">
	                    	<img class="ads-img" src="{{ asset('img/valentine.jpeg') }}">
	                        Листівка
	                    </span>
                    </label>
                    @endif
                    @if($product->sweets != null)
                    <label class="w-100 filter-attribute-item m-10">
                        <input type="checkbox" name="gift_3" class="filter-attribute-checkbox ib-m">
                        <span class="filter-attribute-label ib-m">
	                    	<img class="ads-img" src="{{ asset('img/candys.jpeg') }}">
	                        Цукерки
	                    </span>
                    </label>
                    @endif
                </div>
                <div class="standart-product-composition w-50 ">
                    <h3>Склад</h3>
                    <p class="description">Троянда 1шт</p>
                    <p class="description">Хризантема 1шт</p>
                    <p class="description">Ромашки 10шт</p>
                </div>
            </div>
        </div>
    </div>
    <section class="shipment-and-payment w-100 p-30">
        <div class="shipment">
            <h2>Всі види доставки</h2>
            <h3>Кур'єр по місту</h3>
            <h3>Пошта</h3>
            <h3>і тд</h3>
        </div>
    </section>
    <section class="shipment-and-payment w-100 p-30">
        <div class="shipment">
            <h2>Всі види оплати</h2>
            <h3>Готівка</h3>
            <h3>Оплата на карту</h3>
            <h3>і тд</h3>
        </div>
    </section>
    <section class="shop-info w-100 flex p-30">
        <div class="pp-full-info desktop w-33">
            <div class="product-shop-info">
                <a  class="shop-name hashed-link" href="#">Shop name</a>
                <div class="rate">
                    <svg width="20" height="19" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 0l1.763 3.573 3.943.573-2.853 2.781.674 3.927L6 9l-3.527 1.854.674-3.927L.294 4.146l3.943-.573L6 0z" fill="#FEBB02"></path></svg>
                    <span class="avg">4.5</span>
                    17 оценок
                </div>
            </div>

            <div class="pp-labels">
            </div>
        </div>
        <div class="standart-product-reviews w-66 flex">
            <h2 class="w-100">Кращі відгуки</h2>
            <div class="sapp-review-item clearfix">
                <div class="r-head">
                    <div class="sapp-review-letter type-4">
                        К
                    </div>
                    <div class="name">
                        <b>Клієнт 1</b>
                        Квітень 2021
                    </div>
                </div>
                <div class="r-rate">
                    <div class="rate-info">
                        <span class="name">Оцінка</span>
                        <span><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 0l2.351 4.764 5.257.764-3.804 3.708.898 5.236L8 12l-4.702 2.472.898-5.236L.392 5.528l5.257-.764L8 0z" fill="#24B7A8"></path></svg><b>5</b>/5</span>
                    </div>
                </div>
                <div class="r-text">
                    {{ $product->body  }} <!-- Дуже гарний букет, буду замовляти ще -->
                </div>
            </div>
            <div class="sapp-review-item clearfix">
                <div class="r-head">
                    <div class="sapp-review-letter type-0">
                        К
                    </div>
                    <div class="name">
                        <b>Клієнт 2</b>
                        Грудень 2021
                    </div>
                </div>
                <div class="r-rate">
                    <div class="rate-info">
                        <span class="name">Оцінка</span>
                        <span><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 0l2.351 4.764 5.257.764-3.804 3.708.898 5.236L8 12l-4.702 2.472.898-5.236L.392 5.528l5.257-.764L8 0z" fill="#24B7A8"></path></svg><b>5</b>/5</span>
                    </div>
                </div>
                <div class="r-text">
                    Дуже гарний букет, буду замовляти ще
                </div>
            </div>
        </div>
    </section>
    <section class="regular-reviews w-100 flex space-between p-30">
        <h2 class="w-100 just-center">Всі відгуки</h2>
        <div class="standart-product-reviews">
            <div class="sapp-review-item clearfix">
                <div class="r-head">
                    <div class="sapp-review-letter type-0">
                        К
                    </div>
                    <div class="name">
                        <b>Клієнт 4</b>
                        Квітень 2021
                    </div>
                </div>
                <div class="r-rate">
                    <div class="rate-info">
                        <span class="name">Оцінка</span>
                        <span><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 0l2.351 4.764 5.257.764-3.804 3.708.898 5.236L8 12l-4.702 2.472.898-5.236L.392 5.528l5.257-.764L8 0z" fill="#24B7A8"></path></svg><b>1</b>/5</span>
                    </div>
                </div>
                <div class="r-text">
                    Дуже гарний букет, буду замовляти ще
                </div>
            </div>
        </div>
        <div class="standart-product-reviews">
            <div class="sapp-review-item clearfix">
                <div class="r-head">
                    <div class="sapp-review-letter type-1">
                        К
                    </div>
                    <div class="name">
                        <b>Клієнт 5</b>
                        Квітень 2021
                    </div>
                </div>
                <div class="r-rate">
                    <div class="rate-info">
                        <span class="name">Оцінка</span>
                        <span><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 0l2.351 4.764 5.257.764-3.804 3.708.898 5.236L8 12l-4.702 2.472.898-5.236L.392 5.528l5.257-.764L8 0z" fill="#24B7A8"></path></svg><b>4</b>/5</span>
                    </div>
                </div>
                <div class="r-text">
                    Дуже гарний букет, буду замовляти ще
                </div>
            </div>
        </div>
        <div class="standart-product-reviews">
            <div class="sapp-review-item clearfix">
                <div class="r-head">
                    <div class="sapp-review-letter type-4">
                        К
                    </div>
                    <div class="name">
                        <b>Клієнт 6</b>
                        Квітень 2021
                    </div>
                </div>
                <div class="r-rate">
                    <div class="rate-info">
                        <span class="name">Оцінка</span>
                        <span><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 0l2.351 4.764 5.257.764-3.804 3.708.898 5.236L8 12l-4.702 2.472.898-5.236L.392 5.528l5.257-.764L8 0z" fill="#24B7A8"></path></svg><b>3</b>/5</span>
                    </div>
                </div>
                <div class="r-text">
                    Дуже гарний букет, буду замовляти ще
                </div>
            </div>
        </div>
    </section>
    <section class="w-100 other-products p-30">
        <h2 class="just-center a-center">Інші продукти цього магазину</h2>
        <div class="other">
            <div class="grid-item flex">
                <div class="item-view">
                    <div class="item">
                        <div class="img-item">
                            <a href="#"><img src="{{ asset('img/product-1.png') }}"></a>
                        </div>
                        <div class="info-item flex">
                            <div class="name-item">
                                <a href="#"><p>букет lorem букет лорем корзинка лорем</p></a>
                            </div>
                            <div class="shop-and-grade flex">
                                <a href="#"><p class="name-store">магазин</p></a>
                                <div class="grade-store">
                                    <img src="{{ asset('img/star-grade.png') }}">
                                    <p class="grade">4.3</p>
                                    <p class="count-grade">(108)</p>
                                </div>
                            </div>
                            <div class="shipment flex">
                                <img src="{{ asset('img/ship-car.png') }}">
                                <p class="price-ship">80 грн</p>
                            </div>
                            <div class="like-and-buy">
                                <a href="#" class="svg-like"><i class="fa fa-heart-o active" aria-hidden="true"></i></a>
                                <button class="main-btn btn-buy"><span class="default">5000 грн</span><span class="hover">Купить</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-view">
                    <div class="item">
                        <div class="img-item">
                            <a href="#"><img src="{{ asset('img/product-1.png') }}"></a>
                        </div>
                        <div class="info-item flex">
                            <div class="name-item">
                                <a href="#"><p>букет lorem букет лорем корзинка лорем</p></a>
                            </div>
                            <div class="shop-and-grade flex">
                                <a href="#"><p class="name-store">магазин</p></a>
                                <div class="grade-store">
                                    <img src="{{ asset('img/star-grade.png') }}">
                                    <p class="grade">4.3</p>
                                    <p class="count-grade">(108)</p>
                                </div>
                            </div>
                            <div class="shipment flex">
                                <img src="{{ asset('img/ship-car.png') }}">
                                <p class="price-ship">80 грн</p>
                            </div>
                            <div class="like-and-buy">
                                <a href="#" class="svg-like"><i class="fa fa-heart-o active" aria-hidden="true"></i></a>
                                <button class="main-btn btn-buy"><span class="default">5000 грн</span><span class="hover">Купить</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-view">
                    <div class="item">
                        <div class="img-item">
                            <a href="#"><img src="{{ asset('img/product-1.png') }}"></a>
                        </div>
                        <div class="info-item flex">
                            <div class="name-item">
                                <a href="#"><p>букет lorem букет лорем корзинка лорем</p></a>
                            </div>
                            <div class="shop-and-grade flex">
                                <a href="#"><p class="name-store">магазин</p></a>
                                <div class="grade-store">
                                    <img src="{{ asset('img/star-grade.png') }}">
                                    <p class="grade">4.3</p>
                                    <p class="count-grade">(108)</p>
                                </div>
                            </div>
                            <div class="shipment flex">
                                <img src="{{ asset('img/ship-car.png') }}">
                                <p class="price-ship">80 грн</p>
                            </div>
                            <div class="like-and-buy">
                                <a href="#" class="svg-like"><i class="fa fa-heart-o active" aria-hidden="true"></i></a>
                                <button class="main-btn btn-buy"><span class="default">5000 грн</span><span class="hover">Купить</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-view">
                    <div class="item">
                        <div class="img-item">
                            <a href="#"><img src="{{ asset('img/product-1.png') }}"></a>
                        </div>
                        <div class="info-item flex">
                            <div class="name-item">
                                <a href="#"><p>букет lorem букет лорем корзинка лорем</p></a>
                            </div>
                            <div class="shop-and-grade flex">
                                <a href="#"><p class="name-store">магазин</p></a>
                                <div class="grade-store">
                                    <img src="{{ asset('img/star-grade.png') }}">
                                    <p class="grade">4.3</p>
                                    <p class="count-grade">(108)</p>
                                </div>
                            </div>
                            <div class="shipment flex">
                                <img src="{{ asset('img/ship-car.png') }}">
                                <p class="price-ship">80 грн</p>
                            </div>
                            <div class="like-and-buy">
                                <a href="#" class="svg-like"><i class="fa fa-heart-o active" aria-hidden="true"></i></a>
                                <button class="main-btn btn-buy"><span class="default">5000 грн</span><span class="hover">Купить</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="show-all just-center">
                <button class="click">переглянути всі</button>
            </div>
        </div>
    </section>
</div>
@endif
@endsection
