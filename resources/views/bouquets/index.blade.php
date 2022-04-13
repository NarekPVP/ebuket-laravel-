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
                                @foreach($lists as $list)
                                    <div class="shop-card">
                                        <div class="item-view w-100">
                                            <div class="item flex">
                                                <div class="img-item">
                                                    <a href="#">
                                                        <img src="/storage/{{ $list->img }}">
                                                    </a>
                                                </div>
                                                <div class="info-item flex">
                                                    <div class="name-item w-100">
                                                        <a href="#"><p class="a-left">{{ $list->name }}</p></a>
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
                                                        <p class="">{{ $list->category->name }}</p>
                                                        <p class="">время на сборку {{ $list->packing_time }} минут</p>
                                                        <p class="">{{ $list->description }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="abs-edit">
                                            <a class="edit" href="{{ route('bouquets.edit', [app()->getLocale(), $list]) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="abs-duplicate">
                                            <a class="edit" href="{{ route('bouquets.copy', [app()->getLocale(), $list]) }}"><i class="fa fa-clone" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="abs-delete">
                                            <a class="edit" href="{{ route('bouquets.delete', [app()->getLocale(), $list]) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </div>

                                    </div>
                                @endforeach
                                <a href="{{ route('bouquets.create', app()->getLocale()) }}" class="main-btn main-blue">Додати новий товар</a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
