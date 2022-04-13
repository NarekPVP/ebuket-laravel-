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
                                    <h2>Прайслист</h2>
                                </div>
                                <div class="shop-card">
                                </div>
                                <div class="add-new just-center">
                                    <h2 class="w-100 a-center">Додайте асортимент в свій прайс</h2>
                                    <a class="m-10 w-100 a-center" href="">як це зробити?</a>
                                    <a class="main-btn main-blue" href="{{ route('price.add.get', app()->getLocale()) }}">+ Додати</a>
                                </div>
                                <div class="acordeon">
                                    <div class="accordion" id="accordionPanelsStayOpenExample">

                                        @foreach($prices as $price)
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingOne{{ $price->id }}">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne{{ $price->id }}" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne{{ $price->id }}">
                                                        {{ $price->name }}
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseOne{{ $price->id }}" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne{{ $price->id }}">
                                                    <div class="accordion-body relative flex">
                                                        <div class="color-flower w-33 just-center">
                                                            {{ $price->color }}
                                                        </div>
                                                        <div class="w-66 info-flower">
                                                            <div class="price">
                                                                <span class="price_flower info-flower-span">{{ $price->amount }}грн</span>
                                                            </div>
                                                            <div class="size">
                                                                <span class="size_flower info-flower-span">{{ $price->height }}см</span>
                                                            </div>
                                                            <div class="country">
                                                                <span class="country_flower info-flower-span">{{ $price->made_in }}</span>
                                                            </div>
                                                            <div class="comment-field">
                                                                <span class="comment_flower">{{ $price->comment }}</span>
                                                            </div>
                                                            <div class="abs-switch">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"/>
                                                                </div>
                                                                <a href="{{ route('price.edit.get', [app()->getLocale(), $price]) }}">edit</a><br>
                                                                <a href="{{ route('price.delete.get', [app()->getLocale(), $price]) }}">delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
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
