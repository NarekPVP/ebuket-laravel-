@extends('layouts.app')

@section('content')

    @include('layouts.sidebar')
                <?php $bouquets = \App\Models\Bouquet::all(); ?>
                <div class="right-col">
                    @if(!empty($bouquets))
                        <div class="product-view">
                            <div class="bord-div">
                                <div class="heading-white">
                                    <h2 class="relative bg-white">Авторские</h2>
                                </div>
                            </div>
                            <div class="grid-item flex products-card-body">
                                @foreach($bouquets as $product)
                                <div class="item-view">
                                    <div class="item">
                                        <div class="img-item">
                                            <a href="{{ route('bouquets.single', $product->id) }}"><img src="{{ asset($product->img) }}"></a>
                                        </div>
                                        <div class="info-item flex">
                                            <div class="name-item">
                                                <a href="#"><p>{{ $product->name }}</p></a>
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
                                                <button class="main-btn btn-buy"><span class="default">{{ $product->price }} грн</span><span class="hover">Купить</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="show-all just-center">
                                <button class="click">переглянути всі</button>
                            </div>
                        </div>
                    @else
                        <div class="show-all just-center">
                            <h1>Продуктів не знайдено</h1>
                        </div>
                    @endif
                </div>
            </div>
            <section class="about-us">
                <div class="cont-ainer">
                    <div class="row">
                        <div class="col-12 col-md-12 col-xl-6">
                            <div class="heading-big"><h2>Что такое e-Buket?</h2></div>
                        </div>
                        <div class="col-12 col-md-12 col-xl-6">
                            <div class="txt-big">
                                <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</p>
                            </div>
                        </div>
                        @guest()
                            <div class="just-center btn-about">
                                <button class="main-btn main-blue" data-bs-toggle="modal" data-bs-target="#exampleModal4">продавать на e-Buket</button>
                            </div>
                        @endguest
                    </div>
                </div>
            </section>
@endsection

@section('js')
    <script>
        function sendPriceFilterAjax() {
            let min = parseInt($('#price-min').val());
            let max = parseInt($('#price-max').val());

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'GET',
                url: "{{ route('bouquets.filter', App()->getLocale()) }}",
                data: {min: min, max: max},
                success: function(data){
                    $('.products-card-body').html(data);
                }
            });

        }
        $('.polzunok-5').on('click', sendPriceFilterAjax);
        $('#price-min').on('change', sendPriceFilterAjax);
        $('#price-max').on('change', sendPriceFilterAjax);
        $('.ui-slider-handle').on('click', sendPriceFilterAjax);
    </script>
@endsection
