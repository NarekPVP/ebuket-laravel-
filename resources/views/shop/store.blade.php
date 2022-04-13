@extends('layouts.app')

@section('content')
<div class="testing">
    <div class="default-content flex">
    <div class="left-col">
        <div class="img-item">
            <img src="{{ asset('img/product-1.png') }}">
        </div>
    </div>
    <div class="right-col">
        <div class="info-product">
            <div class="name-product">
                <h1>Shop#1</h1>
            </div>
            <div class="product-shop-info">
                <a  class="shop-name hashed-link" href="#">Shop name</a>
                <div class="rate">
                    <svg width="20" height="19" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 0l1.763 3.573 3.943.573-2.853 2.781.674 3.927L6 9l-3.527 1.854.674-3.927L.294 4.146l3.943-.573L6 0z" fill="#FEBB02"></path></svg>
                    <span class="avg">4.5</span>
                    17 оценок
                </div>
            </div>
            <div class="shipment-2">
            <h3>На E-buket з <span>12.12.21</span></h3>
        </div>
        </div>
    </div>
    <section class="shipment-and-payment w-100 p-30">
        <div class="shipment-2">
            <h2>Опис магазину</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </section>
    <section class="w-100 other-products p-30">
        <h2 class="just-center a-center">Кнопки</h2>
        <button class="main-btn main-blue">Відгуки</button>
        <button class="main-btn main-blue">Доставка</button>
        <button class="main-btn main-blue">Оплата</button>
        <button class="main-btn main-blue">Про нас</button>
    </section>
    <section class="slider-rev w-100">
        <h2 class="just-center a-center">Відеогляд</h2>
            <div class="single-slide">
                <div class="o-video"><iframe src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1"></iframe></div>
                <div class="o-video"><iframe src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1"></iframe></div>
                <div class="o-video"><iframe src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1"></iframe></div>
            </div>
    </section>
    <section class="w-100 category-store">
        <div class="product-view">
            <div class="bord-div">
                <div class="heading-white">
                    <h2 class="relative bg-white">Авторские</h2>
                </div>
            </div>
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
</div>
@endsection